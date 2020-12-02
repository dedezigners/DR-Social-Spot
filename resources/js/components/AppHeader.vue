<template>
    <div id="main-navbar" class="navbar is-inline-flex is-transparent no-shadow is-hidden-mobile">
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
                                <i data-feather="x"></i>
                            </span>
                            <span class="search-icon">
                                <load-svg feather="search" />
                            </span>
                            <span class="drop-icon">
                                <i data-feather="more-vertical"></i>
                            </span>

                            <!-- Search Dropdown -->
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

                    <div v-if="!isAuthenticate" class="navbar-item">
                        <div class="navbar-item">
                            <router-link to="/login">Login</router-link>
                        </div>
                        <router-link to="/signup" class="button is-cta is-solid primary-button raised">Sign Up</router-link>
                    </div>

                    <div v-else id="account-dropdown" class="navbar-item is-account drop-trigger has-caret">
                        <div class="user-image" @click="showDropdown">
                            <img src="/assets/img/jenna.png" />
                            <span class="indicator"></span>
                        </div>

                        <div :class="navDropDownclasses">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span class="username">Jenna Davis</span>
                                    <a @click="hideDropdown"><load-svg feather="x" /></a>
                                </div>
                                <div class="nav-drop-body account-items">
                                    <a id="profile-link" href="/profile-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="/assets/img/jenna.png" />
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Jenna Davis</h3>
                                                <small>Main account</small>
                                            </div>
                                            <div class="media-right">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    <a href="/options-settings.html" class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="settings"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Settings</h3>
                                                <small>Access widget settings.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="life-buoy"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Help</h3>
                                                <small>Contact our support.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="power"></i>
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
                    <div class="navbar-item is-plus-menu is-hidden">
                        <a id="plus-menu" class="button action-button is-solid primary-button raised">
                            <i data-feather="plus"></i>
                        </a>
                        <div class="plus-drop">
                            <div class="drop-content">
                                <a>
                                    <i data-feather="book"></i>
                                    <div class="meta">
                                        <span>Guides</span>
                                        <span>Learn everything fast</span>
                                    </div>
                                </a>
                                <a>
                                    <i data-feather="help-circle"></i>
                                    <div class="meta">
                                        <span>FAQ</span>
                                        <span>Most asked questions</span>
                                    </div>
                                </a>
                                <a>
                                    <i data-feather="life-buoy"></i>
                                    <div class="meta">
                                        <span>Assistance</span>
                                        <span>Get in touch with support</span>
                                    </div>
                                </a>
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
    name: 'Header',
    data() {
        return {
            navDropDownclasses: 'nav-drop is-account-dropdown',
            isAuthenticate: false, 
        }
    },
    methods: {
        showDropdown() {
            this.navDropDownclasses = 'nav-drop is-account-dropdown is-active';
        },
        hideDropdown() {
            this.navDropDownclasses = 'nav-drop is-account-dropdown';
        }
    }
}
</script>