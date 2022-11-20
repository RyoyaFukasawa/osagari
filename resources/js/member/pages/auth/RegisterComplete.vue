<template>
  <div class="register-wrap">
    <h1 class="title">会員登録ありがとうございます。</h1>
    <p class="text">ご入力いただいたメールアドレス宛に<br>ご確認メールを送信いたしました。</p>
    <p class="text">メールに記載のURLへアクセス後ご登録完了となります。</p>
    <router-link to="/home" class="btn btn-register">トップページへ</router-link>
  </div>
</template>

<script setup>
import { onMounted } from 'vue';
import { useAuthStore } from "../../store/auth";

const authStore = useAuthStore();

onMounted(() => {
  sendEmail();
})

const sendEmail = async () => {
  const res = await authStore.sendEmail();
  if (res.result) {
    console.log('test');
  }
}
</script>
