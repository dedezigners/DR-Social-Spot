<template>
    <div class="view-wrapper">
        <div id="main-feed" class="container">
            <div id="activity-feed" class="view-wrap true-dom">
                <div class="columns">
                    <div class="column is-3 is-hidden-mobile">
                        <weather />
                    </div>
                    <div class="column is-6">
                        <compose />

                        <post-item v-for="post in posts" :key="post.id" :post="post" />
                    </div>
                    <div class="column is-3">
                        <suggested-friends />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Weather from './widgets/Weather';
import SuggestedFriends from './widgets/SuggestedFriends';
import Compose from './widgets/post/Compose';
import PostItem from './widgets/post/PostItem';

export default {
    components: {
        Weather, SuggestedFriends, Compose, PostItem
    },
    computed: {
        posts: function() {
            return this.$store.state.posts;
        }
    }
}
</script>
