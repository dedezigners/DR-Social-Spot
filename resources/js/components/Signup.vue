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

                <div :class="['process-panel-wrap is-narrow', step == 0 ? 'is-active' : '']">
                    <div class="form-panel">
                        <div class="field">
                            <label>First Name</label>
                            <div class="control">
                                <input type="text" class="input" v-model="form.firstName" placeholder="Enter your first name">
                            </div>
                        </div>
                        <div class="field">
                            <label>Last Name</label>
                            <div class="control">
                                <input type="text" class="input" v-model="form.lastName" placeholder="Enter your last name">
                            </div>
                        </div>
                        <div class="field">
                            <label>Email</label>
                            <div class="control">
                                <input type="text" class="input" v-model="form.email" placeholder="Enter your email address">
                            </div>
                        </div>
                    </div>

                    <div class="buttons">
                        <a class="button is-rounded process-button is-next" @click="goToPassword" data-step="step-dot-3">Next</a>
                    </div>
                </div>

                <div :class="['process-panel-wrap is-narrow', step == 1 ? 'is-active' : '']">
                    <div class="form-panel">
                        <div class="field">
                            <label>Password</label>
                            <div class="control">
                                <input type="password" v-model="form.password" class="input" placeholder="Choose a password">
                            </div>
                        </div>
                        <div class="field">
                            <label>Repeat Password</label>
                            <div class="control">
                                <input type="password" v-model="form.repeatPassword" class="input" placeholder="Repeat your password">
                            </div>
                        </div>
                        <div class="field">
                            <label>Phone Number</label>
                            <div class="control">
                                <input type="text" v-model="form.phoneNumber" class="input" placeholder="Enter your phone number">
                            </div>
                        </div>
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
                firstName: '',
                lastName: '',
                email: '',
                password: '',
                repeatPassword: '',
                phoneNumber: ''
            },
            backButton: false,
        }
    },
    methods: {
        goToPassword() {
            this.step = 1;
        },
        goToUser() {
            this.step = 0;
        },
        signupUser() {
            console.log('Signup process');
        }
    }
}
</script>
