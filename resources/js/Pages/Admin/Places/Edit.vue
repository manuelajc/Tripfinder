<template>
    <AdminMenu>
        <h1>Crear un lugar</h1>
        <form @submit.prevent="submit">
            <div class="space-y-6">
                <div>
                    <InputLabel for="name" value="Name" />
                    <TextInput
                        id="name"
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
                        v-model="form.category_id"
                        type="text"
                        class="block w-full"
                        autocomplete="category-input"
                    />
                    <InputError :message="form.errors.category_id" class="mt-2" />
                </div>

                <div>
                    <input type="file" id="image" name="image" @change="onImageChange" />
                </div>

                {{ form.image }}
            </div>

            <div class="mt-8">
                <button type="submit" class="basic-succes-btn">Crear Lugar</button>
            </div>
        </form>
    </AdminMenu>
</template>

<script>
import AdminMenu from '../../Admin.vue';
import { ref } from 'vue';
import { usePage, useForm } from '@inertiajs/inertia-vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

export default {
    components: {
        AdminMenu,
        InputError,
        InputLabel,
        TextInput,
    },

    setup() {
        const { data } = usePage().props;
        const form = useForm({
            name: '',
            description: '',
            category_id: null,
            image: null,
        });

        const submit = () => {
            form.post(route('places.store'), {
                onSuccess: () => {
                    // Acciones después de una creación exitosa (redirección, mostrar mensaje, etc.)
                    form.reset();
                },
            });
        };

        const onImageChange = (event) => {
            form.image = event.target.files[0];
        };

        return {
            form,
            submit,
            onImageChange,
        };
    },
};
</script>
