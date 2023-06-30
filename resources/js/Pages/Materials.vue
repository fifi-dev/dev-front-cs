<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import Dropdown from '@/Components/Dropdown.vue';
import Checkbox from '@/Components/Checkbox.vue';
import DataCard from '@/Components/DataCard.vue';

</script>

<template>
    <AppLayout title="Materials">
        <div class="py-5">
            <div class="w-full overflow-x-hidden overflow-y-scroll mx-auto sm:px-6 lg:px-8">
                <!--Top Actions Buttons-->
                <div>
                    <PrimaryButton class=" bg-green-600 !px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Ajouter des données
                    </PrimaryButton>
                    <PrimaryButton class="mx-2 !pl-2 !pr-1 bg-sky-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" stroke-width="0.3" fill="white" class="w-4 h-4">
                            <path d="M352 224H305.5c-45 0-81.5 36.5-81.5 81.5c0 22.3 10.3 34.3 19.2 40.5c6.8 4.7 12.8 12 12.8 20.3c0 9.8-8 17.8-17.8 17.8h-2.5c-2.4 0-4.8-.4-7.1-1.4C210.8 374.8 128 333.4 128 240c0-79.5 64.5-144 144-144h80V34.7C352 15.5 367.5 0 386.7 0c8.6 0 16.8 3.2 23.2 8.9L548.1 133.3c7.6 6.8 11.9 16.5 11.9 26.7s-4.3 19.9-11.9 26.7l-139 125.1c-5.9 5.3-13.5 8.2-21.4 8.2H384c-17.7 0-32-14.3-32-32V224zM80 96c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16H400c8.8 0 16-7.2 16-16V384c0-17.7 14.3-32 32-32s32 14.3 32 32v48c0 44.2-35.8 80-80 80H80c-44.2 0-80-35.8-80-80V112C0 67.8 35.8 32 80 32h48c17.7 0 32 14.3 32 32s-14.3 32-32 32H80z"/>
                        </svg>
                    </PrimaryButton>
                    <PrimaryButton class=" !pl-2 !pr-1 bg-sky-700" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" stroke-width="1" fill="white" class="w-4 h-4 ">
                            <path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z"/>
                        </svg>
                    </PrimaryButton>
                </div>
                <!-- Data Cards-->
                <div class="my-6 grid grid-cols-6 gap-3 max-lg:grid-cols-3 max-md:grid-cols-3 max-sm:grid-cols-2 ">
                <!-- Data Card-->
                    <DataCard class=" !bg-sky-700 text-white">
                        <template #number>
                            27 850 €
                        </template>
                        Valeur du matériel
                    </DataCard>
                <!-- Data Card-->
                    <DataCard>
                        <template #number>
                            161
                        </template>
                        Nombre d'équipements
                    </DataCard>
                    <DataCard>
                        <template #number>
                            49
                        </template>
                        À reviser
                    </DataCard>
                    <DataCard>
                        <template #number>
                            0
                        </template>
                        Perdus
                    </DataCard>
                    <DataCard>
                        <template #number>
                            80
                        </template>
                        Détectés
                    </DataCard>
                    <DataCard>
                        <template #number>
                            32
                        </template>
                        Non détectés
                    </DataCard>
                </div>
                <!-- search & Filters-->
                <div class="bg-white shadow-xl sm:rounded-lg p-4 flex items-center max-lg:block">
                    <!-- search zone form -->
                    <div class="w-2/5 max-lg:w-full">
                        <TextInput
                            id="searchZone"
                            v-model="searchValue"
                            type="search"
                            class="mt-1 block bg-gray-100 !text-gray-900 w-full rounded-none"
                            required
                            autofocus
                            placeholder="Rechercher une zone"
                        />
                    </div>
                    <div class="flex ml-3 w-3/5 max-lg:w-full overflow-hidden max-lg:mt-4 justify-end max-lg:justify-start max-md:grid max-md:grid-cols-2 gap-4 items-center h-full">
                        <!-- Current Zone -->
                        <div  class=" relative mr-3 max-md:mr-0">
                            <Dropdown align="right" width="48">
                                <template #trigger>
                                        <button type="button" class="inline-flex items-center max-md:justify-between py-3 px-4  border text-sm leading-4 font-medium rounded-xs text-gray-500 border-gray-200 max-md:w-full  hover:text-gray-700 focus:outline-none active:text-gray-700 transition ease-in-out duration-150">
                                            Zone actuelle
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                </template>
                                <template #content>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 1
                                    </DropdownLink>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 2
                                    </DropdownLink>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 3
                                    </DropdownLink>
                                </template>
                            </Dropdown>
                        </div>
                        <!-- Status -->
                        <div class=" relative mr-3 max-md:mr-0">
                            <Dropdown align="right" width="48">
                                <template #trigger>
                                        <button type="button" class="inline-flex items-center max-md:justify-between py-3 px-4 max-md:w-full border text-sm leading-4 font-medium rounded-xs text-gray-500 border-gray-200  hover:text-gray-700 focus:outline-none active:text-gray-700 transition ease-in-out duration-150">
                                            Statut
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                </template>
                                <template #content>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 1
                                    </DropdownLink>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 2
                                    </DropdownLink>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 3
                                    </DropdownLink>
                                </template>
                            </Dropdown>
                        </div>
                        <!-- State -->
                        <div class=" relative mr-3 max-md:mr-0">
                            <Dropdown align="right" width="48">
                                <template #trigger>
                                        <button type="button" class="inline-flex items-center max-md:justify-between py-3 px-4 max-md:w-full border text-sm leading-4 font-medium rounded-xs text-gray-500 border-gray-200  hover:text-gray-700 focus:outline-none active:text-gray-700 transition ease-in-out duration-150">
                                            Etat
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                </template>
                                <template #content>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 1
                                    </DropdownLink>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 2
                                    </DropdownLink>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 3
                                    </DropdownLink>
                                </template>
                            </Dropdown>
                        </div>
                        <!-- site -->
                        <div class=" relative mr-3 max-md:mr-0">
                            <Dropdown align="right" width="48">
                                <template #trigger>
                                        <button type="button" class="inline-flex items-center max-md:justify-between py-3 px-4 max-md:w-full border text-sm leading-4 font-medium rounded-xs text-gray-500 border-gray-200  hover:text-gray-700 focus:outline-none active:text-gray-700 transition ease-in-out duration-150">
                                            Site
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                </template>
                                <template #content>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 1
                                    </DropdownLink>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 2
                                    </DropdownLink>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 3
                                    </DropdownLink>
                                </template>
                            </Dropdown>
                        </div>
                        <!-- type of material -->
                        <div class=" relative mr-3 max-md:mr-0">
                            <Dropdown align="right" width="48">
                                <template #trigger>
                                        <button type="button" class="inline-flex items-center max-md:justify-between py-3 px-4 max-md:w-full  border text-sm leading-4 font-medium rounded-xs text-gray-500 border-gray-200  hover:text-gray-700 focus:outline-none active:text-gray-700 transition ease-in-out duration-150">
                                            Type de matériel
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                </template>
                                <template #content>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 1
                                    </DropdownLink>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 2
                                    </DropdownLink>
                                    <!-- Option -->
                                    <DropdownLink :href="route('home')">
                                        Option 3
                                    </DropdownLink>
                                </template>
                            </Dropdown>
                        </div>
                        <!-- Filters Button -->
                        <PrimaryButton class=" py-3 !px-3 bg-sky-700 rounded-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                            </svg>

                        </PrimaryButton>
                    </div>
                </div>
                <!-- Table with data -->
                <div class="bg-white overflow-hidden overflow-x-scroll  shadow-xl sm:rounded-lg p-4 mt-4 mb-20">
                    <div class="flex items-center pl-3">
                        <!-- select All-->
                        <Checkbox v-model="selectAll" />
                        <!-- Delete Button -->
                        <PrimaryButton class=" bg-red-500 rounded-xs ml-3 hover:bg-red-600" @click="deleteMaterials()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                            Supprimer
                        </PrimaryButton>
                    </div>
                    <div class="mt-3">
                        <!-- List of materials -->
                        <table class="min-w-full  ">
                            <thead>
                                <tr>
                                    <th  class="text-sm font-medium text-gray-900 px-3  py-4 text-left">
                                        <!-- Checkbox column -->
                                    </th>
                                    <th class="text-sm font-medium text-gray-900 px-3 py-4 text-left">
                                        <div class="flex items-center">
                                            Type de matériel 
                                            <svg @click="sort('type')" xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 320 512" class="ml-2 cursor-pointer w-3 h-3"><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg>
                                        </div>
                                        
                                    </th>
                                    <!--Rings Col-->
                                    <th  class="text-sm font-medium text-gray-900 px-3 py-4 text-left">
                                        <div class="flex items-center">
                                            Bagues
                                            <svg @click="sort('ring')" xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 320 512" class="ml-2 cursor-pointer w-3 h-3"><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg>
                                        </div>
                                    </th>
                                    <!-- Sensors Col -->
                                    <th  class="text-sm font-medium text-gray-900 px-3  py-4 text-left">
                                        <div class="flex items-center" >
                                            Capteur
                                            <svg @click="sort('sensor')" xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 320 512" class="ml-2 cursor-pointer w-3 h-3"><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg>
                                        </div>
                                    </th>
                                    <!-- Status Col-->
                                    <th  class="text-sm font-medium text-gray-900 px-3  py-4 text-left">
                                        <div class="flex items-center">
                                            Statut
                                            <svg  @click="sort('status')" xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 320 512" class="ml-2 cursor-pointer w-3 h-3"><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg>
                                        </div>
                                    </th>
                                    <!-- Current Areas Col-->
                                    <th  class="text-sm font-medium text-gray-900 px-3  py-4 text-left">
                                        <div class="flex items-center">
                                            Zone actuelle
                                            <svg @click="sort('current_area')" xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 320 512" class="ml-2 cursor-pointer w-3 h-3"><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg>
                                        </div>
                                    </th>
                                    <!-- Detection Col-->
                                    <th  class="text-sm font-medium text-gray-900 px-3  py-4 text-left">
                                        <div class="flex items-center">
                                            Détection
                                            <svg @click="sort('detection')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="ml-2 cursor-pointer w-3 h-3"><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg>
                                        </div>
                                    </th>
                                    <!-- Sites Col-->
                                    <th  class="text-sm font-medium text-gray-900 px-3  py-4 text-left">
                                        <div class="flex items-center">
                                            Site
                                            <svg @click="sort('site')" xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 320 512" class="ml-2 cursor-pointer w-3 h-3"><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg>
                                        </div>
                                    </th>
                                    <!-- State Col-->
                                    <th  class="text-sm font-medium text-gray-900 px-3  py-4 text-left">
                                        <div class="flex items-center">
                                            État
                                            <svg @click="sort('state')" xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 320 512" class="ml-2 cursor-pointer w-3 h-3"><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg>
                                        </div>
                                    </th>
                                    <!-- Next Control Col-->
                                    <th  class="text-sm font-medium text-gray-900 px-3  py-4 text-left">
                                        <div class="flex items-center">
                                            Prochain contrôle
                                            <svg @click="sort('next_control')" xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 320 512" class="ml-2 cursor-pointer w-3 h-3"><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg>
                                        </div>
                                    </th>
                                    <th  class="text-sm font-medium text-gray-900 px-3  py-4 text-left">
                                        <!-- Actions -->
                                    </th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr v-for="(material,key) in sortedMaterials" :key="key" >
                                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        
                                        <input class="rounded border-gray-300 focus:ring-1   text-sky-700  shadow-sm focus:ring-trasparent" type="checkbox" v-model="selected" :value="material.id" number>
                                    </td>
                                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ material.type }} 
                                    </td>
                                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ material.ring }}
                                    </td>
                                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ material.sensor }}
                                    </td>
                                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <div class="text-white px-2 py-1 text-center" :class="[material.status=='Détecté' ? 'bg-green-600':'bg-red-600 ']">
                                            {{ material.status }}
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ material.current_area }}
                                    </td>
                                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ material.detection }}
                                    </td>
                                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ material.site }}
                                    </td>
                                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <div class="text-white text-center px-2 py-1" :class="[material.state=='Conforme' ? 'bg-sky-600':'bg-red-600 ']">
                                            {{ material.state }}
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ material.next_control }}
                                    </td>
                                    <td class="flex items-center h-14">
                                        <PrimaryButton class="!px-2 bg-red-500 hover:bg-red-600" @click="deleteMaterial(material.id)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </PrimaryButton>
                                        <PrimaryButton class="mx-2 !px-2 bg-sky-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>

                                        </PrimaryButton>
                                        <PrimaryButton class="!px-2 bg-sky-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>
                                        </PrimaryButton>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import axios from "axios";

