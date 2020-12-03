<template>
    <div :class="['card is-post', post.type == 'text' ? 'is-simple' : '']">
        <div class="content-wrap">

            <div class="card-heading">
                <div class="user-block">
                    <div class="image">
                        <img src="https://via.placeholder.com/300x300" />
                    </div>
                    <div class="user-info">
                        <a href="#">{{ post.name }}</a>
                        <span class="time">{{ post.created_at }}</span>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="post-text">
                    <p>{{ post.post }}</p>
                </div>
                
                <post-action />
            </div>

            <div class="card-footer">
                
                <div class="likers-group">
                    <img src="https://via.placeholder.com/300x300" />
                    <img src="https://via.placeholder.com/300x300" />
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
                        <span>0</span>
                    </div>
                    <div class="shares-count">
                        <load-svg feather="link-2" />
                        <span>0</span>
                    </div>
                    <div class="comments-count">
                        <load-svg feather="message-circle" />
                        <span>0</span>
                    </div>
                </div>
            </div>
        </div>
        
        <comments v-if="false" />
    </div>
</template>

<script>
import Comments from '../comments/Comments';
export default {
    name: 'PostItem',
    components: {
        Comments
    },
    props: {
        post: {
            type: Object,
            default: null,
            required: true
        }
    },
    
}
</script>