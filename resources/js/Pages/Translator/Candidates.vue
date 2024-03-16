<template>
    <Head title="Admin"/>

    <AuthenticatedLayout>
    </AuthenticatedLayout>
    <div>
        <h1>Candidatos subscriptos al servicio</h1>
        <section>
            <table>
                <thead>
                    <th>id</th>
                    <th>Candidato</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    <tr v-for="candidate in service.candidates">
                        <td>{{ candidate.id }}</td>
                        <td>{{ candidate.name }}</td>
                        <td>{{ candidate.email }}</td>
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
        service: Object,
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