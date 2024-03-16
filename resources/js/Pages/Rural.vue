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
                    <img :src="lugar.image" :alt="'Imagen de ' + lugar.name">
                    <a :href="'/lugares/' + lugar.id">{{ lugar.name }}</a>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';

const { lugaresRurales } = usePage().props;
</script>

<style>
    .py-12{
        display:flex;
        align-items: center;
        flex-wrap: wrap;
    }
    .texto{
        margin-left:10px;
        margin-right:90px;
    }
    .texto h1{
        color:black;
        font-size:50px;
        text-align: center;
    }
    p{
        margin-left: 5px;
        font-size: 20px;
        color:black;
        text-align: center;
    }
    .form{
        background: rgba(154, 219, 254, 0.5);
        width: 350px;
        height: 350px;
        border-radius: 10px;
        margin-right: 10px;
        padding: 20px;
        margin-top: 80px;
    }
    .colum{
        width: 310px;
        height: 60px;
        background: white;
        margin-top: 15px;
        border-radius: 5px;
        display: flex;
        align-items: center;
    }
    img{
        margin: 15px;
    }
    .colum img{
        width: 80px;
        height: 50px;
        border-radius: 5px;
        object-fit: cover;
    }
    .colum a{
        widows: 100%;
        font-size: 14px;
        margin: 55px;
    }

    @media (max-width: 1024px) {
    .form {
        width: 300px;
        margin-right: 20px;
        margin-top: 40px;
    }

    .colum {
        width: 240px;
    }

    .colum a {
        font-size: 12px;
        text-align: center;
    }

    .colum img {
        width: 50px;
    }

    .py-12 {
        justify-content: center;
    }

    .texto {
        text-align: center;
        margin-left: 30px;
        margin-right: 30px;
    }

    .texto h1 {
        margin-left: 0;
        font-size: 40px;
    }

    p {
        font-size: 20px;
    }
}
</style>