<template>
    <div>
        <Head title="registrado" />

        <AuthenticatedLayout>
            <div class="alert">
                <h1>{{ message }}</h1>
            </div>
        </AuthenticatedLayout>
    </div>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

export default {

    components: {
        AuthenticatedLayout,
    },

    props: [
        'message'
    ],

}

</script>

<style scoped>

.alert {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2rem;
}

</style>