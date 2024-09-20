<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';


</script>


<template>

    <Head title="Hash Functions" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Hash Functions</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-8 text-gray-900">
                        <h1 class="information-title">What are Hash Functions?</h1>
                        <br>
                        <p class="information">
                            Hash functions are tools that transform keys (like words or numbers) into unique numbers.
                            These numbers help store the keys in a structure called a hash table.
                            Each key gets a special code that indicates where it should be stored.
                            This makes it easy and fast to find and retrieve information.
                            Hash functions are important in various fields, such as databases and security.
                        </p>
                    </div>
                </div>
            </div>


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-8 text-gray-900">
                        <h1 class="information-example-title">Simple Example</h1>
                        <br>
                        <div class="example">
                            <h1>Multiplication Hash Function</h1>
                            <br>
                            <p><strong>Hash Function Formula:</strong></p>
                            <code>
                        <p>h(k) = ⌊ m ⋅ (k ⋅ A mod 1) ⌋</p>
                    </code>
                            <br>


                            <p><strong>Example:</strong></p>
                            <p>Given:</p>
                            <br>

                            <ul class="justify">
                                <li><strong>k</strong> = 12</li>
                                <li><strong>m</strong> = 10 (size of hash table)</li>
                                <li><strong>A</strong> = 0.6180339887 (constant)</li>
                            </ul>
                            <br>

                            <p><strong>Steps:</strong></p>
                            <ol>
                                <li>Calculate k ⋅ A: <br> 12 ⋅ 0.6180339887 ≈ 7.4164078644</li>
                                <br>
                                <li>Find fractional part: <br> 7.4164078644 mod 1 ≈ 0.4164078644</li>
                                <br>
                                <li>Multiply by m: <br> 10 ⋅ 0.4164078644 ≈ 4.164078644</li>
                                <br>
                                <li>Apply floor function: <br> ⌊4.164078644⌋ = 4</li>
                            </ol>
                            <br>

                            <p><strong>Result:</strong> The hash code for key k = 12 is 4.</p>
                            <br>

                            <h2>Hash Table Representation</h2>
                            <br>
                            <div class="table-container">
                                <table class="table-example">
                                    <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>Key</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>12</td>
                                            <td>Your value here</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="py-12">

        </div>
    </AuthenticatedLayout>



</template>


<style>
.table-container {
    display: flex;
    width: 100%;

    justify-content: center;
}

.table-example {
    border: 1px solid rgb(94, 94, 94);

    width: 100%;
    max-width: 800px;
}

.table-example th,
td {
    border: 1px solid rgb(94, 94, 94);

    padding: 4px;
}


.justify {
    text-align: justify;
}


.example {
    background-color: rgb(226, 225, 225);
    border: 1px solid rgb(194, 194, 194);
    border-radius: 10px;

    padding: 15px;

    font-size: 1.1em;
}

.information-example-title {
    font-size: 1.8em;
    font-weight: bold;
    color: rgb(88, 88, 88);
}

.information-title {
    font-size: 2em;
    font-weight: bolder;
    color: rgb(58, 58, 58);
}

.information {
    font-size: 1.2em;
    text-indent: 30px;
}
</style>