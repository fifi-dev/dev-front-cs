<template>
    <div class="bg-white overflow-hidden shadow-xl py-4 pl-5  ">
        <!-- Data Numbers -->
        <div class=" font-black text-4xl mt-2"> 
            <p>
                <slot name="number" />
            </p>
        </div>
        <!-- Data info -->
        <div>
            <p class=" text-sm font-medium">
                <slot  />
            </p>
        </div>
    </div>
</template>