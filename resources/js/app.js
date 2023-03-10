import "./bootstrap";
import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

 // Router Imported
 import {routes} from './routes';

// Vue.component("App", App);

 // Import User Class
 import User from './Helpers/User';
 window.User = User

 ///////// Start Sweet Alert start 

import Swal from "sweetalert2";
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: toast => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    }
});

window.Toast = Toast;
/////////////////////// End Sweet Alert start 

const router = new VueRouter({
    routes,
    mode: "history"
});

const app = new Vue({
    el: "#app",
    router
});