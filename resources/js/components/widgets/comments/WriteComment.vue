<template>
    <div class="media post-comment has-emojis" v-if="isAuth">
        <div class="media-content">
            <div class="field">
                <p class="control">
                    <textarea
                    class="textarea comment-textarea"
                    v-model="form.comment"
                    rows="1"
                    placeholder="Write a comment..."></textarea>
                </p>
            </div>
            
            <div class="actions">
                <div class="image is-32x32">
                    <img class="is-rounded" :src="user.avatar" />
                </div>
                <div class="toolbar">
                    <a
                    @click="addComment"
                    class="button is-solid primary-button raised">Post Comment</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "WriteComment",
    props: {
        postId: {
            type: Number,
            required:true
        }
    },
    data() {
        return {
            form: {
                comment: ''
            }
        }
    },
    computed: {
        isAuth: function() {
            return this.$store.state.isAuth ? true : false;
        },
        user: function() {
            return this.$store.state.user;
        }
    },
    methods: {
        addComment() {
            axios.post(`/post/${this.postId}/comment`, this.form)
            .then(res => {
                console.log(res.data)
            })
            .catch(err => console.log(err.response.data));
        }
    }
}
</script>
