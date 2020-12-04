<template>
    <div class="post-actions">
        <like :postId="postId" :like="like" />
        <comment />
        <share v-if="false" />
    </div>
</template>

<script>
export default {
    name: 'PostAction',
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
        return {}
    },
    methods: {},
}
</script>
