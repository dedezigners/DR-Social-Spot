export default {
    setUserAuth(state, value) {
        state.isAuth = value;
    },
    saveUserinfo(state, payload) {
        state.userinfo = payload;
    },
    saveInitialPosts(state, payload) {
        state.posts = payload;
    }
};