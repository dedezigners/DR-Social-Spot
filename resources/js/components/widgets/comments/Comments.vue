<template>
    <div class="comments-wrap" v-if="show">
        <div class="comments-heading" v-if="false">
            <h4>Comments<small>({{ comments.length }})</small></h4>
        </div>

        <div class="comments-body has-slimscroll" v-if="comments.length">
            <empty-comment v-if="false" />
            <single-comment />
        </div>

        <div class="card-footer">
            <write-comment />
        </div>
    </div>
</template>

<script>
import EmptyComment from './EmptyComment';
import SingleComment from './SingleComment';
import WriteComment from './WriteComment';

export default {
    name: "Comments",
    props: {
        comments: {
            type: Array,
            required: true,
        },
        show: {
            type: Boolean,
            default: false,
        }
    },
    components: {
        EmptyComment, SingleComment, WriteComment
    }
}
</script>

<style lang="scss" scoped>
.comments-wrap {
    border-top: 1px solid rgba(219,219,219,0.5);
}
</style>