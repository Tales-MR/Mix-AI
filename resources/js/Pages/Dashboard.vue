<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import axios from 'axios';


let data = ref({
    greating: "Hello World" 
});




let test = () => {
    axios.post("teste", {
        data: {
            teste: "oi"
        }
    }).then(response => console.log(response))
}


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">{{ data.greating }}</div>

                    <button type="button" v-on:click="test">Teste</button>
                </div>
            </div>
        </div>

        
    </AuthenticatedLayout>
</template>
