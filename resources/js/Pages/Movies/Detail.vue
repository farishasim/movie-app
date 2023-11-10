<script setup>
import HomeLayout from '@/Layouts/HomeLayout.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head, Link } from '@inertiajs/vue3';
import Card from '@/Components/Card.vue';

defineProps(['movie']);
</script>
 
<template>
    <Head title="Movie" />
 
    <HomeLayout>
        <div class="flex items-center justify-center m-10">
            <div class="max-w-4xl bg-white rounded-lg shadow-lg flex p-6">
                <img :src="`https://image.tmdb.org/t/p/w500/${movie.poster_path}`" alt="Movie Poster" class="w-60 h-auto mr-4" />
                <div>
                <h1 class="text-3xl font-bold">{{ movie.title }}</h1>
                <p class="text-gray-500">{{ movie.genres[0].name }}</p>
                <p class="text-gray-700">{{ movie.overview }}</p>
                <p class="text-gray-500">Release Date: {{ movie.release_date }}</p>
                </div>
            </div>
        </div>
    </HomeLayout>
</template>