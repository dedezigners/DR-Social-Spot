<template>
    <div>
        <div :class="['app-overlay', overlay ? 'is-active' : '']"></div>
        <app-header />
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: 'App',
    data() {
        return {
            overlay: false,
        }
    },
    mounted() {
        this.init();
    },
    methods: {
        init() {
            EventBus.$on('activateComposing', () => {
                this.overlay = true;
            });
            EventBus.$on('deActivateComposing', () => {
                this.overlay = false;
            });

            if (user.loggedIn()) {
                this.$store.commit('setUserAuth', true);
                // temp disabled
                // this.$store.dispatch('getAuthentiactedUser');
            }

            this.$store.dispatch('getInitialPosts');
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
