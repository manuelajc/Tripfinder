<template>
    <AdminMenu>
        <h1 id="Bienvenido">Bienvido </h1>
        <Link :href="route('places.create')">Crear un lugar</Link>
        <table>
            <tbody>
                <tr v-for="place in places">
                    <td>{{ place.id }}</td>
                    <td>{{ place.name}}</td>
                    <td>{{ place.description }}</td>
                    <td>{{ place.category.name }}</td> 
                    <td>
                        <img :src="place.img" :alt="place.image">
                    </td>
                    <td>
                        <Link :href="route('places.edit')">Editar</Link>
                        <Link :href="route('places.delete')">Eliminar</Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </AdminMenu>
</template>

<script>

import AdminMenu from '../../Admin.vue';
import { Link } from '@inertiajs/vue3';


export default {

    components: {
        AdminMenu,
        Link,
    },

    props: [
        'places'
    ],

    data() {
        return {

        };
    },
}
</script>

<style>


</style>