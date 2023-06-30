<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';


const props = defineProps({
    href: String,
    active: Boolean,
    hasSubLinks: Boolean,
});

const showingNavigationDropdown = ref(false);

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-1 py-3 border-l-2 border-primary text-sm font-medium leading-5 bg-link-active focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out pr-9'
        : 'inline-flex items-center px-1 py-1 border-l-2 border-transparent hover:boder-gray-800 text-sm font-medium leading-5 hover:bg-link-active  hover:border-gray-200 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 pr-9 ease-in-out';
});
</script>

<template>
    <div :href="href" :class="classes" disabled class="w-full pl-5 cursor-pointer py-4 text-inherit flex items-center justify-between ">
        <div class="flex items-center">
            <slot />
        </div>
        <!-- Arrows icons for dropdown links-->
        <div class="pl-4" v-if="hasSubLinks" @click="showingNavigationDropdown = ! showingNavigationDropdown">
            <svg v-if="!showingNavigationDropdown" class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>

            <svg v-else class="ml-2 -mr-0.5 h-4 w-4"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            </svg>
        </div>
    </div>
    <!-- Sub Links-->
    <div v-if="showingNavigationDropdown" class="text-white text-sm ml-20 mt-3 active:block">
        <ul class="list-disc">
            <slot name="subLinks" />
        </ul> 
    </div>
</template>
