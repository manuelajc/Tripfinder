<template>
    <AdminMenu>
        <h1>Crear un lugar</h1>
        <input type="text" v-model="name" placeholder="Name">
        {{ name }}
    </AdminMenu>
</template>

<script>

import AdminMenu from '../Admin.vue';

export default {

    components: {
        AdminMenu
    },

    props: [
    ],

    data() {
        return {
            name: '',
        };
    },
}
</script>