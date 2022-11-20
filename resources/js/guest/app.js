import "./bootstrap";
import { createApp } from "vue";
import app from "./App.vue";
import router from "./router";
import { createPinia } from "pinia";

const pinia = createPinia();

createApp(app).use(router).use(pinia).mount("#app");
