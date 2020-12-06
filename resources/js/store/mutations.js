export default {
    setUserAuth(state, value) {
        state.isAuth = value;
    },
    saveUserinfo(state, payload) {
        state.user = payload;
    },
    saveInitialPosts(state, payload) {
        state.posts = payload;
    },
    addLatestPost(state, payload) {
        state.posts.unshift(payload);
    },
    savePostLike(state, payload) {
        let post = state.posts.find(post => post.id === payload.postId);
        post.likes.unshift(payload.like);
    },
    savePostUnlike(state, payload) {
        let postIndex = state.posts.findIndex(post => post.id === payload.postId);
        let likeIndex = state.posts[postIndex].likes.findIndex(like => like.userId === payload.userId);
        state.posts[postIndex].likes.splice(likeIndex, 1);
    },
    addPostComment(state, payload) {
        let post = state.posts.find(post => post.id === payload.postId);
        post.comments.unshift(payload.comment);
    },
    deletePostComment(state, payload) {
        let postIndex = state.posts.findIndex(post => post.id === payload.postId);
        let commentIndex = state.posts[postIndex].comments.findIndex(comment => comment.id === payload.commentId);
        state.posts[postIndex].comments.splice(commentIndex, 1);
    }
};