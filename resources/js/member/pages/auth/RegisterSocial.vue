<template>
  <div class="register-wrap">
    <h1 class="title">会員登録</h1>
    <form @submit.prevent="register">
      <div class="input-wrap">
        <p class="input-title">メールアドレス</p>
        <input :value="data.email" name="email" class="input" type="email" disabled>
        <span class="warning">※メールアドレスは変更できません。</span>
      </div>
      <div class="input-wrap">
        <p class="input-title">ニックネーム</p>
        <input v-model="data.name" class="input" type="text">
      </div>
      <div class="input-wrap">
        <p class="input-title">パスワード</p>
        <input v-model="data.password" class="input" type="text">
      </div>
      <button class="btn btn-register" type="submit">
        登録する
      </button>
    </form>
  </div>
</template>

<script lang="ts" setup>
import { useRoute,useRouter } from "vue-router";
import { useAuthStore } from "../../store/auth";

const route = useRoute();
const router = useRouter();
const authStore = useAuthStore();

const data = {
  name: '',
  email: route.query.email,
  password: '',
}

const register = async () => {
  const res = await authStore.register(data);
  if (res.result) {
    await authStore.fetchUser();
    // router.push('/register/complete');
  }
}
</script>
