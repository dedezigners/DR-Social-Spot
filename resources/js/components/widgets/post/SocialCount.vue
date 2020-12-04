<template>
    <div class="social-count">
        <div class="comments-count">
            <load-svg feather="message-circle" />
            <span>{{ comments }}</span>
        </div>
        <div class="shares-count" v-if="false">
            <load-svg feather="link-2" />
            <span>{{ shares }}</span>
        </div>
        <div class="likes-count">
            <load-svg feather="heart" />
            <span>{{ likes }}</span>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SocialCount',
    props: {
        likes: {
            type: Number,
            default: 0
        },
        comments: {
            type: Number,
            default: 0
        },
        shares: {
            type: Number,
            default: 0
        },
    }
}
</script>