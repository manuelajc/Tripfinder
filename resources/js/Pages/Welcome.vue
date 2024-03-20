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

    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen wenas">
        <div class="minav">
                <div class="dark:text-white sm:fixed sm:top-0 sm:left-0 p-6 text-end">
                <p class="tripfinder"><span>T</span>RIP<span>F</span>INDE<span>R</span></p>
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
                        ><a>Iniciar sesión</a></Link
                    >

                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="registrar"
                        ><a>Registrarse</a></Link
                    >
                   </template> 
            </div>
  
            </div>
        </div>
            </div>
        </div>
    </div>
</template>

<style src="/public/css/style.css"></style>