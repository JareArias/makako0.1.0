<template>
  <div
    className="px-4 py-8 flex flex-col md:flex-row md:items-center md:justify-center gap-8"
  >
    <label className="flex w-full relative">
      <input
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        type="text"
        className="bg-transparent ring-1 ring-gray-300 w-full h-10 rounded peer px-5 transition-all outline-none focus:ring-gray-500 valid:ring-gray-400"
        required
      />
      <span
        v-if="value"
        className="absolute top-1/2 -translate-y-1/2 left-3 peer-focus:top-0 peer-focus:text-xs peer-focus:font-semibold transition-all bg-gray-100 px-2 cursor-text peer-valid:top-0 peer-valid:text-xs peer-valid:font-semibold text-gray-500 flex items-center gap-2"
      >
        {{ value }}
      </span>
      <span
        v-else
        className="absolute top-1/2 -translate-y-1/2 left-3 peer-focus:top-0 peer-focus:text-xs peer-focus:font-semibold transition-all bg-gray-100 px-2 cursor-text peer-valid:top-0 peer-valid:text-xs peer-valid:font-semibold text-gray-500 flex items-center gap-2"
      >
        <slot />
      </span>
    </label>
  </div>
</template>

<script setup>
import { onMounted, ref } from "vue";
defineProps({
  value: String,
  modelValue: String,
});

defineEmits(["update:modelValue"]);

const input = ref(null);

onMounted(() => {
  if (input.value.hasAttribute("autofocus")) {
    input.value.focus();
  }
});

defineExpose({ focus: () => input.value.focus() });
</script>


<style scoped></style>
