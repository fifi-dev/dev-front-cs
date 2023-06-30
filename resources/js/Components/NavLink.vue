<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-1 py-3 border-l-2 border-primary text-sm font-medium leading-5 text-white bg-link-active focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out pr-9'
        : 'inline-flex items-center px-1 py-1 border-l-2 border-transparent hover:scale-11 text-sm font-medium leading-5 text-white hover:bg-link-active  hover:border-primary focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 pr-9 ease-in-out';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
