<template>
   
    <Head title="Dashboard" />

<AuthenticatedLayout>
    <div class="py-12">
        <div class="p-6 text-black text-center text-5xl font-bold">Busca tus siguientes vacaciones!</div>
        <!-- Botones -->
        <div class="flex justify-center mt-6">
            <Link :href="route('Urban')" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-4">Urbanos</Link>
            <Link :href="route('Rural')"class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Rurales</Link>
        </div>
    </div>
    <!--Aca se van agregar los lugares para los tours-->
    <div class="p-6 text-Black text-center text-4xl font-bold mt-8 sm:mt-12">
        Tus Destinos 
    </div>

    <div class="grid-lugares">
        
        <div v-for="lugar in lugares">
            <Link :href="route('place.show.view', lugar)">
                <img :src="lugar.image" :alt="lugar.name">
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
            <h2>holi</h2>
            <h2>hola</h2>
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

<style >

    .grid-lugares {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        padding: 2rem;
        grid-gap: 1rem;
    }

    .grid-lugares div {
        height: 300px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        background: #2c2c2c;
    }

    .grid-lugares div p {
        z-index: 20;
        color: #6aa9e9;
        font-size: 2rem;
        text-transform: uppercase;
        display: none;
        transition: .3s;
    }

    .grid-lugares div:hover img{
        opacity: .5;
    }

    .grid-lugares div:hover p {
        display: flex;
    }

    .grid-lugares img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .3s;
    }

    .footer{
        background-color: #6aa9e9;
    }
    .logo{
        border: 1px solid black;
        margin-left: 100px;
    }
    .we{
        border: 1px solid black;
        font-size: 20px;
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

    @media (max-width: 768px) {
        .we, .icons{
            display: none;
        }
        .footer{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo{
            margin: 0;
            flex-grow: 1;
        }
    }
</style>