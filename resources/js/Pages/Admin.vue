<template>
    <Head title="Admin"/>

    <AuthenticatedLayout>
        <div class="admin-d">
            <div class="menu-admin">
                <h1>Bienvenido Admin</h1>
                <ul>
                    <li><Link :href="route('admin.categories')" :class="classes">Categorias</Link></li>
                    <li><Link :href="route('admin.places')" :class="classes">Lugares</Link></li>
                </ul>
            </div>
            <div class="content">
                <slot/>
            </div>
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

    data() {
        return {

        }
    },

}
</script>

<style>
.admin-d {
    width: 100%;
    height: 100vh;
    background: #fff;
    display: flex;
}

.menu-admin {
    width: 20%;
    height: 100%;
    color: #fff;
    background: #212121;
    padding: 1rem;
}

.content {
    width: 80%;
    height: 100%;
    padding: 1rem;
}
</style>
