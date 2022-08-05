<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import DeviceSummarySmall from '@/Components/DeviceSummarySmall.vue';

const props = defineProps({
    devices: Array
})

const devices = props.devices

</script>

<template>
    <AppLayout title="Dashboard">

        <div v-if="devices" class="mx-2 sm:mx-6">
            <div class="max-w-[1400px] mx-auto">
                <div v-for="device of devices" :key="device.id">
                    <DeviceSummarySmall class="cursor-pointer mb-4 md:mb-8" :device="device" />
                </div>
            </div>
        </div>

    </AppLayout>
</template>
