<template>
  <div v-if="device" class="sm:flex bg-white rounded-xl px-5 py-5 items-center relative" :class="{
    'opacity-70': !device.connected
  }">
    <h2
      :class="`text-lg font-semibold w-full sm:w-1/3 mb-2 sm:mb-0 ${device.connected ? 'text-green-500' : 'text-gray-500'}`">
      <i v-if="device.connected" class="fa-solid fa-wifi mr-2"></i>
      <i v-else class="fa-solid fa-wifi-slash mr-2"></i>
      {{ device.name }}
    </h2>

    <div class="w-full sm:w-1/3">
      <span class="font-semibold">{{ device.lastSensorReading?.maxCompostTemp }}º<sup>C</sup></span>
      <span class="text-sm ml-2 opacity-60">{{ device?.lastSensorReadingAgo }}</span>
    </div>

    <div class="w-28 text-right absolute right-5 top-5">

      <i v-if="device.openIssues?.length" class="fa-solid fa-triangle-exclamation text-red-700 text-lg ml-3"></i>

      <!-- <i v-for="program of device.config.programs" class="mb-2 fa-solid ml-3 sm:mb-0" :class="{
        'fa-brain-circuit': program.name === 'auto',
        'fa-timer': program.name === 'timer',
        'text-green-500': program.enabled,
        'text-gray-500': !program.enabled,
      }">
      </i> -->
    </div>
  </div>
</template>

<script setup>
import { toRefs } from 'vue';

const props = defineProps({
  device: Object
});

const { device } = toRefs(props);

</script>

