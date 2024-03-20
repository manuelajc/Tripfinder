<template>
    <AdminMenu>
        <h1 id="Bienvenido">Lugares</h1>
        <Link :href="route('places.create')" class="btn-basic">Crear un lugar</Link>
        <table>
            <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </thead>
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
                        <Link :href="route('places.edit', place)" class="edit">Editar</Link>
                        <button @click="destroyPlace(place)" class="delete">Eliminar</button>
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
                preserveState: true,
            })
        }
    }
}
</script>

<style>

h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.btn-basic {
    padding: 5px 20px;
    color: #fff;
    font-weight: 300;
    background: #899afa;
}

.btn-basic:hover{
    background: #7185f8;
}

table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
}

th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #607ec9; 
    color: #fff;
    text-align: center; 
}

.edit {
    padding: 2px 10px;
    color: #899afa;
}

.delete {
    padding: 2px 10px;
    color: #f84646;
}
</style>