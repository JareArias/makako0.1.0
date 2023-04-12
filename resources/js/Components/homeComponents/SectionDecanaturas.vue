<template>
  <div class="mt-24">
    <div>
      <h2 class="h2 mb-16">Otras formas de aprender</h2>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
      <section
        v-for="decanatura in decanaturas"
        :key="decanatura.id"
        class="mb-4"
      >
        <Card>
          <template #image>
            <img :src="decanatura.image" alt="imagen de evento de la UNAMAD" />
          </template>
          <template #title> {{ decanatura.title }} </template>
          <template #description>
            {{ decanatura.description.substring(0, 120) + "..." }}
          </template>
          <template #email> {{ decanatura.email }} </template>
        </Card>
      </section>
    </div>
    <pre> {{ decanaturas }} </pre>
  </div>
</template>

<script setup>
import Card from "../Card.vue";

defineProps({
  decanaturas: {
    type: Object,
    required: true,
  },
});
</script>

<style scoped></style>
