import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/home",
        name: "home",
        component: () => import("./pages/Home.vue"),
    },
    {
        path: "/logout",
        name: "logout",
        component: () => import("./pages/auth/Logout.vue"),
    },
    {
        path: "/sell",
        name: "sell",
        component: () => import("./pages/product/Sell.vue"),
    },
    {
        path: "/news",
        name: "news",
        component: () => import("./pages/News.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
