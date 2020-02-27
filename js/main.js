console.log("vue is linked up");
import Home from "./components/HomeComponent.js";
import Basics from "./components/BasicsComponent.js";
import Drugs from "./components/DrugsComponent.js";
import Living from "./components/LivingComponent.js";
import SafeSex from "./components/SafeSexComponent.js";
import Stigma from "./components/StigmaComponent.js";



const routes = [
  { path: "/", name: "Home", component: Home, meta: {
    title: 'Home Page - Example App'} },
  { path: "/hiv_basics", name: "Basics", component: Basics },
  { path: "/living_with_hiv", name: "Living with HIV", component: Living },
  { path: "/stigma", name: "Stigma", component: Stigma },
  { path: "/drug_use", name: "Drug Use", component: Drugs },
  { path: "/safe_sex", name: "Safe Sex", component: SafeSex }
];

const router = new VueRouter({
  routes
 
});


new Vue({
  router
 
}).$mount("#app");