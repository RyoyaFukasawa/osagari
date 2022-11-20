<template>
    <div class="register-wrap">
        <h1 class="title">ログアウト</h1>
        <button @click="logout">ログアウト</button>
    </div>
</template>
  
<script lang="ts" setup>
import { useRoute, useRouter } from "vue-router";
import { useAuthStore } from "../../store/auth";

const route = useRoute();
const router = useRouter();
const authStore = useAuthStore();

async function logout() {
    const res = await authStore.logout();
    if (res.result) {
        location.href = '/guest/home';
    }
}
</script>
  