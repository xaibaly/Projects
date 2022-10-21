<script setup>
    import useProducts from '../../composables/products';
    import { reactive } from 'vue';

    
    const {storeProduct, errors} = useProducts();

    const form = reactive({
        name:"",
        price:""
    })
</script>
<template>
    <div class="mt-12">
        <form class="max-w-md mx-auto p-4 bg-white shadow-md rounded" @submit.prevent="storeProduct(form)">
            <div class="space-y-6">
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                    <input type="text" id="name" v-model="form.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <div v-if="errors.name">
                        <span class="text-sm text-red-400 ">
                                {{errors.name[0]}}
                        </span>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
                    <input type="number" id="price" v-model="form.price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <div v-if="errors.price">
                        <span class="text-sm text-red-400 ">
                                {{errors.price[0]}}
                        </span>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="bg-indigo-500 rounded text-white px-4 py-2 hover:bg-indigo-800">
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>