let Login = require("./components/auth/Login.vue").default;
// let Register = require("./components/auth/Register.vue").default;
let Forget = require("./components/auth/Forget.vue").default;
let Logout = require("./components/auth/Logout.vue").default;

let Home = require("./components/Home.vue").default;

// Students component
let myParcelsList = require("./components/my-parcels/Index.vue").default;
// let addStudentCourse = require("./components/student/Addcourse.vue").default;

// Courses component
let allParcels = require("./components/to-do/Index.vue").default;
// let addCourse = require("./components/course/Create.vue").default;
// let editCourse = require("./components/course/Edit.vue").default;



export const routes = [
    { path: "/", component: Login, name: "/" },
    { path: "/forget", component: Forget, name: "Forget" },
    { path: "/logout", component: Logout, name: "Logout" },
    { path: "/home", component: Home, name: "Home" },

    // In Progress Routes
    { path: "/my-parcels-list", component: myParcelsList, name: "my-parcels-list" },
    // To-Do Routes
    { path: "/all-parcels", component: allParcels, name: "all-parcels" },




    // { path: "/add-course", component: addCourse, name: "add-course" },
    // { path: "/edit-course/:id", component: editCourse, name: "edit-course" }

];
