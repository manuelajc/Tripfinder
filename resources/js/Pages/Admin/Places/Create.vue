<template>
    <AdminMenu>
        <h1>Crear un lugar</h1>
        <Link :href="route('places.create')">Crear un lugar</Link>
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
                    <InputLabel for="category" value="category" />

                    <TextInput
                        id="category"
                        ref="categoryInput"
                        v-model="form.category_id"
                        type="text"
                        class="block w-full"
                        autocomplete="category-input"
                    />

                    <InputError :message="form.errors.category_id" class="mt-2" />
                </div>

                <div>
                    <input type="file" id="image" name="image"
                        @input="form.image = $event.target.files[0]"/>
                </div>

                {{ form.image }}
            </div>


            <div class="mt-8">
                <button type="submit" class="basic-succes-btn">Create Category</button>
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
        'places'
    ],

    data() {
        return {
            form: useForm({
                name:"", 
                description:"",
                category_id:null,
                image:null,
            })
        };
    },

    methods:{
        submit(){
            this.form.post(route('places.store'), {
                preserveScroll: true,
                onSuccess: () => this.form.reset(),
                onError: () => {
                    if (this.form.errors.name) {
                        this.form.reset('name');
                    }
                    if (this.form.errors.logo) {
                        this.form.reset('image');
                    }
                },
            });
        },
    },
}

</script>