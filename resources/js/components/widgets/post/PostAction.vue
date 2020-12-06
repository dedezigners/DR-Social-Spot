<template>
    <div class="post-actions">
        <like :postId="postId" :like="like" />
        <comment :show="show" />
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
        },
        show: {
            type: Boolean,
            default: false,
            required: true
        }
    },
    data() {
        return {}
    },
    methods: {},
}
</script>
