<template>
    <AdminMenu>
        <h1 id="Bienvenido">Lenguajes</h1>
        <Link :href="route('lenguages.create')" class="btn-basic">Crear un lenguaje</Link>
        <table>
            <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <tr v-for="lenguage in lenguages">
                    <td>{{ lenguage.id }}</td>
                    <td>{{ lenguage.name }}</td>
                    <td>
                        <Link :href="route('lenguages.edit', lenguage)" class="edit">Editar</Link>
                        <button @click="destroyLenguage(lenguage)" class="delete">Eliminar</button>
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
        'lenguages'
    ],

    methods: {
        destroyLenguage(lenguage) {
            Inertia.delete(route('lenguages.destroy', lenguage), {
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
    background: #899afa;
    border-radius: 5px;
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