<template>
    <div class="signup-wrapper">

        <div class="fake-nav"></div>

        <div class="process-bar-wrap">
            <div class="process-bar">
                <div class="progress-wrap">
                    <div class="track"></div>
                    <div class="bar" :style="step == 1? 'width: 100%' : ''"></div>
                    <div :class="['dot is-first is-active', step == 0 ? 'is-current': '']">
                        <load-svg feather="user" />
                    </div>
                    <div :class="['dot is-fifth', step == 1 ? 'is-active is-current': '']">
                        <load-svg feather="lock" />
                    </div>
                </div>
            </div>
        </div>

        <div class="outer-panel">
            <div class="outer-panel-inner">
                <div class="process-title">
                    <h2 :class="['step-title', step == 0 ? 'is-active' : '']">Tell us about you.</h2>
                    <h2 :class="['step-title', step == 1 ? 'is-active' : '']">Secure your account.</h2>
                </div>

                <div v-if="error.message" class="process-panel-wrap is-narrow is-active error-panel">
                    <h5 class="danger">{{ error.message }}</h5>
                </div>

                <div :class="['process-panel-wrap is-narrow', step == 0 ? 'is-active' : '']">
                    <div class="form-panel">
                        <div :class="['field', error.errors.first_name ? 'is-invalid' : '' ]">
                            <label>First Name</label>
                            <div class="control">
                                <input type="text" class="input" v-model="form.first_name" placeholder="Enter your first name">
                            </div>
                        </div>
                        <small v-if="error.errors.first_name" class="danger-text">{{ error.errors.first_name[0] }}</small>

                        <div :class="['field', error.errors.last_name ? 'is-invalid' : '' ]">
                            <label>Last Name</label>
                            <div class="control">
                                <input type="text" class="input" v-model="form.last_name" placeholder="Enter your last name">
                            </div>
                        </div>
                        <small v-if="error.errors.last_name" class="danger-text">{{ error.errors.last_name[0] }}</small>

                        <div :class="['field', error.errors.username ? 'is-invalid' : '' ]">
                            <label>Username</label>
                            <div class="control">
                                <input type="text" class="input" v-model="form.username" placeholder="Enter your email address">
                            </div>
                        </div>
                        <small v-if="error.errors.username" class="danger-text">{{ error.errors.username[0] }}</small>

                        <div :class="['field', error.errors.email ? 'is-invalid' : '' ]">
                            <label>Email</label>
                            <div class="control">
                                <input type="text" class="input" v-model="form.email" placeholder="Enter your email address">
                            </div>
                        </div>
                        <small v-if="error.errors.email" class="danger-text">{{ error.errors.email[0] }}</small>
                    </div>

                    <div class="buttons">
                        <a class="button is-rounded process-button is-next" @click="goToPassword" data-step="step-dot-3">Next</a>
                    </div>
                </div>

                <div :class="['process-panel-wrap is-narrow', step == 1 ? 'is-active' : '']">
                    <div class="form-panel">
                        <div :class="['field', error.errors.password ? 'is-invalid' : '' ]">
                            <label>Password</label>
                            <div class="control">
                                <input type="password" v-model="form.password" class="input" placeholder="Choose a password">
                            </div>
                        </div>
                        <small v-if="error.errors.password" class="danger-text">{{ error.errors.password[0] }}</small>

                        <div :class="['field', error.errors.password_confirmation ? 'is-invalid' : '' ]">
                            <label>Repeat Password</label>
                            <div class="control">
                                <input type="password" v-model="form.password_confirmation" class="input" placeholder="Repeat your password">
                            </div>
                        </div>
                        <small v-if="error.errors.password_confirmation" class="danger-text">{{ error.errors.password_confirmation[0] }}</small>

                        <div :class="['field', error.errors.phone ? 'is-invalid' : '' ]">
                            <label>Phone Number</label>
                            <div class="control">
                                <input type="text" v-model="form.phone" class="input" placeholder="Enter your phone number">
                            </div>
                        </div>
                        <small v-if="error.errors.phone" class="danger-text">{{ error.errors.phone[0] }}</small>
                    </div>

                    <div class="buttons">
                        <a class="button is-rounded process-button" @click="goToUser">Back</a>
                        <a class="button is-rounded process-button is-next" @click="signupUser">Signup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Signup",
    data() {
        return {
            step: 0,
            form: {
                first_name: 'Elise',
                last_name: 'Walker',
                username: 'elise',
                email: 'elise@dede.com',
                password: 'password',
                password_confirmation: 'password',
                phone: '+923024698165'
            },
            backButton: false,
            error: {
                message: '',
                errors: [],
            }
        }
    },
    methods: {
        clearError() {
            this.error.message = '';
            this.error.errors = [];
        },
        goToPassword() {
            axios.post('/user-validation', this.form)
            .then(res => {
                this.clearError();
                this.step = 1;
            })
            .catch(err => this.error = err.response.data);
        },
        goToUser() {
            this.step = 0;
        },
        signupUser() {
            axios.post('/auth/signup', this.form)
            .then(res => {
                this.clearError();
                user.responseAfterLogin(res);
                this.$router.push({name: 'home'});
            })
            .catch(err => this.error = err.response.data);
        }
    }
}
</script>

<style lang="scss" scoped>
.form-panel .field.is-invalid{
    border-color: rgb(255, 30, 45);
    margin-bottom: 0;
}

small.danger-text {
    color: rgba(255, 30, 45, 0.8);
    display: block;
    padding-top: 5px;
    margin-bottom: 20px;
}

.error-panel{
    .danger {
        padding: 10px;
        border-radius: 5px;
        background: rgba(255, 30, 45, 0.1);
        border: 1px solid rgb(255, 30, 45);
        color: rgb(255, 30, 45);
    }
}
</style>
