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

const { lugaresUrbanos } = usePage().props;
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
        margin-left: 20px;
        font-size: 27px;
        color: black;
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
    }
    .colum a{
        margin: 55px;
        font-size: 16px;
    }

    @media (max-width: 768px) {
    .form {
      margin-top: 20px; /* esto ajusra lamargen superior del formulario */
      width: auto; /* esto ajusta el ancho del contenido */
    }
    .py-12 {
      justify-content: center; /* Centra los elementos en pantallas pequeñas */
    }
    .texto {
      text-align: center; /* esto centra el texto en pantallas pequeñas */
      margin-left: 100px;
    }
    p{
      font-size: 22px; /* esto es para ajustar el tamaño de la letra */
    }
}
</style>