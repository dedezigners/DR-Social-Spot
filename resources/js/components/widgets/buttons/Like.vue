<template>
    <div class="like-wrapper">
        <a
        @click="likeDislike"
        :class="['like-button', isLike ? 'is-active' : '']">
            <i class="mdi mdi-heart not-liked bouncy"></i>
            <i class="mdi mdi-heart is-liked bouncy"></i>
            <span class="like-overlay"></span>
        </a>
    </div>
</template>

<script>
export default {
    name: 'LikeButton',
    props: {
        postId: {
            type: Number,
            required: true
        },
        like: {
            type: Boolean,
            default: false
        }
    },
    data() {
        return {
            isLike: this.like
        }
    },
    methods: {
        likeDislike() {
            this.isLike = !this.isLike;

            if (this.$store.state.isAuth) {
                if (this.isLike) {
                    axios.post(`/post/${this.postId}/like`)
                    .then(res => {
                        this.$store.commit('savePostLike', {
                            postId: this.postId,
                            like: res.data.data
                        });
                    })
                    .catch(err => console.log(err.response.data));
                } else {
                    axios.post(`/post/${this.postId}/dislike`)
                    .then(res => {
                        this.$store.commit('savePostUnlike', {
                            postId: this.postId,
                            userId: res.data.userId
                        });
                    })
                    .catch(err => console.log(err.response.data));
                }
            }
        }
    },
}
</script>
