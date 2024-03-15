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

<style >

.ini{
    background-image: url(../Components/images/27e2902ad30a8ae51ab8d0e3f7d33962.svg);
}

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
        border-radius: 5px;
    }

    .grid-lugares div p {
        z-index: 20;
        color: #ffffff;
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
        margin-left: 100px;
    }
    .we{
        font-size: 20px;
        color: #ffff;
        margin-right: 10px;
    }
    .icons{
        margin-right: 100px;
        color: white;
        display: flex;
    }
    .icons h2{
        margin-right: 10px;
    }

    @media (max-width: 768px) {
        .grid-lugares{
            display: block;
        }
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