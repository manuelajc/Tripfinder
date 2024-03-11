<template>
    <Head title="Dashboard" />

<AuthenticatedLayout>
    <div class="py-12">
        <div class="p-6 text-white text-center text-5xl font-bold">Busca tus siguientes vacaciones!</div>
        <!-- Botones -->
        <div class="flex justify-center mt-6">
            <Link :href="route('Urban')" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-4">Urbanos</Link>
            <Link :href="route('Rural')"class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Rurales</Link>
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

<div class="py-1 text-center mt-20 flex justify-between items-center">
    
    <div class="img">
        <Link>
            <ApplicationLogo class="logo w-20 h-20 fill-current text-gray-500" />
        </Link>
    </div>

    <div class="we">
        <h3>Sobre Nosotros</h3>
        <p>Viaja en una ciudad que florece</p>
    </div>

    <div class="icons">
        <h2>holi</h2>
        <h2>hola</h2>
    </div>
</div>


</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

</script>

<style>
    .py-1{
        height: 80px;
        background-color: #6aa9e9;
        display: flex;
    }
    .logo{
        border: 1px solid black;
        margin-left: 100px;
    }
    .we{
        border: 1px solid black;
        font-size: 16px;
        color: #ffff;
        margin-right: 10px;
    }
    .icons{
        border: 1px solid black;
        margin-right: 100px;
        display: flex;
    }
    .icons h2{
        margin-right: 10px;
    }
</style>