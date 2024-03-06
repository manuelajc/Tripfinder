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
    color: #131313;
    border-right: 1px solid #c5c5c5;    
}

.content {
    width: 80%;
    height: 100%;
    padding: 1rem;
}

.menu-admin h1 {
    padding: 1rem;
    font-weight: 500;
    font-size: 1.1rem;
}

ul li {
    padding: 10px 20px;
    transition: .01s ease-out;
}

ul li:hover {
    background: rgb(213, 213, 247);
    padding: 10px 20px;
    border-right: 3px solid #5f76f7;
    color: #5f76f7;
}

</style>