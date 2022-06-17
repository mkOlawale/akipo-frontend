require('./bootstrap');
import Vue from "vue";
import Common from "./Common";
Vue.mixin(Common);
Vue.component('search', require("./components/search.vue").default);
Vue.component('comment', require("./components/comment.vue").default);
const app = new Vue({ 
    el: '#app',     
})

