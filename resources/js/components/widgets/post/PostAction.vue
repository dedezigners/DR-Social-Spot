<template>
    <div class="post-actions">
        <div class="like-wrapper">
            <a
            @click="likeDislike"
            :class="['like-button', isLike ? 'is-active' : '']">
                <i class="mdi mdi-heart not-liked bouncy"></i>
                <i class="mdi mdi-heart is-liked bouncy"></i>
                <span class="like-overlay"></span>
            </a>
        </div>

        <div class="fab-wrapper is-share" v-if="false">
            <a class="small-fab share-fab modal-trigger" data-modal="share-modal">
                <load-svg feather="link-2" />
            </a>
        </div>

        <div class="fab-wrapper is-comment">
            <a class="small-fab">
                <load-svg feather="message-circle" />
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostAction',
    data() {
        return {
            isLike: false
        }
    },
    methods: {
        likeDislike() {
            this.isLike = !this.isLike;

            if (this.isLike) {
                axios.post(`/posts/1/like`)
                .then(res => {
                    console.log(res.data);
                })
                .catch(err => console.log(err.response.data));
            } else {
                console.log('Dislike');
            }
        }
    },
}
</script>
