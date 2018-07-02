<template>
    <div class="card">
        <div class="card-status bg-blue"></div>

        <div class="card-header">
            <h3 class="card-title">Game Chat</h3>
        </div>


        <div class="card-body o-auto" style="height: 15rem">
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:messageSent="addMessage"></chat-composer>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messages: [
                    {
                        id: 1,
                        message: 'Hey!',
                        user: "John Doe"
                    },
                    {
                        id: 2,
                        message: 'Hello!',
                        user: "Jane Doe"
                    }
                ]
            }
        },
        methods: {
            addMessage(message) {
                // Add to existing messages
                this.messages.push(message);
                // Persist to the database etc
            }
        }
    }
</script>