<template>
    <div class="navbar is-inline-flex is-transparent no-shadow is-hidden-mobile">
        <div class="container is-fluid">
            <div class="navbar-brand">
                <router-link to="/" class="navbar-item">
                    <img class="logo" src="/assets/img/friendkit-bold.svg" width="112" height="28" alt="">
                </router-link>
            </div>
            <div class="navbar-menu">
                <div class="navbar-end">

                    <div class="navbar-item" v-if="false">
                        <div id="global-search" class="control">
                            <input id="tipue_drop_input" class="input is-rounded" type="text" placeholder="Search" required />
                            <span id="clear-search" class="reset-search">
                                <load-svg feather="x" />
                            </span>
                            <span class="search-icon">
                                <load-svg feather="search" />
                            </span>
                            <span class="drop-icon">
                                <load-svg feather="more-vertical" />
                            </span>

                            <div class="search-options">
                                <ul class="options-list">
                                    <!-- Search Option -->
                                    <li class="is-selected">
                                        <!--label class="material-radio">
                                                <input type="radio" name="search-type" checked>
                                                <span class="radio-label"></span>
                                            </label-->
                                        <span class="option-icon">
                                                <i data-feather="search"></i>
                                            </span>
                                        <span class="option-description">
                                                <span>Search All</span>
                                        <span>Search everything </span>
                                        </span>
                                    </li>
                                    <!-- Search Option -->
                                    <li>
                                        <span class="option-icon">
                                            <i data-feather="users"></i>
                                        </span>
                                        <span class="option-description">
                                                <span>Search People</span>
                                        <span>Search accross people and friends</span>
                                        </span>
                                    </li>
                                    <!-- Search Option -->
                                    <li>
                                        <span class="option-icon">
                                            <i data-feather="file-text"></i>
                                        </span>
                                        <span class="option-description">
                                            <span>Search Pages</span>
                                            <span>Search all Posts and news feeds</span>
                                        </span>
                                    </li>
                                </ul>
                                <!-- Close -->
                                <div class="is-close">
                                    <button id="close-search-options" type="button" class="button is-solid grey-button">Close</button>
                                </div>
                            </div>

                            <div id="tipue_drop_content"></div>
                        </div>

                    </div>

                    <div v-if="!isAuth" class="navbar-item">
                        <div class="navbar-item">
                            <router-link to="/login">Login</router-link>
                        </div>
                        <router-link to="/signup" class="button is-cta is-solid primary-button raised">Sign Up</router-link>
                    </div>
                    <div v-else class="navbar-item is-account drop-trigger has-caret">
                        <div class="user-image" @click="enableDropdown = true">
                            <img src="https://via.placeholder.com/300x300" />
                            <span class="indicator"></span>
                        </div>

                        <div :class="['nav-drop is-account-dropdown', enableDropdown ? 'is-active' : '']">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span class="username">Jenna Davis</span>
                                    <a @click="enableDropdown = false"><load-svg feather="x" /></a>
                                </div>
                                <div class="nav-drop-body account-items" @click="enableDropdown = false">
                                    <router-link to="/profile" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" />
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Jenna Davis</h3>
                                                <small>Main account</small>
                                            </div>
                                            <div class="media-right">
                                                <load-svg feather="check" />
                                            </div>
                                        </div>
                                    </router-link>
                                    <hr class="account-divider">
                                    <router-link to="/settings" class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <load-svg feather="settings" />
                                            </div>
                                            <div class="media-content">
                                                <h3>Settings</h3>
                                                <small>Access widget settings.</small>
                                            </div>
                                        </div>
                                    </router-link>
                                    <router-link to="#!" class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <load-svg feather="life-buoy" />
                                            </div>
                                            <div class="media-content">
                                                <h3>Help</h3>
                                                <small>Contact our support.</small>
                                            </div>
                                        </div>
                                    </router-link>
                                    <a @click="logout" class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <load-svg feather="power" />
                                            </div>
                                            <div class="media-content">
                                                <h3>Log out</h3>
                                                <small>Log out from your account.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'AppHeader',
    data() {
        return {
            enableDropdown: false,
        }
    },
    computed: {
        isAuth: function() {
            return user.loggedIn();
            // return this.$store.state.isAuth;
        }
    },
    methods: {
        logout() {
            axios.post('auth/logout');
            user.logout();
            // this.$store.commit('setUserAuth', false);
            window.location.href = '/';
        }
    }
}
</script>