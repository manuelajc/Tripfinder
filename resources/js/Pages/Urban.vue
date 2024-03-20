<template>
    <Head title="Urban" />


    <AuthenticatedLayout>

    <div class="holi py-12">
        <div class="texto">
            <h1>Urbanos</h1>
            <p>Aquí encontrarás lugares donde disfrutar <br> actividades únicas o disfrutando del paisaje urbano.</p>
        </div>
        <div class="form">
                <div class="colum" v-for="lugar in lugaresUrbanos" :key="lugar.id">
                    <Link :href="route('place.show.view', lugar)">
                        <img :src="lugar.image" :alt="'Imagen de ' + lugar.name">
                        <a :href="'/places/show.vue' + lugar.id">{{ lugar.name }}</a>
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

const { lugaresUrbanos } = usePage().props;
</script>

<style src="/public/css/style.css"></style>

