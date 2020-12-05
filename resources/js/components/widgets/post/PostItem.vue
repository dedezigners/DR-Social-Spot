<template>
    <div :class="['card is-post', post.type == 'text' ? 'is-simple' : '']">
        <div class="content-wrap">
            <div class="card-heading">
                <div class="user-block">
                    <div class="image">
                        <img src="https://via.placeholder.com/300x300" />
                    </div>
                    <div class="user-info">
                        <a href="#">{{ post.name }}</a>
                        <span class="time">{{ post.createdAt }}</span>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="post-text">
                    <p>{{ post.post }}</p>
                </div>
                
                <post-action :postId="post.id" :like="isLike" />
            </div>

            <div class="card-footer">
                <div class="likers-group" v-if="likersImages" v-html="likersImages"></div>
                
                <div class="likers-text">
                    <p v-html="likersUsers"></p>
                    <p>{{ likersMessage }}</p>
                </div>

                <social-count :likes="post.likes.length" />
            </div>
        </div>
        
        <comments v-if="false" />
    </div>
</template>

<script>
import Comments from '../comments/Comments';
import SocialCount from './SocialCount';

export default {
    name: 'PostItem',
    components: {
        Comments, SocialCount
    },
    props: {
        post: {
            type: Object,
            default: null,
            required: true
        }
    },
    data() {
        return {
            maxLikersName: 3,
            maxLikersImage: 5,
        }
    },
    computed: {
        likersUsers: function() {
            let likers = ['<a>No Likes</a>'];

            if (this.post.likes.length) {
                likers = this.post.likes.slice(0, this.maxLikersName).map(liker => {
                    // let name = liker.user.id === this.$store.getters.userId ? 'You' : liker.user.firstName;
                    let name = liker.user.firstName;
                    return `<a href="${liker.user.profile}">${name}</a>`;
                });
            }
                
            return likers.join(', ');
        },
        likersMessage: function() {
            let text = 'Be the first to like it.';
            if (this.post.likes.length > 0 && this.post.likes.length <= this.maxLikersName) text = "liked this";
            else if (this.post.likes.length > this.maxLikersName) text = `and ${(this.post.likes.length - this.maxLikersName)} more liked this`;

            return text;
        },
        likersImages: function() {
            if (this.post.likes.length) {
                let likersImages = this.post.likes.slice(0, this.maxLikersImage).map(liker => {
                    return `<img src="${liker.user.avatar}" />`;
                });

                return likersImages.join('');
            }
            return false;
        },
        user: function() {
            return this.$store.state.user;
        },
        isLike: function() {
            if (this.$store.state.isAuth && this.$store.getters.userId) {
                return this.post.likes.some(liker => liker.userId === this.$store.getters.userId);
            }
            return false;
        }
    }
}
</script>