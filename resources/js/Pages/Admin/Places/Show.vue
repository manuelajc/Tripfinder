<template>
    <Head title="place"/>

    <AuthenticatedLayout>
        <div class="show-view">
            <header>
                <div class="place-image">
                    <img :src="place.image" alt="">
                </div>
                <div class="title">
                    <h1>{{ place.name }}</h1>
                    <p>{{ place.description }}</p>
                </div>
            </header>
            <section class="ofertas">
                <h1>Ofertas</h1>
                <p>Aqui encontraras todos los servicios disponibles por los traductor</p>
                <hr>
                <div class="servicios">
                    <div class="servicio-card" v-for="service in services">
                        <h3>{{ service.lenguage.name }}</h3>
                        <p>{{ service.description }}</p>
                        <span>${{ service.tarifa }}</span>
                        <button @click="register(service)" class="regis">Registrarme</button>
                    </div>
                </div>
            </section>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { Inertia } from "@inertiajs/inertia";

export default {

    components: {
        AuthenticatedLayout,
        Head,
        Link,
    },

    props: {
        place: Object,
        services: Object,   
    },

    data() {
        return {

        }
    },

    methods: {
        register(service) {
            Inertia.post(route('register.service', service), {
                preserveScroll: true,
                preserveState: true,
            })
        }
    }

}
</script>

<style>

.show-view {
    padding: 2rem;
}

.show-view header {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.place-image {
    height: 300px;
    overflow: hidden;
}

.place-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.show-view header .title {
    padding: 0 2rem;
}

.show-view header .title h1 {
    font-size: 2rem;
    font-weight: 500;
}

.ofertas h1 {
    width: 100%;
    font-size: 2rem;
    padding: 1rem 0 0 0;
}

.ofertas p {
    margin-bottom: 1rem;
    color: rgb(95, 95, 95);
}

.servicios {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 2rem;
    padding: 2rem 0;
}

.servicio-card {
    background: rgba(172, 183, 191, 0.358);
    border-radius: 5px;
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.regis {
    padding: 10px 20px;
    background: #6aa9e9;
    color: #fff;
    width: fit-content;
    border-radius: 8px;
}

</style>