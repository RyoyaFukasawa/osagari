<template>
    <header class="background">
        <router-link to="/home" v-if="!matchCurrentPath('/home')" class="icon-wrap">
            <img class="icon" src="/assets/img/logo_name.png" alt="ロゴ" />
        </router-link>
        <div class="btn-wrap">
            <router-link to="/sell" class="btn btn-login"
                :class="matchCurrentPath('/sell') ? 'btn-disable' : ''">
                <i class="fa-solid fa-box"></i> 
                出品
            </router-link>
            <router-link to="/news" class="btn btn-register"
                :class="matchCurrentPath('/news') ? 'btn-disable' : ''">
                <i class="fa-solid fa-newspaper"></i>
                 お知らせ
            </router-link>
            <router-link to="/logout" class="btn btn-register"
                :class="matchCurrentPath('/logout') ? 'btn-disable' : ''">
                <i class="fa-solid fa-user"></i>
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