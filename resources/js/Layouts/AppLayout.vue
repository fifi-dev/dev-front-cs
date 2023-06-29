<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
//import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Menu from '@/Components/Menu.vue';


defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div>
        <Head :title="title" />

        <Banner />

        <div class="min-h-screen bg-gray-100">
            <div class="bg-white ">
                <!-- Header -->
                <div class="max-w-full mx-auto  ">
                    <div class="flex justify-between h-16">
                        <!-- Logo -->
                        <div class="flex items-center w-1/6 bg-primary">
                            <div class="w-32 m-auto">
                                <img src="/assets/img/logo-white.png" alt="Logo Charlie Solutions"/>
                            </div>
                        </div>
                        <div class="flex justify-between w-5/6 items-center">
                        <!-- Hamburger -->
                            <div class=" flex items-end">
                                <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400   focus:outline-none hover:scale-11  transition duration-150 ease-in-out" @click="showingNavigationDropdown = ! showingNavigationDropdown">
                                    <svg
                                        class="h-6 w-6"
                                        stroke="currentColor"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16"
                                        />
                                        <path
                                            :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <div class="hidden  ml-0   sm:flex sm:items-center pr-8 ">
                                <!-- Notifications-->
                                <div class=" relative w-fit ">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                        <span>
                                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent  font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                    <div class=" bg-red-500 absolute text-[8px] py-1 px-2 top-0 left-6 rounded-2xl text-white">25</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                                </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <!-- Notification -->
                                            <DropdownLink :href="route('home')">
                                                Notification 1
                                            </DropdownLink>
                                            <!-- Notification -->
                                            <DropdownLink :href="route('home')">
                                                Notification 2
                                            </DropdownLink>
                                            <!-- Notification -->
                                            <DropdownLink :href="route('home')">
                                                Notification 3
                                            </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </div>
                                <!-- Settings Dropdown -->
                                <div class=" relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  hover:text-gray-700 focus:outline-none active:text-gray-700 transition ease-in-out duration-150">
                                                    <img class="h-8 w-8 rounded-full object-cover mr-2" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">

                                                    {{ $page.props.auth.user.name }}

                                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </button>
                                        </template>

                                        <template #content>
                                            <!-- Account Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                Manage Account
                                            </div>

                                            <DropdownLink :href="route('profile.show')">
                                                Profile
                                            </DropdownLink>

                                            <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                                                API Tokens
                                            </DropdownLink>

                                            <div class="border-t border-gray-200" />

                                            <!-- Authentication -->
                                            <form @submit.prevent="logout">
                                                <DropdownLink as="button">
                                                    Log Out
                                                </DropdownLink>
                                            </form>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="flex">
                <div class=" w-1/6 transition ease-in-out duration-150" :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}">
                    <!-- sidebar menu -->
                    <Menu />
                </div>
                <main :class="{'w-5/6': showingNavigationDropdown, 'w-full': ! showingNavigationDropdown}" class="overflow-scroll h-screen transition ease-in-out duration-150">
                    <slot />
                </main>
            </div>
            
        </div>
    </div>
</template>
