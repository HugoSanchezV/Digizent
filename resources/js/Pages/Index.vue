<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Disk">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Disk
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2>hola discos </h2>
            </div>
        </div>
    </AppLayout>
</template>
