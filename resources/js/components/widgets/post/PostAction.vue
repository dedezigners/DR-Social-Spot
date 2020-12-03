<template>
    <div class="post-actions">
        <div class="like-wrapper">
            <a class="like-button">
                <i class="mdi mdi-heart not-liked bouncy"></i>
                <i class="mdi mdi-heart is-liked bouncy"></i>
                <span class="like-overlay"></span>
            </a>
        </div>

        <div class="fab-wrapper is-share">
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
    name: 'PostAction'
}
</script>
