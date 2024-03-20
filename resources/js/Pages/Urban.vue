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
                        <div class="prueba">
                            <img :src="lugar.image" :alt="'Imagen de ' + lugar.name">
                            <a class="nomlugar" :href="'/places/show.vue' + lugar.id">{{ lugar.name }}</a>
                        </div>
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

<style>

    .prueba{
        display: flex;
        align-items: center;
        width: 310px;
        height: 60px;
        background: white;
        margin-top: 15px;
        border-radius: 5px;
        display: flex;
    }

    .prueba img{
        display: table-column;
        widows: 100%;
        width: 60px;
        height: 50px;
        object-fit: cover;
        margin-left: 5px;
        border-radius: 5px;
    }

    .prueba .nomlugar{
        margin-left: 10px;
    }

  .py-12{
        background-image: url(../Components/images/27e2902ad30a8ae51ab8d0e3f7d33962.svg);
        display:flex;
        align-items: center;
        flex-wrap: wrap;
    }
    .texto{
        margin-left:10px;
        margin-right:90px;
    }
    .texto h1{
        color:white;
        font-size:50px;
        text-align: center;
    }
    p{
        margin-left: 20px;
        font-size: 27px;
        color: white;
        text-align: center;
    }
    .form{
        background: rgba(253, 253, 253, 0.2);
        width: 350px;
        height: 350px;
        border-radius: 10px;
        margin-right: 10px;
        padding: 20px;
        margin-top: 80px;
    }

    .nomlugar{
        margin-left: 110px;
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
        text-align: end;
        margin: 40px;
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