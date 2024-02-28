<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-60">
            <div class="mx-80 sm:px-4 lg:px-6">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-3xl text-white text-center">Busca tus siguientes vacaciones!</div>
                    <div class="flex">
                        <div class="flex-1 p-6 text-white text-center bg-white bg-opacity-20 py-8 mx-4 sm:rounded-lg">Urbano</div>
                        <div class="flex-1 p-6 text-white text-center py-8 mx-4 bg-white bg-opacity-20 sm:rounded-lg">Rural</div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

