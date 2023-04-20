<template>
  <div class="">
    <div class="md:flex mb-16 gap-4 lg:gap-20">
      <div class="basis-1/2">
        <h1
          class="dark:text-gray-100 text-3xl mb-4 text-gray-700 md:text-4xl lg:text-5xl"
        >
          Adquiere las habilidades del futuro
        </h1>
        <p class="p mb-8">
          Desarrolla tu carrera profesional o expande tu empresa mediante cursos
          diseñados para fortalecer tu confianza y ayudarte a crecer.
        </p>
        <Link :href="route('front.allCourses')">
          <button class="btn btn-primary mb-8">Encuentra tu curso</button>
        </Link>
      </div>
      <div class="basis-1/2">
        <img
          class="w-[600px]"
          src="https://media.istockphoto.com/id/1382100613/es/vector/personas-vectoriales-que-trabajan-dise%C3%B1o-plano-sobre-fondo-blanco.jpg?s=1024x1024&w=is&k=20&c=LaFylrcczmucvXvuShjYIjaza6XpvxF3aSdWrw7QMWA="
          alt=""
        />
      </div>
    </div>
    <div>
      <p
        class="text-sm text-center md:text-start dark:text-gray-100 text-gray-800"
      >
        Impartimos cursos junto con las principales instituciones y empresas del
        sector digital
      </p>
      imagenes...
    </div>
  </div>
</template>

<script setup >
import { Link } from "@inertiajs/vue3";
</script>

<style scoped></style>
