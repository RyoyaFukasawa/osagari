<template>
  <div class="content-wrap">
    <h1 class="title">会員登録ありがとうございます。</h1>
    <div class="content">
      <p class="text-center">ご入力いただいたメールアドレス宛に<br>ご確認メールを送信いたしました。</p>
      <p class="text-center">メールに記載のURLへアクセス後ご登録完了となります。</p>
      <a href="/home" class="btn btn-register">トップページへ</a>
    </div>
  </div>
</template>

<script lang="ts" setup>
import { onMounted } from 'vue';
import { useAuthStore } from "../../store/auth";

const authStore = useAuthStore();

onMounted(() => {
  sendEmail();
})

const sendEmail = async () => {
  await authStore.sendEmail();
}
</script>
