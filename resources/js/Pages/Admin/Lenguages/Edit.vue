<template>
    <AdminMenu>
        <h1>Editar un lenguaje</h1>
        <form @submit.prevent="submit">
            <div class="space-y-6">
                <div>
                    <InputLabel for="name" value="Name" />

                    <TextInput
                        id="name"
                        ref="nameInput"
                        v-model="form.name"
                        type="text"
                        class="block w-full"
                        autocomplete="name-input"
                    />

                    <InputError :message="form.errors.name" class="mt-2" />
                </div>

            </div>

            <div class="mt-8">
                <button type="submit" class="btn-basic">Actualizar</button>
            </div>
        </form>
    </AdminMenu>
</template>

<script>

import AdminMenu from '../../Admin.vue';
import { Link } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';


export default {

    components: {
        AdminMenu,
        Link,
        InputError,
        InputLabel,
        TextInput
    },

    props: [
        'lenguage'
    ],

    mounted() {
        this.form.name = this.lenguage.name;
    },

    data() {
        return {
            form: useForm({
                name:"",
                _method: 'put',
            })
        };
    },

    methods:{
        submit(){
            console.log(this.form);
            this.form.put(route('lenguages.update', this.lenguage), this.form, {
                preserveScroll: true,
                forceFormData: true,
                onSuccess: () => this.form.reset(),
                onError: () => {
                    if (this.form.errors.name) {
                        this.form.reset('name');
                    }
                },
            });
        }, 
    },
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

</style>    