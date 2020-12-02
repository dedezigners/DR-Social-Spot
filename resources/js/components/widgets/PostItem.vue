<template>
    <div class="card is-post">
        <div class="content-wrap">

            <div class="card-heading">
                <div class="user-block">
                    <div class="image">
                        <img src="/assets/img/avatars/dan.jpg" />
                    </div>
                    <div class="user-info">
                        <a href="#">Dan Walker</a>
                        <span class="time">July 26 2018, 01:03pm</span>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="post-text">
                    <p>Yesterday with<a href="#">@Karen Miller</a> and
                        <a href="#">@Marvin Stemperd</a> at the
                        <a href="#">#Rock'n'Rolla</a> concert in LA. Was totally fantastic! People were really excited about this one!</p>
                </div>
                <div class="post-image">
                    <img src="/assets/img/demo/unsplash/1.jpg" />

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
            </div>

            <div class="card-footer">
                
                <div class="likers-group">
                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">
                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">
                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                </div>
                
                <div class="likers-text">
                    <p>
                        <a href="#">Milly</a>,
                        <a href="#">David</a>
                    </p>
                    <p>and 23 more liked this</p>
                </div>

                <div class="social-count">
                    <div class="likes-count">
                        <load-svg feather="heart" />
                        <span>27</span>
                    </div>
                    <div class="shares-count">
                        <load-svg feather="link-2" />
                        <span>9</span>
                    </div>
                    <div class="comments-count">
                        <load-svg feather="message-circle" />
                        <span>3</span>
                    </div>
                </div>
            </div>
        </div>
        
        <comments />
    </div>
</template>

<script>
import Comments from './comments/Comments';
export default {
    name: 'PostItem',
    components: {
        Comments
    }
}
</script>