<template>
    <div class="comments-wrap">
        <div class="comments-heading">
            <h4>Comments<small>(8)</small></h4>
        </div>

        <div class="comments-body has-slimscroll">
            <single-comment />
        </div>

        <div class="card-footer">
            <write-comment />
        </div>
    </div>
</template>

<script>
import SingleComment from './SingleComment';
import WriteComment from './WriteComment';

export default {
    name: "Comments",
    components: {
        SingleComment, WriteComment
    }
}
</script>
