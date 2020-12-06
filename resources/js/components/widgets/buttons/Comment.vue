<template>
    <div class="fab-wrapper is-comment">
        <a class="small-fab" @click="showComment">
            <load-svg feather="message-circle" />
        </a>
    </div>
</template>

<script>
export default {
    name: 'CommentButton',
    props: {
        show: {
            type: Boolean,
            default: false
        }
    },
    methods: {
        showComment() {}
    }
}
</script>
