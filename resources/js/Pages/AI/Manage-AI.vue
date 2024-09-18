<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import axios from 'axios';


// let test = () => {
//     axios.post("teste", {
//         data: {
//             teste: "oi"
//         }
//     }).then(response => console.log(response))
// }


</script>

<script>
export default {
  props: {
    data: {
      type: Array,
      required: true
    }
  }
};
</script>



<template>
    <Head title="Home" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Home</h2>
        </template>

        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                    <h1>Manage AIs</h1>
                </div>
            </div>
        </div>


        <div class="py-4">
            <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8" v-for="ai in data"> 
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <h1>{{ ai?.name }}</h1>
                </div>
            </div>
        </div>

        
    </AuthenticatedLayout>
</template>
