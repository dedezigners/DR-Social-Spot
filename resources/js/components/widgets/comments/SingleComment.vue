<template>
    <div class="media is-comment">
        <div class="media-left">
            <div class="image">
                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
            </div>
        </div>
        
        <div class="media-content">
            <a href="#">Dan Walker</a>
            <span class="time">28 minutes ago</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>
            <!-- Actions -->
            <div class="controls">
                <div class="like-count">
                    <load-svg feather="thumbs-up" />
                    <span>4</span>
                </div>
                <div class="reply">
                    <a href="#">Reply</a>
                </div>
                <div class="edit">
                    <a href="#">Edit</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SingleComment"
}
</script>
