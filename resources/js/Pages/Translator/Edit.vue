<template>
    <AdminMenu>
        <h1>Editar Servicio</h1>
        <form @submit.prevent="submit">
            <div class="space-y-6">
                <div>
                    <InputLabel for="description" value="description" />

                    <TextInput
                        id="description"
                        ref="descriptionInput"
                        v-model="form.description"
                        type="text"
                        class="block w-full"
                        autocomplete="description-input"
                    />
                    <InputError :message="form.errors.description" class="mt-2" />
                </div>

                
                <div>
                    <InputLabel for="tarifa" value="tarifa" />

                    <TextInput
                        id="tarifa"
                        v-model="form.tarifa"
                        type="text"
                        class="block w-full"
                        autocomplete="tarifa-input"
                    />

                    <InputError :message="form.errors.tarifa" class="mt-2" />
                </div>

                <div>
                    <InputLabel for="place_id" value="place_id" />

                    <TextInput
                        id="place_id"
                        v-model="form.place_id"
                        type="text"
                        class="block w-full"
                        autocomplete="place_id-input"
                    />

                    <InputError :message="form.errors.place_id" class="mt-2" />
                </div>

                <div>
                    <InputLabel for="lenguage_id" value="lenguage_id" />

                    <TextInput
                        id="lenguage_id"
                        v-model="form.lenguage_id"
                        type="text"
                        class="block w-full"
                        autocomplete="lenguage_id-input"
                    />

                    <InputError :message="form.errors.lenguage_id" class="mt-2" />
                </div>

            </div>
            <div class="mt-8">
                <button type="submit" class="btn-basic">Actualizar</button>
            </div>
        </form>
    </AdminMenu>
</template>

<script>

import AdminMenu from '../Admin.vue';
import { Link } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';

export default {
    props: [
        'service'
    ],
    mounted() {
        this.form.name = this.service.name;
        this.form.description = this.service.tarifa;
        this.form.place_id = this.service.lenguage_id;
    },

    data() {
        return {
            form: useForm({
                description:"",
                tarifa:"",
                place_id:"",
                lenguage_id:"",
            })
        };
    },

    methods:{
        submit(){
            console.log(this.form);
            this.form(route('services.update', this.service), this.form, {
                preserveScroll: true,
                forceFormData: true,
                onSuccess: () => this.form.reset(),
                onError: () => {
                    if (this.form.errors.description) {
                        this.form.reset('description');
                    }
                    if (this.form.errors.tarifa) {
                        this.form.reset('tarifa');
                    }
                    if (this.form.errors.place_id) {
                        this.form.reset('place_id');
                    }
                    if (this.form.errors.lenguage_id) {
                        this.form.reset('lenguage_id');
                    }
                },
            });
        }, 
    },
};
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