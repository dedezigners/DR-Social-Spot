<template>
    <div class="view-wrapper is-full">

        <div class="settings-sidebar is-active">
            <div class="settings-sidebar-inner">
                <div class="user-block">
                    <a class="close-settings-sidebar is-hidden">
                        <load-svg feather="x" />
                    </a>
                    <div class="avatar-wrap">
                        <img src="/assets/img/jenna.png" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                        <div class="badge">
                            <load-svg feather="check" />
                        </div>
                    </div>
                    <h4>Jenna Davis</h4>
                    <p>Melbourne, AU</p>
                </div>
                <div class="user-menu">
                    <div class="user-menu-inner has-slimscroll">
                        <div class="menu-block">
                            <ul>
                                <li data-section="general" :class="activeSecton === SECTIONS.GENERAL ? 'is-active' : ''">
                                    <a @click="activeSecton = SECTIONS.GENERAL">
                                        <load-svg feather="settings" />
                                        <span>General</span>
                                    </a>
                                </li>
                                <li data-section="security" :class="activeSecton === SECTIONS.SECURITY ? 'is-active' : ''">
                                    <a @click="activeSecton = SECTIONS.SECURITY">
                                        <load-svg feather="shield" />
                                        <span>Security</span>
                                    </a>
                                </li>
                                <li data-section="personal" :class="activeSecton === SECTIONS.ACCOUNT ? 'is-active' : ''">
                                    <a @click="activeSecton = SECTIONS.ACCOUNT">
                                        <load-svg feather="alert-triangle" />
                                        <span>Account</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="settings-wrapper">
            <div id="general-settings" :class="['settings-section', activeSecton === SECTIONS.GENERAL ? 'is-active' : '']">
                <div class="settings-panel">

                    <div class="title-wrap">
                        <a class="mobile-sidebar-trigger">
                            <load-svg feather="menu" />
                        </a>
                        <h2>General Settings</h2>
                    </div>

                    <div class="settings-form-wrapper">
                        <div class="settings-form">
                            <div class="columns is-multiline">

                                <div class="column is-6">
                                    <!--Field-->
                                    <div class="field field-group">
                                        <label>First Name</label>
                                        <div class="control has-icon">
                                            <input type="text" class="input is-fade" value="Jenna">
                                            <div class="form-icon">
                                                <load-svg feather="user" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--Field-->
                                    <div class="field field-group">
                                        <label>Email</label>
                                        <div class="control has-icon">
                                            <input type="text" class="input is-fade" value="jennadavis@gmail.com">
                                            <div class="form-icon">
                                                <load-svg feather="mail" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-6">
                                    <!--Field-->
                                    <div class="field field-group">
                                        <label>Last Name</label>
                                        <div class="control has-icon">
                                            <input type="text" class="input is-fade" value="Davis">
                                            <div class="form-icon">
                                                <load-svg feather="user" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--Field-->
                                    <div class="field field-group">
                                        <label>Backup Email</label>
                                        <div class="control has-icon">
                                            <input type="text" class="input is-fade" value="jenn34@outlook.com">
                                            <div class="form-icon">
                                                <load-svg feather="mail" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-12">
                                    <!--Field-->
                                    <div class="field field-group">
                                        <label>Address</label>
                                        <div class="control">
                                            <textarea type="text" class="textarea is-fade" rows="1" placeholder="Fill in your address..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-12">
                                    <!--Field-->
                                    <div class="form-text">
                                        <p>Be sure to fill out your location settings. This will help us suggest you relevant friends and places you could like.</p>
                                    </div>
                                </div>

                                <div class="column is-6">
                                    <!--Field-->
                                    <div class="field field-group">
                                        <label>City</label>
                                        <div class="control has-icon">
                                            <input type="text" class="input is-fade" value="Melbourne">
                                            <div class="form-icon">
                                                <load-svg feather="map-pin" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-6">
                                    <!--Field-->
                                    <div class="field field-group is-autocomplete">
                                        <label>Country</label>
                                        <div class="control has-icon">
                                            <input id="country-autocpl" type="text" class="input is-fade" value="Australia">
                                            <div class="form-icon">
                                                <load-svg feather="globe" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-12">
                                    <div class="buttons">
                                        <button class="button is-solid accent-button form-button">Save Changes</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="illustration">
                            <img src="/assets/img/illustrations/settings/1.svg" alt="">
                            <p>If you'd like to learn more about general settings, you can read about it in the <a>user guide</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="security-settings" :class="['settings-section', activeSecton === SECTIONS.SECURITY ? 'is-active' : '']">
                <div class="settings-panel">

                    <div class="title-wrap">
                        <a class="mobile-sidebar-trigger">
                            <load-svg feather="menu" />
                        </a>
                        <h2>Security</h2>
                    </div>

                    <div class="settings-form-wrapper">
                        <div class="settings-form">
                            <div class="columns is-multiline">

                                <div class="column is-12">
                                    <!--Field-->
                                    <div class="field field-group">
                                        <label>Current Password</label>
                                        <div class="control has-icon">
                                            <input type="password" class="input is-fade" value="testpassword">
                                            <div class="form-icon">
                                                <load-svg feather="lock" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-6">
                                    <!--Field-->
                                    <div class="field field-group">
                                        <label>New Password</label>
                                        <div class="control has-icon">
                                            <input type="password" class="input is-fade" value="">
                                            <div class="form-icon">
                                                <load-svg feather="lock" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-6">
                                    <!--Field-->
                                    <div class="field field-group">
                                        <label>Repeat Password</label>
                                        <div class="control has-icon">
                                            <input type="password" class="input is-fade" value="">
                                            <div class="form-icon">
                                                <load-svg feather="lock" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-12">
                                    <!--Field-->
                                    <div class="form-text">
                                        <p>You can enable 2 factor authentication anytime to improve your account privacy and security.</p>
                                    </div>
                                </div>

                                <div class="column is-6">
                                    <!--Field-->
                                    <div class="field">
                                        <div class="switch-block">
                                            <label class="f-switch is-accent">
                                                <input type="checkbox" class="is-switch is-success">
                                                <i></i>
                                            </label>
                                            <div class="meta">
                                                <h4>Enable 2 factor auth</h4>
                                                <p>This will send an additional code to your phone number.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-6">
                                    <!--Field-->
                                    <div class="field field-group">
                                        <label>Phone Number</label>
                                        <div class="control has-icon">
                                            <input type="text" class="input is-fade" value="">
                                            <div class="form-icon">
                                                <load-svg feather="smartphone" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-12">
                                    <div class="buttons">
                                        <button class="button is-solid accent-button form-button">Save Changes</button>
                                        <button class="button is-light form-button">Advanced</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="illustration">
                            <img src="/assets/img/illustrations/settings/2.svg" alt="">
                            <p>If you'd like to learn more about security settings, you can read about it in the <a>user guide</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="personal-settings" :class="['settings-section', activeSecton === SECTIONS.ACCOUNT ? 'is-active' : '']">
                <div class="settings-panel">

                    <div class="title-wrap">
                        <a class="mobile-sidebar-trigger">
                            <load-svg feather="menu" />
                        </a>
                        <h2>Personal</h2>
                    </div>

                    <div class="settings-form-wrapper">
                        <div class="settings-form">
                            <div class="columns is-multiline flex-portrait">
                                <!--link-->
                                <div class="column is-4">
                                    <a class="setting-sublink">
                                        <div class="link-content">
                                            <div class="link-icon">
                                                <load-svg feather="user" />
                                            </div>
                                            <h4>Personal Info</h4>
                                            <p>Access your personal info</p>
                                        </div>
                                    </a>
                                </div>
                                <!--link-->
                                <div class="column is-4">
                                    <a class="setting-sublink">
                                        <div class="link-content">
                                            <div class="link-icon">
                                                <load-svg feather="clock" />
                                            </div>
                                            <h4>History</h4>
                                            <p>Access private history</p>
                                        </div>
                                    </a>
                                </div>
                                <!--link-->
                                <div class="column is-4">
                                    <a class="setting-sublink">
                                        <div class="link-content">
                                            <div class="link-icon">
                                                <load-svg feather="download-cloud" />
                                            </div>
                                            <h4>Download</h4>
                                            <p>Download your data</p>
                                        </div>
                                    </a>
                                </div>
                                <!--link-->
                                <div class="column is-4">
                                    <a class="setting-sublink">
                                        <div class="link-content">
                                            <div class="link-icon">
                                                <load-svg feather="codepen" />
                                            </div>
                                            <h4>Connected Apps</h4>
                                            <p>Manage connected apps</p>
                                        </div>
                                    </a>
                                </div>
                                <!--link-->
                                <div class="column is-4">
                                    <a class="setting-sublink">
                                        <div class="link-content">
                                            <div class="link-icon">
                                                <load-svg feather="credit-card" />
                                            </div>
                                            <h4>Payment Info</h4>
                                            <p>Manage payment info</p>
                                        </div>
                                    </a>
                                </div>
                                <!--link-->
                                <div class="column is-4">
                                    <a class="setting-sublink">
                                        <div class="link-content">
                                            <div class="link-icon">
                                                <load-svg feather="hexagon" />
                                            </div>
                                            <h4>Account</h4>
                                            <p>Manage account info</p>
                                        </div>
                                    </a>
                                </div>
                                <!--link-->
                                <div class="column is-4">
                                    <a class="setting-sublink">
                                        <div class="link-content">
                                            <div class="link-icon">
                                                <load-svg feather="github" />
                                            </div>
                                            <h4>Integrations</h4>
                                            <p>Manage integrations</p>
                                        </div>
                                    </a>
                                </div>
                                <!--link-->
                                <div class="column is-4">
                                    <a class="setting-sublink">
                                        <div class="link-content">
                                            <div class="link-icon">
                                                <load-svg feather="shopping-cart" />
                                            </div>
                                            <h4>Shop Settings</h4>
                                            <p>Manage your store</p>
                                        </div>
                                    </a>
                                </div>
                                <!--link-->
                                <div class="column is-4">
                                    <a class="setting-sublink">
                                        <div class="link-content">
                                            <div class="link-icon">
                                                <load-svg feather="database" />
                                            </div>
                                            <h4>System Settings</h4>
                                            <p>Manage preferences</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="illustration">
                            <img src="/assets/img/illustrations/settings/3.svg" alt="">
                            <p>If you'd like to learn more about account settings, you can read about it in the <a>user guide</a>.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
const SECTIONS = Object.freeze({
    GENERAL: 'GENERAL',
    SECURITY: 'SECURITY',
    ACCOUNT: 'ACCOUNT'
});

export default {
    name: 'Setting',
    data() {
        return {
            SECTIONS,
            activeSecton: SECTIONS.GENERAL,
            form: {
                first_name: '',
                last_name: '',
                email: '',
                backup_email: '',
                address: '',
                city: '',
                state: '',
                postal_code: '',
                country: '',
            }
        }
    },
    mounted() {
        this.init();
    },
    methods: {
        init() {
            axios.get('/user-info')
            .then(res => {
                console.log(res.data);
            })
            .catch(err => console.log(err.response.data));
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
