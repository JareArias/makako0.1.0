<template>
  <div class="mt-24">
    <div>
      <h3 class="h2 mb-4">Haz cosas que creías que eran imposibles</h3>
      <p class="p mb-8">
        Descubre cursos sobre temas diseñados para desarrollar tu carrera
        profesional y tu negocio, así como mejorar tus habilidades para un nuevo
        mundo digital.
      </p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
      <section v-for="event in events" :key="event.id" class="mb-4">
        <Card>
          <template #image>
            <img
              class="w-40 h-30"
              :src="event.image"
              alt="imagen de evento de la UNAMAD"
            />
          </template>
          <template #title> {{ event.title }} </template>
          <template #description>
            {{ event.description.substring(0, 120) + "..." }}
          </template>
        </Card>
      </section>
    </div>
  </div>
</template>

<script setup>
import Card from "../Card.vue";

defineProps({
  events: {
    type: Object,
    required: true,
  },
});
</script>

<style scoped></style>
