<template>
    <AuthenticatedLayout>
        <h1>Crear un servicio</h1>
        <form @submit.prevent="submit">
            <textarea 
                v-model="form.descripcion" 
                placeholder="Ingresa una descripcion de tu servicio como traductor"
                cols="30" 
                rows="10">
            </textarea>
            <select v-model="form.lugar">
                <option v-for="lugar in lugares" :key="lugar.id" :value="lugar.id">{{ lugar.name }}</option>
            </select>
            <select v-model="form.idioma">
                <option v-for="idioma in lenguages" :key="idioma.id" :value="idioma.id">{{ idioma.name }}</option>
            </select>
                
            <div class="space-y-6">
                <div>
                    <InputLabel for="rate" value="Tarifa" />

                    <TextInput
                        id="rate"
                        ref="rateInput"
                        v-model="form.rate"
                        type="text"
                        class="block w-full"
                        autocomplete="rate-input"
                    />

                    <InputError :message="form.errors.rate" class="mt-2" />
                </div>

            </div>


            <div class="mt-8">
                <button type="submit" class="btn-basic">Create servicio</button>
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<script>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';


export default {

    components: {
        AuthenticatedLayout,
        Link,
        InputError,
        InputLabel,
        TextInput
    },

    props:{
        lugares: Object,
        lenguages: Object,
    },
    data() {
        return {
            form: useForm({
                descripcion:"",
                lugar:"",
                idioma:"",
                rate: null,
            })
        };
    },

    methods:{
        submit(){
            this.form.post(route('services.store'), {
                preserveScroll: true,
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
    margin-top: 1rem;
}

.btn-basic {
    padding: 5px 20px;
    color: #fff;
    font-weight: 300;
    background: #899afa;
}

</style>    