<template>
    <p>holi</p>
    <div v-for="image in images" :key="image.id" class="flex h-30">
        <img v-bind:src="'storage/' + image.url" />
    </div>
</template>

<script setup>
defineProps({
    courses: Object,
    images: Array,
});
</script>

<style scoped></style>
