<template>
    <AdminMenu>
        <h1>Crud Categorias</h1>
        {{ categories }}
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