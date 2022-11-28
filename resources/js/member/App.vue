<template>
    <div class="background">
        <Header></Header>
        <main>
            <router-view></router-view>
        </main>
        <Footer></Footer>
    </div>
</template>

<script lang="ts" setup>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
</script>
