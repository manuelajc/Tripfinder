<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-white text-center text-5xl font-bold">Busca tus siguientes vacaciones!</div>
                    <!-- Botones -->
                    <div class="flex justify-center mt-6">
                        <button @click="mostrarDestinos" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-4">Urbanos</button>
                        <button @click="mostrarOfertas" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Rurales</button>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const mostrarDestinos = () => {
    // Lógica para mostrar destinos
};

const mostrarOfertas = () => {
    // Lógica para mostrar ofertas
};
</script>

