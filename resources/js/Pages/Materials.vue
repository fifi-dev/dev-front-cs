<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import DataCard from '@/Components/DataCard.vue';

</script>

<template>
    <AppLayout title="Materials">
        <div class="py-5">
            <div class="w-full mx-auto sm:px-6 lg:px-8">
                <!--Top Actions Buttons-->
                <div>
                    <PrimaryButton class=" bg-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Ajouter des données
                    </PrimaryButton>
                    <PrimaryButton class="mx-2  px-3 bg-sky-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" stroke-width="0.5" fill="white" class="w-5 h-5">
                            <path d="M352 224H305.5c-45 0-81.5 36.5-81.5 81.5c0 22.3 10.3 34.3 19.2 40.5c6.8 4.7 12.8 12 12.8 20.3c0 9.8-8 17.8-17.8 17.8h-2.5c-2.4 0-4.8-.4-7.1-1.4C210.8 374.8 128 333.4 128 240c0-79.5 64.5-144 144-144h80V34.7C352 15.5 367.5 0 386.7 0c8.6 0 16.8 3.2 23.2 8.9L548.1 133.3c7.6 6.8 11.9 16.5 11.9 26.7s-4.3 19.9-11.9 26.7l-139 125.1c-5.9 5.3-13.5 8.2-21.4 8.2H384c-17.7 0-32-14.3-32-32V224zM80 96c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16H400c8.8 0 16-7.2 16-16V384c0-17.7 14.3-32 32-32s32 14.3 32 32v48c0 44.2-35.8 80-80 80H80c-44.2 0-80-35.8-80-80V112C0 67.8 35.8 32 80 32h48c17.7 0 32 14.3 32 32s-14.3 32-32 32H80z"/>
                        </svg>
                    </PrimaryButton>
                    <PrimaryButton class=" px-0 pl-3 pr-1 bg-sky-700" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" stroke-width="1" fill="white" class="w-5 h-5 ">
                            <path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z"/>
                        </svg>
                    </PrimaryButton>
                </div>
                <!-- Data Cards-->
                <div class="my-8 grid grid-cols-6 gap-3 max-lg:grid-cols-3 max-md:grid-cols-3 max-sm:grid-cols-2 ">
                <!-- Data Card-->
                    <DataCard class=" bg-sky-700 text-white">
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
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <div>
                        <form @submit.prevent="submit">
                            <TextInput
                                id="searchZone"
                                type="search"
                                class="mt-1 block w-full"
                                required
                                autofocus
                                placeholder="Rechercher une zone"
                            />
                        </form> 
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>