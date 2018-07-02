<template lang="html">
    <div class="chat-composer">
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type your message..." v-model="messageText" @keyup.enter="sendMessage">
                <span class="input-group-append">
                    <button class="btn btn-primary" type="button" @click="sendMessage"><i class="fe fe-send"></i></button>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messageText: ''
            }
        },
        methods: {
            sendMessage() {
                this.$emit('messageSent', {
                    message: this.messageText,
                    user: "John Doe"
                });
                this.messageText = '';
            }
        }
    }
</script>