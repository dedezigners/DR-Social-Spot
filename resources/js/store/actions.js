export default {
    getAuthentiactedUser({ commit }) {
        axios.get('/user-info')
        .then(res => {
            commit('saveUserinfo', res.data.data);
        });
    }
};