<template>
    <Head title="Dashboard" />

<AuthenticatedLayout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-center text-5xl font-bold">Busca tus siguientes vacaciones!</div>
                <!-- Botones -->
                <div class="flex justify-center mt-6">
                    <Link :href="route('Urban')" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-4">Urbanos</Link>
                    <Link :href="route('Rural')"class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Rurales</Link>
                </div>
            </div>
        </div>
    </div>
</AuthenticatedLayout>

<!--Aca se van agregar los lugares para los tours-->
<div class="p-6 text-Black text-center text-4xl font-bold mt-8 sm:mt-12">
    Tus Destinos 
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-20 mt-14 mb-8">
    <div class="bg-gray-300 h-40 rounded-lg relative ">
        <p class="absolute bottom-2 left-2 text-left text-black">Parque explora 1</p>
    </div>
    <div class="bg-gray-300 h-40 rounded-lg relative ">
        <p class="absolute bottom-2 left-2 text-left text-black">Parque explora 2</p>
    </div>
    <div class="bg-gray-300 h-40 rounded-lg relative ">
        <p class="absolute bottom-2 left-2 text-left text-black ">Parque explora 3</p>
    </div>
    <div class="bg-gray-300 h-40 rounded-lg relative ">
        <p class="absolute bottom-2 left-2 text-left text-black">Parque explora 4</p>
    </div>
    <div class="bg-gray-300 h-40 rounded-lg relative ">
        <p class="absolute bottom-2 left-2 text-left text-black">Parque explora 5</p>
    </div>
    <div class="bg-gray-300 h-40 rounded-lg relative ">
        <p class="absolute bottom-2 left-2 text-left text-black">Parque explora 6</p>
    </div>
</div>

<div class="bg-indigo-300 py-1 text-center mt-20 flex justify-between items-center">
    <div class="ml-40 mt-20 hidden sm:block">
        <!-- Circulo del lado izquierdo -->
        <div class="rounded-full bg-white w-20 h-20"></div>
    </div>
    <div class="hidden sm:block">
        <!-- Circulo del medio  -->
        <div class="rounded-full bg-white w-20 h-20"></div>
    </div>
    <div class="mr-40 mt-20 hidden sm:block">
        <!-- Circulo del lado derecho -->
        <div class="rounded-full bg-white w-20 h-20"></div>
    </div>
</div>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

</script>