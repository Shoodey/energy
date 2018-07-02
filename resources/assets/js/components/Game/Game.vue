<template>
    <div class="row">
        <div class="col-md-12">
            <div class="offset-3 col-md-6" v-if="promptPassword">
                <game-password :game="game"></game-password>
            </div>

        </div>

        <div class="col-md-12">
            <div class="offset-8 col-md-4 " v-if="!promptPassword">
                <game-chat></game-chat>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['game'],

        data() {
            return {
                promptPassword: this.game.is_private
            }
        },

        methods: {
            unpromptPassword() {
                this.promptPassword = false;
            }
        }
    }
</script>