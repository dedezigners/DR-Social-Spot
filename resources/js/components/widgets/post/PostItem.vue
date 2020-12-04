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
                
                <post-action />
            </div>

            <div class="card-footer">
                
                <div class="likers-group" v-if="false">
                    <img src="https://via.placeholder.com/300x300" />
                    <img src="https://via.placeholder.com/300x300" />
                </div>
                
                <div class="likers-text">
                    <p v-html="likersUsers"></p>
                    <p>{{ likersMessage }}</p>
                </div>

                <div class="social-count">
                    <div class="comments-count">
                        <load-svg feather="message-circle" />
                        <span>{{ post.comments.length }}</span>
                    </div>
                    <div class="shares-count" v-if="false">
                        <load-svg feather="link-2" />
                        <span>0</span>
                    </div>
                    <div class="likes-count">
                        <load-svg feather="heart" />
                        <span>{{ post.likes.length }}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <comments v-if="false" />
    </div>
</template>

<script>
import Comments from '../comments/Comments';
export default {
    name: 'PostItem',
    components: {
        Comments
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
            let text = "No Likes";
            return `<a>${text}</a>`;
        },
        likersMessage: function() {
            let text = 'Be the first to like it.';
            if (this.post.likes.length > 0 && this.post.likes.length <= this.maxLikersName) text = "liked this";
            else if (this.post.likes.length > this.maxLikersName) text = `and ${(this.post.likes.length - this.maxLikersName)} more liked this`;

            return text;
        }
    },
}
</script>