import { ref } from "vue";
import { useRouter } from "vue-router";
import axios from 'axios';


export default function useProducts() {

    const products = ref([]);
    const product = ref([]);
    const errors = ref([]);
    const router = useRouter();

    const getProducts = async () => {

        const response = await axios.get('http://127.0.0.1:8000/api/products');
        products.value = response.data.products;
    }

    const getProduct = async (id) => {
        const response =  await axios.get('http://127.0.0.1:8000/api/products/' + id)
        product.value = response.data;
    }

    const storeProduct = async (data) => {
        try {
            await axios.post('http://127.0.0.1:8000/api/products', data);
            router.push({ name: 'ProductIndex' })
            product.value = response.data.products;

        } catch (error) {
            if (error.response.status == 422) {
                console.log(error.response);
                errors.value = error.response.data.errors;
            }
        }
    }


    const updateProduct = async (id) => {
        try {
            await axios.put('http://127.0.0.1:8000/api/products/' + id, product.value);
            router.push({ name: 'ProductIndex' })
            product.value = response.data.products;

        } catch (error) {
            if (error.response.status == 422) {
                console.log(error.response);
                errors.value = error.response.data.errors;
            }
        }
    }

    const destroyProduct = async (id) => {

        if (!window.confirm("Arr You sure")) {
            return;
        }
        await axios.delete('http://127.0.0.1:8000/api/products/' + id);
        await getProducts();

    }


    return {
        product,
        products,
        getProduct,
        getProducts,
        storeProduct,
        updateProduct,
        destroyProduct,
        errors,

    }
}