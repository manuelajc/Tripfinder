<template>
    <Head title="Admin"/>

    <AuthenticatedLayout>
    </AuthenticatedLayout>
    <div>
        <h1>Mis Servicios</h1>
        <section>
            <div>
                <Link :href="route('services.create')" class="btn-basic">Crear un servicio</Link>
            </div>
            <table>
                <thead>
                    <th>id</th>
                    <th>Descripción</th>
                    <th>Idioma</th>
                    <th>Lugar</th>
                    <th>Tarifa</th>
                    <th>Candidatos</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <tr v-for="service in services">
                        <td>{{ service.id }}</td>
                        <td>{{ service.description }}</td>
                        <td>{{ service.lenguage.name }}</td>
                        <td>{{ service.place.name }}</td>
                        <td>{{ service.tarifa }}</td>
                        <td>{{ service.candidates }}</td>
                        <td>
                            <Link :href="route('services.edit', service)" class="edit">Editar</Link>
                            <button @click="destroyLenguage(service)" class="delete">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

export default {

    components: {
        AuthenticatedLayout,
        Head,
        Link,
    },

    props: {
        services: Object,
    }

}
</script>

<style>

h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
    margin-left: 50px;
}

h3{
    margin-left: 50px;
    font-size: 20px;
}

.btn-basic {
    padding: 7px 22px;
    color: #fff;
    background: #607ec9;
    border-radius: 5px;
    margin-left: 50px;
}

.btn-basic:hover{
    background: #7185f8;
}

table {
    border-collapse: collapse;
    width: 80%;
    margin: 50px;
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