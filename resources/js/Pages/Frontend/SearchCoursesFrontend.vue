<template>
  <div class="dark:bg-gray-300 min-h-full">
    <FrontLayout title="Courses ">
      <div class="py-12 sm:py-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="dark:bg-gray-900 sm:rounded-lg sm:mt-16">
            <SectionTitle />

            <SectionSearch
              :courses="courses"
              :count="count"
              :events="events"
              :decanaturas="decanaturas"
            />
          </div>
        </div>
      </div>
    </FrontLayout>

    <Footer />
  </div>
  <!-- <div v-for="event in events" :key="event.id">
            <label for="">{{ event.name }}</label>
            <input
              type="checkbox"
              v-model="search"
              :name="evento"
              :value="event.slug"
            />
          </div>
          <div class="mt-8">
            <div v-for="decana in decanaturas" :key="decana.id">
              <label for="">{{ decana.name }}</label>
              <input
                type="checkbox"
                v-model="search"
                :name="decanatura"
                :value="decana.slug"
              />
            </div>
          </div> -->
  <!-- <table class="table-auto text-center">
            <thead>
              <tr>
                <th>Song</th>
                <th>Id Decanatura</th>
                <th>Id evento</th>
                <th>precio</th>
              </tr>
            </thead>
            <tbody v-for="course in courses" :key="course.id">
              <tr>
                <td>{{ course.name }}</td>
                <td>{{ course.decanatura_id }}</td>
                <td>{{ course.event_id }}</td>
                <td>{{ course.price }}</td>
              </tr>
            </tbody>
          </table> -->
</template>

<script setup >
import FrontLayout from "@/Layouts/FrontLayout.vue";
import Footer from "../../Components/Footer.vue";
import SectionTitle from "../../Components/searchCoursesComponents/SectionTitle.vue";
import SectionSearch from "../../Components/searchCoursesComponents/SectionSearch.vue";
import Checkbox from "../../Components/Checkbox.vue";
import { Link, router } from "@inertiajs/vue3";
import { defineProps, watch, ref } from "vue";

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
</script>

<style scoped></style>
