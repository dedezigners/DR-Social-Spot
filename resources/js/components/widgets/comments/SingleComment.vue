<template>
    <div class="media is-comment">
        <div class="media-left">
            <div class="image">
                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
            </div>
        </div>
        
        <div class="media-content">
            <a :href="comment.user.profile">{{ comment.user.name }}</a>
            <span class="time">{{ comment.createdAt }}</span>
            <p v-html="comment.comment"></p>
            
            <div class="controls">
                <div class="like-count">
                    <load-svg feather="thumbs-up" />
                    <span>{{ comment.likes.length }}</span>
                </div>
                <div class="reply" v-if="false">
                    <a href="#">Reply</a>
                </div>
                <div class="edit"
                v-if="false"><a href="#">Edit</a></div>
                <div
                class="delete"
                @click="deleteComment"
                v-if="isAdmin"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SingleComment",
    props: {
        post: {
            type: Number,
            required: true
        },
        comment: {
            type: Object,
            required: true
        }
    },
    computed: {
        isAdmin: function () {
            return this.comment.userId === this.$store.getters.userId ? true : false;
        }
    },
    methods: {
        deleteComment() {
            axios.delete(`/post/${this.post}/comment/${this.comment.id}/delete`)
            .then(res => {
                console.log(res.data);
            });
        }
    }
}
</script>

<style lang="scss" scoped>
.card .media:not(:last-child) {
    margin-bottom: 0;
}
</style>
