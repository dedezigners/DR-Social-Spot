export default {
    getAuthentiactedUser({ commit }) {
        axios.get('/user-info')
        .then(res => {
            commit('saveUserinfo', res.data.data);
        });
    },
    getInitialPosts({ commit }) {
        axios.get('/posts')
        .then(res => {
            commit('saveInitialPosts', res.data.data);
        });
    },
    saveLatestPost({ commit }, payload) {
        commit('addLatestPost', payload);
    },
};