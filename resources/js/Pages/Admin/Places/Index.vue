<template>
    <AdminMenu>
        <h1 id="Bienvenido">Bienvido </h1>
        <Link :href="route('places.create')">Crear un lugar</Link>
        <table>
            <tbody>
                <tr v-for="place in places">
                    <td>{{ place.id }}</td>
                    <td>{{ place.name }}</td>
                    <td>{{ place.description }}</td>
                    <!-- <td>{{ place.category.name }}</td>  -->
                    <td>
                        <img :src="place.image" :alt="place.image" width="100px" height="100px">
                    </td>
                    <td>
                        <Link :href="route('places.edit', place)">Editar</Link>
                        <button @click="destroyPlace(place)">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </AdminMenu>
</template>

<script>

import AdminMenu from '../../Admin.vue';
import { Link } from '@inertiajs/vue3';
import { Inertia } from "@inertiajs/inertia";

export default {

    components: {
        AdminMenu,
        Link,
    },

    props: [
        'places'
    ],

    methods: {
        destroyPlace(place) {
            Inertia.delete(route('places.destroy', place), {
                preserveScroll: true,
                preserveSate: true,
            })
        }
    }
}
</script>

<style>


</style>