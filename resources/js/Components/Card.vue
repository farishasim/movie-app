<script setup>
import { Link } from '@inertiajs/vue3';

defineProps(['id', 'title', 'description', 'imageSrc']);

</script>

<template>
  <div class="max-w-[200px] overflow-hidden bg-white rounded-lg shadow-lg">
    <Link :href="route('movies.detail', {'id': id})">
        <div class="aspect-w-9 aspect-h-12">
            <img :src="imageSrc" alt="Card Image" class="object-cover object-center w-full" />
        </div> 
        <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">{{ title }}</h3>
            <p class="mt-2 text-gray-600">{{ description }}</p>
        </div>
    </Link>
  </div>
</template>
  
<!-- <script>
  export default {
    props: {
      title: String,
      description: String,
      imageSrc: String,
    },
  };
</script> -->