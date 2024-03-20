<template>
    <Head title="Dashboard" />

<AuthenticatedLayout>
    <div class="ini py-12">
        <div class="p-6 text-white text-center text-5xl font-bold">Busca tus siguientes vacaciones!</div>
        <!-- Botones -->
        <div class="flex justify-center mt-6">
            <Link :href="route('Urban')" class="bg-blue-400 hover:bg-blue-200 hover:text-black text-white font-bold py-2 px-4 rounded mr-4">Urbanos</Link>
            <Link :href="route('Rural')"class="bg-blue-400 hover:bg-blue-200 hover:text-black text-white font-bold py-2 px-4 rounded">Rurales</Link>
        </div>
    </div>
    <!--Aca se van agregar los lugares para los tours-->
    <div class="p-6 text-Black text-center text-4xl font-bold mt-8 sm:mt-12">
        Tus Destinos 
    </div>

    <div class="grid-lugares">
        
        <div class="cont-image" v-for="lugar in lugares">
            <Link :href="route('place.show.view', lugar)">
                <img class="image" :src="lugar.image" :alt="lugar.name">
            </Link>
            <p class="">{{ lugar.name }}</p>
        </div>
    </div>

    <div class="footer py-1 text-center mt-20 flex justify-between items-center">
        
        <div class="img">
            <Link>
                <ApplicationLogo class="logo w-20 h-20 fill-current text-gray-500" />
            </Link>
        </div>

        <div class="we">
            <p>Viaja en una ciudad que florece</p>
        </div>

        <div class="icons">
            <h2>F</h2>
            <h2>W</h2>
        </div>
    </div>

</AuthenticatedLayout>

</template>

<script>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

export default {

    components: {
        AuthenticatedLayout,
        Head,
        Link,
        ApplicationLogo,
    },

    props: [
        'lugares'
    ],

}

</script>

<style src="/public/css/style.css"></style>