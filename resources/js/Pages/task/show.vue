<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';

defineProps({
    task: String
})
</script>

<template>

    <Head title="shoe" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    show
                    <tr>
                        <td>{{ task.title }}-></td>
                        <td> {{ task.content }}</td>
                    </tr>

                </div>
            </div>
        </div>   </div>
</template>
