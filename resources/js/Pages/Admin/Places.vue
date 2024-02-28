<template>
    <AdminMenu>
        <h1>Crud lugares</h1>
        <Link :href="route('admin.places.create')">Crear un lugar</Link>
        {{ places }}
    </AdminMenu>
</template>

<script>

import AdminMenu from '../Admin.vue';
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