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
    }
};