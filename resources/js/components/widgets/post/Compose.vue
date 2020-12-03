<template>
    <div v-if="isAuth" :class="['card is-new-content', activeComposing ? 'is-highlighted' : '']">
        <div class="tabs-wrapper">
            <div class="tabs is-boxed is-fullwidth">
                <ul>
                    <li class="is-active">
                        <a>
                            <span class="icon is-small"><load-svg feather="edit-3"/></span>
                            <span>Publish</span>
                        </a>
                    </li>
                    
                    <li class="close-wrap">
                        <span class="close-publish" @click="deActivateComposing">
                            <load-svg feather="x" />
                        </span>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="compose">
                    <div class="compose-form">
                        <img src="/assets/img/jenna.png" />
                        <div class="control">
                            <textarea
                            class="textarea"
                            rows="3"
                            placeholder="Write something about you..."
                            v-model="form.message"
                            @click="activateComposing"></textarea>
                        </div>
                    </div>
                </div>

                <div id="basic-options" class="compose-options">
                    <div class="compose-option">
                        <load-svg feather="camera" />
                        <span>Media</span>
                        <input type="file">
                    </div>
                </div>

                <div class="more-wrap">
                    <button
                    type="button"
                    @click="writePost"
                    :class="['button is-solid accent-button is-fullwidth', !publishButton ? 'is-disabled': '']">
                        Publish
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'WritePost',
    data() {
        return {
            activeComposing: false,
            form: {
                message: '',
                image: null
            }
        }
    },
    computed: {
        isAuth: function () {
            return this.$store.state.isAuth;
        },
        publishButton: function () {
            if (this.form.message) {
                return true;
            }

            return false;
        }
    },
    methods: {
        activateComposing() {
            this.activeComposing = true;
            EventBus.$emit('activateComposing');
        },
        deActivateComposing() {
            this.activeComposing = false;
            EventBus.$emit('deActivateComposing');
        },
        writePost() {
            axios.post('/post', this.form)
            .then(res => {
                console.log(res.data);
            })
            .catch(err => console.log(err.response.data));
        }
    }
}
</script>
