<template>
  <div class="mt-12 border-t-2 bg-gray-50 dark:bg-slate-900">
    <div class="flex items-center gap-4 mt-12 lg:hidden">
      <button class="flex" @click="open = !open">
        <v-icon name="bi-filter" class="dark:text-gray-300" scale="1.5" />
        <h3 class="p">Filtros</h3>
      </button>

      <h2 class="h2" v-if="count">Resultados: {{ count }} curso(s)</h2>
    </div>
    <div>
      <div
        :class="
          !open
            ? 'hidden '
            : 'bg-gray-600/50 min-h-screen w-full fixed top-0 left-0 right-0  '
        "
        @click="open = !open"
      ></div>

      <div
        :class="
          !open
            ? 'w-0 transition-all duration-500'
            : 'overflow-y-auto h-screen bg-white min-h-screen w-80 fixed top-0 left-0 right-0 transition-all duration-500 dark:bg-gray-900'
        "
      >
        <div :class="!open ? 'hidden' : 'pt-3'">
          <button
            class="ml-64 mb-8 text-lg dark:text-gray-100 dark:animate-pulse dark:hover:animate-none"
            @click="open = !open"
          >
            x
          </button>
          <div class="items-center">
            <div class="min-w-max ml-8">
              <section>
                <h2 class="h3 mb-8">Eventos</h2>
                <div v-for="event in events" :key="event.id" class="my-3">
                  <input
                    type="checkbox"
                    v-model="search"
                    :name="event"
                    :value="event.slug"
                    class="rounded dark:bg-gray-900 border-gray-500 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                  />
                  <span class="p m-8">{{ event.name }}</span>
                </div>
              </section>

              <section class="my-24">
                <h2 class="h3 mb-8">Decanaturas</h2>
                <div v-for="deca in decanaturas" :key="deca.id" class="my-3">
                  <input
                    type="checkbox"
                    v-model="search"
                    :name="deca"
                    :value="deca.slug"
                    class="rounded dark:bg-gray-900 border-gray-500 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                  />
                  <span class="p m-8">{{ deca.name }}</span>
                </div>
              </section>
            </div>
            <hr />
            <p class="text-lg mt-4 mb-24 dark:text-gray-200 text-center">
              Resultados: {{ count }} curso(s)
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="flex mt-16">
      <div class="min-w-max hidden lg:block mb-20">
        <section>
          <h2 class="h3">Eventos</h2>
          <div v-for="event in events" :key="event.id" class="my-4">
            <input
              type="checkbox"
              v-model="search"
              :name="event"
              :value="event.slug"
              class="rounded dark:bg-gray-900 border-gray-500 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
            />
            <span class="p m-8">{{ event.name }}</span>
          </div>
        </section>

        <section class="mt-24">
          <h2 class="h3">Decanaturas</h2>
          <div v-for="deca in decanaturas" :key="deca.id" class="my-4">
            <input
              type="checkbox"
              v-model="search"
              :name="deca"
              :value="deca.slug"
              class="rounded dark:bg-gray-900 border-gray-500 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
            />
            <span class="p m-8">{{ deca.name }}</span>
          </div>
        </section>
      </div>

      <section class="grid md:grid-cols-2 gap-8 lg:ml-10 mb-20">
        <h2 class="p col-span-2 hidden lg:block">
          Resultados: {{ count }} curso(s)
        </h2>
        <div v-for="course in courses" :key="course.id">
          <Card>
            <template #image>
              <img
                class="h-52 w-full object-cover"
                :src="course.image"
                alt="imagen de evento de la UNAMAD"
              />
            </template>
            <template #title> {{ course.name }} {{ course.status }} </template>
            <template #description>
              {{ course.description.substring(0, 120) + "..." }}
            </template>
            <template #course />
            <template #price> {{ course.price }} </template>
            <template #fecha>{{ course.fecha_init }}</template>
          </Card>
        </div>
      </section>
    </div>
  </div>
</template>

<script setup>
import { Link, router } from "@inertiajs/vue3";
import { defineProps, watch, ref } from "vue";
import Card from "../Card.vue";
import NewInput from "../NewInput.vue";

const props = defineProps({
  courses: {
    type: Object,
    required: true,
  },

  events: {
    type: Object,
    required: true,
  },

  decanaturas: {
    type: Object,
    required: true,
  },
  count: Number,
});

let search = ref([]);

watch(search, (value) => {
  router.get(
    "/makako3/public/front/courses",
    { search: value },
    {
      preserveState: true,
      replace: true,
    }
  );
});

function getCourses() {
  router.get(
    "/makako3/public/front/courses",
    { search: search.value },
    {
      preserveState: true,
      replace: true,
    }
  );
}

const open = ref(false);
</script>

<style scoped>
</style>
