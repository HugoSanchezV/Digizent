<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { ref, computed } from "vue";
import { defineProps } from "vue";

const props = defineProps({
  disks: {
    type: Array,
    required: true,
  },

  store: {
    type: Object,
    required: true,
  },
});

console.log(props.disks);
const searchQuery = ref("");

const filteredDisks = computed(() => {
  if (!searchQuery.value) return props.disks;

  const query = searchQuery.value.toLowerCase();
  return props.disks.filter((disk) => disk.name.toLowerCase().includes(query));
});
</script>

<template>
  <AppLayout title="Disk of store">
    <template #header>
      <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          💿🏪 Disk in store
        </h2>
        <div class="relative">
          <input
            v-model="searchQuery"
            type="text"
            placeholder="Buscar discos..."
            class="px-4 py-2 pr-10 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
          />
          <svg
            class="absolute right-3 top-2.5 h-5 w-5 text-gray-400"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
              clip-rule="evenodd"
            />
          </svg>
        </div>
      </div>
    </template>

    <div class="py-6">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-lg rounded-lg">
          <div class="p-2 sm:p-4">
            <div class="overflow-x-auto">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gradient-to-r from-indigo-500 to-purple-600">
                  <tr>
                    <th
                      class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                    >
                      ID
                    </th>
                    <th
                      class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                    >
                      Name
                    </th>
                    <th
                      class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                    >
                      Artist
                    </th>

                    <th
                      class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                    >
                      Stock
                    </th>
                    <th
                      class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                    >
                      Price
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr
                    v-for="disk in filteredDisks"
                    :key="disk.id"
                    class="hover:bg-gray-50 transition-colors duration-150 ease-in-out"
                  >
                    <td
                      class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900"
                    >
                      {{ disk.id }}
                    </td>
                    <td
                      class="px-4 py-3 whitespace-nowrap text-sm text-gray-800"
                    >
                      {{ disk?.name }}
                    </td>
                    <td
                      class="px-4 py-3 whitespace-nowrap text-sm text-gray-800"
                    >
                      <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800"
                      >
                        {{ disk.artist.name }}
                      </span>
                    </td>

                    <td
                      class="px-4 py-3 whitespace-nowrap text-sm text-gray-800"
                    >
                      {{ disk.stock }}
                    </td>
                    <td
                      class="px-4 py-3 whitespace-nowrap text-sm text-gray-800"
                    >
                      <span class="font-medium"
                        >$ {{ disk.price.toFixed(2) }}</span
                      >
                    </td>
                  </tr>
                  <tr v-if="filteredDisks.length === 0">
                    <td colspan="4" class="px-4 py-8 text-center text-gray-500">
                      The disks that match the search were not found
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>