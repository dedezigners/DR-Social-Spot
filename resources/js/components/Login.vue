<template>
    <div class="login-wrapper">

        <!-- Main Wrapper -->
        <div class="login-wrapper columns is-gapless">
            <!--Left Side (Desktop Only)-->
            <div class="column is-6 is-hidden-mobile hero-banner">
                <div class="hero is-fullheight is-login">
                    <div class="hero-body">
                        <div class="container">
                            <div class="left-caption">
                                <h2>Join an Exciting Social Experience.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Side-->
            <div class="column is-6">
                <div class="hero form-hero is-fullheight">
                    <!--Logo-->
                    <div class="logo-wrap">
                        <div class="wrap-inner">
                            <img src="/assets/img/logo/friendkit-white.svg" alt="">
                        </div>
                    </div>
                    <!--Login Form-->
                    <div class="hero-body">
                        <div class="form-wrapper">
                            <!--Avatar-->
                            <div class="avatar">
                                <div class="badge">
                                    <load-svg feather="check" />
                                </div>
                                <img src="https://placehold.it/128x128" />
                            </div>
                            <!--Form-->
                            <div class="login-form">
                                <div class="field">
                                    <div class="control">
                                        <input class="input email-input" v-model="form.email" type="text" placeholder="jennadavis@gmail.com">
                                        <div class="input-icon">
                                            <load-svg feather="user" />
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input class="input password-input" v-model="form.password" type="password" placeholder="●●●●●●●">
                                        <div class="input-icon">
                                            <load-svg feather="lock" />
                                        </div>
                                    </div>
                                </div>

                                <div v-if="error" class="field inline-error">
                                    <h5 class="danger-text">{{ error }}</h5>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <button
                                        class="button is-solid primary-button raised is-rounded is-fullwidth"
                                        @click="loginUser">Login</button>
                                    </div>
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
    name: "Login",
    data() {
        return {
            form: {
                email: 'atif@dede.com',
                password: 'password'
            },
            error: ""
        }
    },
    methods: {
        loginUser() {
            axios.post('/auth/login', this.form)
            .then(res => {
                user.responseAfterLogin(res);
                this.$router.push({name: 'home'});
            })
            .catch(err => this.error = err.response.data.message);
        }
    }
}
</script>

<style lang="scss" scoped>
.inline-error{
    .danger-text {
        padding: 10px;
        border-radius: 5px;
        background: rgba(255, 30, 45, 0.1);
        border: 1px solid rgb(255, 30, 45);
        color: rgb(255, 30, 45);
    }
}
</style>
