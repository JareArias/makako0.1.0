<template>
  <div
    className="dark:bg-gray-900 bg-white max-w-2xl mx-auto py-4 px-6 rounded-lg shadow-md hover:-translate-y-1 hover:scale-105 duration-300 border "
  >
    <div className="flex items-center justify-between mb-4">
      <slot name="image" />
    </div>
    <div className="flex flex-col gap-2 mb-4 ">
      <h1 href="#" className="h3  capitalize">
        <slot name="title" />
      </h1>
      <p className="text-gray-500 dark:text-gray-300" maxlength="10">
        <slot name="description" />
      </p>
    </div>
    <div className=" items-center ">
      <div class="text-blue-500 hover:text-blue-600 transition-colors">
        <template v-if="$slots.email">
          <slot name="email" />
        </template>

        <template v-else-if="$slots.course">
          <div class="flex justify-between">
            <div class="">
              <v-icon name="gi-price-tag" class="text-yellow-400" scale="1" />
              <span class="text-gray-600 text-sm mr-4"
                >Precio:
                <slot name="price" />
              </span>
              <v-icon
                name="md-daterange-outlined"
                class="text-yellow-400"
                scale="1"
              />
              <span class="text-gray-600 text-sm mr-12"
                >Inicio:
                <slot name="fecha" />
              </span>
            </div>
            <div class="">
              <v-icon
                name="ri-arrow-right-s-line"
                class="hover:animate-bounce"
                scale="1.5"
              />
            </div>
          </div>
        </template>
        <div v-else className=" flex justify-end">
          <v-icon
            name="ri-arrow-right-s-line"
            class="hover:animate-bounce"
            scale="1.5"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>

<style scoped></style>
