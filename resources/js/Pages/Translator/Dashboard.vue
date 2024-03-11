<template>
    <Head title="Admin"/>

    <AuthenticatedLayout>
        <div>
            <h1>Dashboard de traductor</h1>
            <hr>
            <section>
                <div>
                    <h3>Mis servicios</h3>
                    <Link :href="route('services.create')" class="btn-basic">Crear un servicio</Link>
                </div>
                <table>
                    <thead>
                        <th>id</th>
                        <th>Descripción</th>
                        <th>Lugar</th>
                        <th>Idioma</th>
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
    </AuthenticatedLayout>
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
}

.btn-basic {
    padding: 5px 20px;
    color: #fff;
    font-weight: 300;
    background: #899afa;
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
    background-color: #f2f2f2;  
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