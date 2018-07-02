<template>
    <div class="card">
        <div class="card-status bg-blue"></div>

        <div class="card-header">
            <h3 class="card-title">This game is private and requires a password to join.</h3>
        </div>

        <div class="card-alert alert alert-danger mb-0" v-if="invalidMessage" v-text="invalidMessage"></div>

        <form @submit.prevent="onSubmit" @keydown.enter.prevent="">
            <div class="dimmer" :class="loadingClass">
                <div class="loader"></div>

                <div class="dimmer-content">
                    <div class="card-body">
                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" :class="inputClass"
                                       name="example-password-input"
                                       placeholder="Password.." v-model="password">
                                <!--<input type="text" class="form-control is-valid" name="example-text-input-valid"-->
                                <!--placeholder="Valid State..">-->
                                <!--<input type="text" class="form-control is-invalid" name="example-text-input-invalid"-->
                                <!--placeholder="Invalid State..">-->
                                <div :class="feedbackClass" v-text="feedbackMessage">dd</div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <button type="submit" class="btn btn-gray"><i class="fe fe-eye"></i> Spectate
                            </button>
                            <button type="submit" class="btn btn-primary ml-auto" :class="joinButtonClass">
                                <i class="fe fe-log-in"></i> Join
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['game'],

        data() {
            return {
                password: null,
                isInvalid: false,
                inputClass: null,
                feedbackMessage: null,
                feedbackClass: null,
                joinButtonClass: 'disabled',
                loadingClass: null,
                invalidMessage: null
            }
        },

        watch: {
            password(value) {
                if (value.length < 4) {
                    this.inputClass = 'is-invalid';
                    this.feedbackMessage = 'Password is too short.';
                    this.feedbackClass = 'invalid-feedback';
                } else {
                    this.inputClass = null;
                    this.feedbackMessage = null;
                    this.feedbackClass = null;
                    this.joinButtonClass = null;
                }
            }
        },

        methods: {
            onSubmit() {
                this.loadingClass = 'active';
                this.checkPassword()
            },

            checkPassword() {
                let vm = this;
                axios.post('/game/password', {
                    game_id: this.game.id,
                    password: this.password,
                }).then(response => {
                    vm.setAction(response)
                }).catch(error => {
                    vm.setAction(error.response);
                }).finally(() => {
                    vm.loadingClass = null;
                })
            },

            setAction(response) {
                let message = response.data;
                let status = response.status;

                if (status === 400) {
                    this.invalidMessage = message;
                } else {
                    this.invalidMessage = null;
                    this.$parent.unpromptPassword()
                }
            }
        }
    }
</script>