console.log("vue is linked up");
import Home from "./components/HomeComponent.js";
import Basics from "./components/BasicsComponent.js";
import Drugs from "./components/DrugsComponent.js";
import Living from "./components/LivingComponent.js";
import SafeSex from "./components/SafeSexComponent.js";
import Stigma from "./components/StigmaComponent.js";
import Login from "./components/LoginComponent.js";
import Signup from "./components/SignupComponent.js";
import HivTest from "./components/HivTestComponent.js";
import Contact from "./components/ContactComponent.js";



const routes = [
  {
    path: "/", name: "Home", component: Home, meta: {
      title: 'Home Page - Example App',
    }
  },
  { path: "/hiv_basics", name: "Basics", component: Basics },
  { path: "/living_with_hiv", name: "Living with HIV", component: Living },
  { path: "/stigma", name: "Stigma", component: Stigma },
  { path: "/drug_use", name: "Drug Use", component: Drugs },
  { path: "/safe_sex", name: "Safe Sex", component: SafeSex },
  { path: "/hiv_test", name: "HIV Test", component: HivTest },
  { path: "/contact", name: "Contact", component: Contact },
  { path: "/login", name: "Login", component: Login },
  { path: "/signup", name: "Signup", component: Signup }

];

const router = new VueRouter({
  routes,
});


const vm = new Vue({
  router,
  data: {
    user: null,
  },
  methods: {
    confirmLogin(user) {
      this.user = user
    }
  }


}).$mount("#app");

// router.beforeEach((to, from, next) => {
//   //console.log('router guard fired!', to, from, vm.authenticated);

//   if (vm.authenticated == false) {
//     next("/");
//   } else {
//     next();
//   }
// });