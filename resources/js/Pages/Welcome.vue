<script setup>
import '/public/css/estilo1.css';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    
    <Head title="Welcome" />

    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-cover bg-dots-darker wenas">
        <div class="minav">
                <div class="dark:text-white sm:fixed sm:top-0 sm:left-0 p-6 text-end">
                <p><span>T</span>RIP<span>F</span>INDE<span>R</span></p>
            </div>
        
            

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                    </div>
                </div>
        </div>
       

            <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">
                <div class="text-center text-sm sm:text-start">&nbsp;</div>

            <div>
                <div class="welcome">
                    <h2>¡Bienvenido a TripFinder!</h2>
                    <p>Viaja en una ciudad que florece.</p>
            </div>
            <div class="navcito">
                <div v-if="canLogin" class="botoncitos">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class=""
                    >Dashboard</Link
                >

                <template v-else>
                    <Link
                        :href="route('login')"
                        class="iniciar"
                        >Iniciar sesión</Link
                    >

                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="registrar"
                        >Registrarse</Link
                    >
                   </template> 
            </div>
  
            </div>
        </div>
            </div>
        </div>
    </div>
</template>

<style>

.minav span{
    color: #35D7FF;
}

.welcome{
    color: white;
    transform: translate(-12px, -150px);
}

.welcome h2{
    text-align: center;
    font-size: 35px;
}

.welcome p{
    font-size: 20px;
    text-align: center;
}

.navcito{
    display: flex;
    justify-content: center; /* Centra horizontalmente */
    align-items: center; /* Centra verticalmente */
    margin-top: 20px; /* Ajusta el margen superior según sea necesario */
    transform: translate(-16px, -130px);
}

.botoncitos{
    font-size: 20px;
    color: white;
    margin-top: 15px;
}

.iniciar{
    margin: 0 10px;
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
