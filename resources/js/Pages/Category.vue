<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ProductComponent from "@/Components/ProductComponent.vue";
import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Category"/>

    <AuthenticatedLayout>
        <div class="w-full p-1 pt-2 mb-6">
            <!-- Category name-->
            <div class="text-[27px] font-extrabold"> {{ $page.props.category_name.name  }} </div>
            <!-- Category Description-->
            <div class="text-sm font-bold">
                Shop home entertainment, Tvs, home audio, headphones, cameras, accessories and more.
            </div>
            <!-- How many products in this category-->
            <div class="border border-gray-300 rounded-lg text-sm py-3.5 px-10 mb-4">
                1-{{ $page.props.category_products.length }} of over {{ $page.props.category_products.length }} results for {{ $page.props.category_name.name }}
            </div>
            <!-- Show Products-->
            <div class="grid grid-cols-3 gap-1">
                <div v-for="product in $page.props.category_products" :key="product" class="m-1">

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style>
</style>
