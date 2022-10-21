<script>
export default {
  name: "products",
  data() {
    return {
      product: [],
      errors: [],
    };
  },
  mounted() {
    // API call
    this.fetchdata();
  },
};

</script>

<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import BreezeLabel from '@/../js/Components/InputLabel.vue';
import BreezeInput from '@/../js/Components/TextInput.vue';
import BreezeTextArea from '@/Pages/Components/Textarea.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
const props = defineProps({
    id:String,
    user_name:String,
    user_api_token:String,
});


function fetchdata(){

fetch('/api/products/'+props.id)
.then(res => res.json())
.then(res=>this.product = res)
.catch(errors=>console.log(errors));

}


function storedata(){
    fetch('/api/products/edit/' + props.id,{
        method: 'PUT',
        headers:{
            'Content-Type' : 'application/json',
            'Authorization': 'Bearer '+props.user_api_token

        },
        body:JSON.stringify({
            name:$('#name').val(),
            price:$('#price').val()
        })
    }).then(
        response=>response.json()

    ).then(data =>{
        if(data){
            window.history.back();
        }
    }).catch(err=>console.log(err));

}


</script>

<template>
    <Head title="Edit" ></Head>
    <BreezeAuthenticatedLayout>
        <template v-if="user_name" #user_name>
        <h3>
            {{user_name}}
        </h3>
    </template>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Product
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
                        <form name="createForm" @submit.prevent="storedata()">
                                <div className="flex flex-col">
                                    <div className="mb-4">
                                        <BreezeLabel for="name" value="Name" />

                                        <BreezeInput
                                            id="name"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="product.name"
                                            autofocus />
                                        <span className="text-red-600" >

                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <BreezeLabel for="price" value="Price" />

                                        <BreezeInput
                                            id="price"
                                            type="number"
                                            class="mt-1 block w-full"
                                            v-model="product.price"
                                            autofocus />
                                        <span className="text-red-600" >

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

