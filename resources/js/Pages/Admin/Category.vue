<template>
    <AdminMenu>
        <h1>Categorias</h1>
        <table>
            <thead>
                <th>id</th>
                <th>Nombre</th>
            </thead>
            <tbody>
                <tr v-for="category in categories">
                    <td>{{ category.id }}</td>
                    <td>{{ category.name }}</td>
                </tr>
            </tbody>
        </table>
    </AdminMenu>
</template>

<script>

import AdminMenu from '../Admin.vue';

export default {

    components: {
        AdminMenu
    },

    props: [
        'categories'
    ],

    data() {
        return {
           
        };
    },
}
</script>

<style>
h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
}
table {
    border-collapse: collapse;
    width: 50px;
    margin: 0;
}
th, td {
    border: 1px solid #dddddd;
    padding: 8px;
}
th {
    background-color: #607ec9; 
    color: #fff; 
    text-align: center;
}

</style>