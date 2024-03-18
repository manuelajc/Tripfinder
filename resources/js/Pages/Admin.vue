<template>
    <Head title="Admin"/>

    <AuthenticatedLayout>
        <div class="admin-d ca">
            <div class="menu-admin">
                <h1>Bienvenido Administrador</h1>
                <ul>
                    <Link :href="route('admin.categories')" :class="classes"><li>Categorias</li></Link>
                    <Link :href="route('lenguages.index')" :class="classes"><li>Lenguajes</li></Link>
                    <Link :href="route('places.index')" :class="classes"><li>Lugares</li></Link>
                </ul>
            </div>
            <div class="content">
                <slot/>
            </div>º
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

<style src="/public/css/style.css"></style>

