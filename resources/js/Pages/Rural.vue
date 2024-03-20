<template>
    <Head title="Rural" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="texto">
                <h1>Rurales</h1>
                <p>Aquí podrás ver algunos tours en las zonas rurales de nuestra área metropolitana</p>
            </div>
            <div class="form">
                <div class="colum" v-for="lugar in lugaresRurales" :key="lugar.id">
                    <Link :href="route('place.show.view', lugar)">
                    <img :src="lugar.image" :alt="'Imagen de ' + lugar.name">
                    <a :href="'/lugares/' + lugar.id">{{ lugar.name }}</a>
                    </Link>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

const { lugaresRurales } = usePage().props;
</script>

<style src="/public/css/style.css"></style>

