<template>
    <form class="search-form d-flex-center" action="" method="GET">
        <div class="search-group">
            <input class="search-input" type="text" name="textbook" placeholder="教科書名">
            <input class="search-input" type="text" name="teacher" placeholder="先生名">
            <input class="search-input" type="text" name="corse" placeholder="授業名">
            <select class="search-input" name="day">
                <option hidden>曜日</option>
                <option v-for="(value, day) in days" :value="value">{{ day }}曜日</option>
            </select>
            <button class="btn btn-search" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i> 検索
            </button>
        </div>
    </form>
</template>

<script setup>
const days = {
    '月': 1,
    '火': 2,
    '水': 3,
    '木': 4,
    '金': 5,
    '土': 6,
    '日': 7,
}
</script>