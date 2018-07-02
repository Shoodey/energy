/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('game', require('./components/Game/Game.vue'));
Vue.component('games-list', require('./components/Game/List.vue'));
Vue.component('game-password', require('./components/Game/Password.vue'));

Vue.component('game-chat', require('./components/Chat/Chat.vue'));
Vue.component('chat-log', require('./components/Chat/Log.vue'));
Vue.component('chat-composer', require('./components/Chat/Composer.vue'));
Vue.component('chat-message', require('./components/Chat/Message.vue'));


Vue.component('consumption-chart', require('./components/ConsumptionChart.vue'));
Vue.component('drainers-chart', require('./components/DrainersChart.vue'));

Vue.directive('elapsed-time', {
    bind(a){
        console.log(a)
    },

    update (timestamp) {
        this.el.innerHTML = moment(timestamp).fromNow()

        this.interval = setInterval(() => {
            this.el.innerHTML = moment(timestamp).fromNow()
        }, 1000)
    },

    unbind () {
        clearInterval(this.interval)
    }
});
const app = new Vue({
    el: '#app'
});
