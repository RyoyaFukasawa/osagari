<template>
  <div class="search-wrap d-flex-center">
    <img class="home-icon" src="/assets/img/logo_name.png" alt="ロゴ" />
    <form class="search-form" action="" method="GET">
      <div class="search-group">
        <input class="search-box" type="text" name="textbook" placeholder="教科書名">
        <input class="search-box" type="text" name="teacher" placeholder="先生名">
        <input class="search-box" type="text" name="corse" placeholder="授業名">
        <select class="search-box" name="day">
          <option hidden>曜日</option>
          <!-- <option v-for="days in day" :value="day.name"></option> -->
        </select>
        <button class="btn btn-search" type="submit">
          <i class="fa-solid fa-magnifying-glass"></i> 検索
        </button>
      </div>
    </form>
  </div>
</template>

<script setup>
// import { useRouter } from "vue-router"
</script>