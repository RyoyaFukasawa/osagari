import { defineStore } from "pinia";
import axios from "axios";
import { Me } from "../models/Me";

export const useAuthStore = defineStore("auth", {
    state: () => {
        return {
            me: new Me({}),
        };
    },
    getters: {
        getMe(me) {
            return me;
        },
    },
    actions: {
        async fetchMe() {
            try {
                return await axios.get("/api/user").then((res) => {
                    const { data } = res;
                    this.me = Me.from(data.data);
                });
            } catch (error) {
                return error;
            }
        },
        async logout() {
            try {
                return await axios.get("/api/logout").then((res) => {
                    const { data } = res;
                    return data;
                });
            } catch (error) {
                return error;
            }
        },
    },
});
