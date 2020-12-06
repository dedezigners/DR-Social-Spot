<template>
    <div class="media post-comment has-emojis" v-if="isAuth">
        <div class="media-content">
            <div class="field">
                <p class="control">
                    <textarea class="textarea comment-textarea" rows="1" placeholder="Write a comment..."></textarea>
                </p>
            </div>
            
            <div class="actions">
                <div class="image is-32x32">
                    <img class="is-rounded" src="https://via.placeholder.com/300x300" />
                </div>
                <div class="toolbar">
                    <a class="button is-solid primary-button raised">Post Comment</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "WriteComment",
    computed: {
        isAuth: function() {
            return this.$store.state.isAuth ? true : false;
        }
    }
}
</script>
