<template>
    <header class="background">
        <router-link to="/guest/home" v-if="!matchCurrentPath('/guest/home')" class="icon-wrap">
            <img class="icon" src="/assets/img/logo_name.png" alt="ロゴ" />
        </router-link>
        <div class="btn-wrap">
            <router-link to="/guest/login" class="btn btn-login"
                :class="matchCurrentPath('/guest/login') ? 'btn-disable' : ''">
                <i class="fa-solid fa-right-to-bracket"></i> ログイン
            </router-link>
            <router-link to="/guest/register" class="btn btn-register"
                :class="matchCurrentPath('/guest/register') ? 'btn-disable' : ''">
                <i class="fa-solid fa-user"></i> 会員登録
            </router-link>
        </div>
    </header>
</template>

<script lang="ts" setup>
import { useRoute } from "vue-router";

const route = useRoute();

function matchCurrentPath($path: string): boolean {
    return route.path === $path;
}
</script>