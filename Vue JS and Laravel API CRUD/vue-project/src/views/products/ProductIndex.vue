<script setup>
import useProducts from '../../composables/products';
import { onMounted } from 'vue';

const {products , getProducts, destroyProduct} = useProducts();

onMounted( ()=> getProducts())

</script>
<template>
    <div class="mt-12">
        <div class="flex justify-end m-2 p-2">
            <RouterLink :to="{name:'ProductCreate'}" class="bg-indigo-500 rounded text-white px-4 py-2 hover:bg-indigo-800">Create Product</RouterLink>
        </div>
        <div class="overflow-x-auto relative">
    <table class="mx-auto p-4 text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Product name
                </th>
                <th scope="col" class="py-3 px-6">
                    Product Price
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="product in products" :key="product.id"  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{product.name}}
                </th>
                <td class="py-4 px-6">
                    {{product.price}}
                </td>
                <td class="py-4 px-6"> 
                    <RouterLink :to="{ name:'ProductEdit', params:{id:product.id}}" class="px-4 py-2 mr-4 mb-3 bg-blue-600 hover:bg-blue-800 rounded text-white" >Edit</RouterLink>
                    <button @click="destroyProduct(product.id)" class="px-4 py-2 mr-4 mt-3 bg-red-600 hover:bg-red-800 rounded text-white">
                        Delete
                    </button>
                </td>
            </tr>
         
        </tbody>
    </table>
</div>
    </div>
</template>