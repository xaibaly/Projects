<script>
function fetchdata(){

fetch('api/products',{
    method:'GET',
    headers:{
            'Accept' : 'application/json'
        }
})
.then(res => res.json())
.then(res=>this.products = res.products)
.catch(err=>console.log(err));

}

export default {
  name: "products",
  data() {
    return {
      products: [],
    };
  },
  mounted() {
    // API call
    this.fetchdata();
  },
};

</script>


<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from '@inertiajs/inertia';
import { ZiggyVue } from '../../../../vendor/tightenco/ziggy/dist/vue.m';
const props = defineProps({
    is_login:Boolean,
    user_name:String,
    user_api_token:String,
});

const form = useForm();
function destroy(id) {
  if (confirm("Are you sure you want to Delete")) {
    fetch('api/products/'+id,{
        method: 'delete',
        headers:{
            'Content-Type' : 'application/json',
            'Authorization': 'Bearer '+props.user_api_token
        }

    }).then(
        res=>res.json()
    ).then(data =>{
        alert('Product Removed');
        Inertia.visit('/');
        $("#product_index_table").load(" #product_index_table > *");
    })
    .catch(err=>console.log(err.toString()));


  }
}
function fetchdata(){

fetch('api/products',{
    method:'GET',
    headers:{
            'Accept' : 'application/json'
        }
})
.then(res => res.json())
.then(res=>this.products = res.products)
.catch(err=>console.log(err));

}
</script>


<template>
  <Head title="Products"></Head>
  <BreezeAuthenticatedLayout>

    <template v-if="user_name" #user_name>
        <h3>
            {{user_name}}
        </h3>
    </template>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        CRUD with Laravel and Vue JS using Vite, Inertia, ZiggyVue etc
      </h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <div className="flex items-center justify-between mb-6">

              <div v-if="user_name">
                <Link
                    className="px-6 py-2 text-white bg-green-500 rounded-md focus:outline-none disabled:border-slate-200 disabled:shadow-none"
                    :href="route('show_create_product')"
                >
                    Create Product
                </Link>
              </div>
              <div v-else>
                <button
                    className="px-6 py-2 text-white bg-green-500 rounded cursor-not-allowed text-center"

                     disabled>
                    Create Product
                </button>
            </div>
            </div>
            <div v-if="!products.length" class="w-8 h-8 bg-red-500 mx-auto rounded-full animate-ping" id="product_index_table"></div>
            <table className="table-fixed w-full" id="hello123">
              <thead>
                <tr className="bg-gray-100">
                  <th className="px-4 py-2 w-20">No.</th>
                  <th className="px-4 py-2">Name</th>
                  <th className="px-4 py-2">Price</th>
                  <th className="px-4 py-2">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="product in products" :key="product.id">
                  <td className="border px-4 py-2">{{ product.id }}</td>
                  <td className="border px-4 py-2">{{ product.name }}</td>
                  <td className="border px-4 py-2">{{ product.price }}</td>
                  <td className="border px-4 py-2">
                    <div v-if="user_name">
                        <Link
                        tabIndex="1"
                        className="px-4 py-2 text-sm text-white bg-blue-500 rounded"
                        :href="route('show_edit_product',product.id)"
                        >
                        Edit
                        </Link>
                        <button
                        @click="destroy(product.id)"
                        tabIndex="-1"
                        type="button"
                        className="mx-1 px-4 py-2 text-sm text-white bg-red-500 rounded"
                        >
                        Delete
                        </button>
                        </div>
                    <div v-else>
                        <button
                        tabIndex="1"
                        className="px-4 py-2 text-sm text-white bg-blue-500 rounded cursor-not-allowed text-center"
                        disabled
                        >
                        Edit
                        </button>
                        <button
                        @click="destroy(product.id)"
                        tabIndex="-1"
                        type="button"
                        className="mx-1 px-4 py-2 text-sm text-white bg-red-500 rounded cursor-not-allowed text-center" disabled
                        >
                        Delete
                        </button>

                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>