export default {
    data(){
        return {
            searchValue: '',
            materials:[],
            currentSort:'name',
            currentSortDir:'asc',
            selected: []
        }
    },
    mounted(){
        this.getMaterials()
    },
    methods:{
        async getMaterials(){
            await axios.get('/api/material')
            .then((response)=>{
                this.materials = response.data
            }).catch(error=>{
                console.log(error)
                this.materials = []
            })
        },
        deleteMaterial(id){
                axios.delete(`/api/material/${id}`)
                .then((response)=>{
                    this.getMaterials()
                }).catch(error=>{
                    console.log(error)
                })
        },
        deleteMaterials(){
            for(var i = 0; i < this.selected.length; i ++){
                axios.delete(`/api/material/${this.selected[i]}`)
                .then((response)=>{
                    this.getMaterials()
                }).catch(error=>{
                    console.log(error)
                })
            }
        },
        sort:function(s){
            //sorting by the same column and flipping the direction
            if(s === this.currentSort) {
                this.currentSortDir = this.currentSortDir==='asc'?'desc':'asc';
            }
            this.currentSort = s;
        },
    },
    computed:{
        //reversing the numbers based on the direction of the sort
        sortedMaterials:function() {
            return this.materials.sort((a,b) => {
            let modifier = 1;
            if(this.currentSortDir === 'desc') modifier = -1;
            if(a[this.currentSort] < b[this.currentSort]) return -1 * modifier;
            if(a[this.currentSort] > b[this.currentSort]) return 1 * modifier;
            return 0;
        });
        },
        searchByZone:function() {
            sortedMaterials = sortedMaterials.filter((item) => {
            return item.current_area
                .toUpperCase()
                .includes(this.searchValue.toUpperCase())
            })
            return sortedMaterials
        },
        selectAll: {
            get: function () {
                return this.materials ? this.selected.length == this.materials.length : false;
            },
            set: function (value) {
                var selected = [];

                if (value) {
                    this.materials.forEach(function (material) {
                        selected.push(material.id);
                    });
                }

                this.selected = selected;
            }
        }
}
}
</script>