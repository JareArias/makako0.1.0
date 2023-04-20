<template>
  <div class="dark:bg-gray-300 min-h-full">
    <FrontLayout title="Home ">
      <div class="py-12">
        <div class="lg:max-w-[63rem] max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="dark:bg-gray-900 sm:rounded-lg sm:mt-16">
            <SectionAllCourses />
            <SectionEvents :events="events" />
            <SectionDecanaturas :decanaturas="decanaturas" />
          </div>
          <!-- <pre> {{ decanaturas }} </pre> -->
        </div>
      </div>
    </FrontLayout>
    <SectionFinal />
    <Footer />
  </div>
</template>

<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import Footer from "../../Components/Footer.vue";
import SectionAllCourses from "../../Components/homeComponents/SectionAllCourses.vue";
import SectionDecanaturas from "../../Components/homeComponents/SectionDecanaturas.vue";
import SectionEvents from "../../Components/homeComponents/SectionEvents.vue";
import SectionFinal from "../../Components/homeComponents/SectionFinal.vue";

defineProps({
  events: {
    type: Object,
    required: true,
  },
  decanaturas: {
    type: Object,
    required: true,
  },
  canLogin: Boolean,
  canRegister: Boolean,
});
</script>

<style scoped></style>
