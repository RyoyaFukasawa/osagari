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
        async register(params) {
            try {
                return await axios.post("/api/register/social",params).then((res) => {
                    const { data } = res;
                    return data;
                });
            } catch (error) {
                return error;
            }
        },
        async fetchMe() {
            try {
                return await axios.get("/api/user").then((res) => {
                    const { data } = res;
                    this.me = Me.from(data.data);
                    console.log(this.me);
                });
            } catch (error) {
                return error;
            }
        },
        async logout() {
            try {
                return await axios.get("/api/logout").then((res) => {
                    const { data } = res;
                    console.log(data);
                    return data;
                });
            } catch (error) {
                return error;
            }
        },
        async sendEmail() {
            try {
                return await axios
                    .get("/api/register/email", {
                        params: this.me,
                    })
                    .then((res) => {
                        const { data } = res;
                        return data;
                    });
            } catch (error) {
                return error;
            }
        },
        async googleOauth() {
            try {
                return await axios.get("/api/auth/redirect").then((res) => {
                    console.log(res);
                    const { data } = res;
                    return data;
                });
            } catch (error) {
                return error;
            }
        },
    },
});
