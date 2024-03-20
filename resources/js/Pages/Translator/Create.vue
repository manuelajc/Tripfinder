<template>
    <AuthenticatedLayout>
        <h1>Crear un servicio</h1>
        <div class="formp">
    <form @submit.prevent="submit">
        <div class="mb-4">
            <textarea 
                v-model="form.descripcion" 
                placeholder="Ingresa una descripcion de tu servicio como traductor"
                cols="20" 
                rows="1"
                class="block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            ></textarea>
        </div>
        <div class="mb-4">
            <select v-model="form.lugar" class="block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option v-for="lugar in lugares" :key="lugar.id" :value="lugar.id">{{ lugar.name }}</option>
            </select>
        </div>
        <div class="mb-4">
            <select v-model="form.idioma" class="block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option v-for="idioma in lenguages" :key="idioma.id" :value="idioma.id">{{ idioma.name }}</option>
            </select>
        </div>
        <div class="mb-4">
            <div>
                <InputLabel for="rate" value="Tarifa" />
                <TextInput
                    id="rate"
                    ref="rateInput"
                    v-model="form.rate"
                    type="text"
                    class="block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    autocomplete="rate-input"
                />
            </div>
            <InputError :message="form.errors.rate" class="mt-2" />
        </div>
        <div class="mt-8">
            <button type="submit" class="btn-basic">Crear servicio</button>
        </div>
    </form>
</div>

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

.formp{
    margin-left: 20px;
    margin-right: 500px;
}

.tarifa{
    width: 200px;
}

h1 {
    font-size: 2rem;
    margin-top: 1rem;
}

.btn-basic {
    padding: 5px 20px;
    color: #fff;
    font-weight: 300;
    background: #899afa;
    border-radius: 5px;
    margin-left: 15px;
}



</style>    