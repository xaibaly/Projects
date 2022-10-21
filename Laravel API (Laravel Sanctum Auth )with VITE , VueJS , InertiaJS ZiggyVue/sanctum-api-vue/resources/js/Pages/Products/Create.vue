<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import BreezeLabel from '@/../js/Components/InputLabel.vue';
import BreezeInput from '@/../js/Components/TextInput.vue';
import BreezeTextArea from '@/Pages/Components/Textarea.vue';
import { Head, Link, useForm, Inertia } from '@inertiajs/inertia-vue3';
const props = defineProps({
    user_name:String,
    user_api_token:String,
});


const form = useForm({
    name: '',
    price: ''
});
const submit = () => {
    fetch('api/products/',{
        method: 'post',
        body: JSON.stringify(form),
        headers:{
            'Content-Type' : 'application/json',
            'Accept' : 'application/json',
            'Authorization': 'Bearer '+props.user_api_token
        }
    }).then(
        response=>response.json()

    ).then(data =>{

        form.name = "";
        form.price = "";
        if(data){
            window.history.back();
        }
    }).catch(err=>console.log(err))
    };

    console.log(form.errors);
</script>
<template>
    <Head title="Create Product"></Head>
    <BreezeAuthenticatedLayout>
        <template v-if="user_name" #user_name>
        <h3>
            {{user_name}}
        </h3>
    </template>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Product
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div className="flex items-center justify-between mb-6">
                            <Link
                                className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                :href="route('index')"
                            >
                                Back
                            </Link>
                        </div>
                        <form name="createForm" @submit.prevent="submit">
                                <div className="flex flex-col">
                                    <div className="mb-4">
                                        <BreezeLabel for="name" value="Name" />

                                        <BreezeInput
                                            id="name"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="form.name"
                                            autofocus />
                                        <span className="text-red-600" v-if="form.errors.name">
                                            {{ form.errors.name }}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <BreezeLabel for="price" value="Price" />

                                        <BreezeInput
                                            id="price"
                                            type="number"
                                            class="mt-1 block w-full"
                                            v-model="form.price"
                                            autofocus />
                                        <span className="text-red-600" v-if="form.errors.price">
                                            {{ form.errors.price }}
                                        </span>
                                    </div>
                                </div>

                                <div className="mt-4">
                                    <button
                                        type="submit"
                                        className="px-6 py-2 font-bold text-white bg-green-500 rounded"
                                    >
                                        Save
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
