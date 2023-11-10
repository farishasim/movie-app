<script setup>
import HomeLayout from '@/Layouts/HomeLayout.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head } from '@inertiajs/vue3';
import Card from '@/Components/Card.vue';

defineProps(['now_playing', 'popular', 'top_rated', 'upcoming']);
</script>
 
<template>
    <Head title="Movie" />
 
    <HomeLayout>
        <div class="m-10">
            <h3 class="text-xl font-semibold text-gray-800">Now Playing</h3>
            <div class="flex flex-wrap justify-start space-x-4 pt-4">
                <Card
                v-for="(card, index) in now_playing.results.slice(0,4)"
                :key="index"
                :title="card.title"
                :description="card.description"
                :imageSrc="`https://image.tmdb.org/t/p/w500/${card.poster_path}`"
                />
            </div>
        </div>
        <div class="m-10">
            <h3 class="text-xl font-semibold text-gray-800">Popular</h3>
            <div class="flex flex-wrap justify-start space-x-4 pt-4">
                <Card
                v-for="(card, index) in popular.results.slice(0,4)"
                :key="index"
                :title="card.title"
                :description="card.description"
                :imageSrc="`https://image.tmdb.org/t/p/w500/${card.poster_path}`"
                />
            </div>
        </div>
        <div class="m-10">
            <h3 class="text-xl font-semibold text-gray-800">Top Rated</h3>
            <div class="flex flex-wrap justify-start space-x-4 pt-4">
                <Card
                v-for="(card, index) in top_rated.results.slice(0,4)"
                :key="index"
                :title="card.title"
                :description="card.description"
                :imageSrc="`https://image.tmdb.org/t/p/w500/${card.poster_path}`"
                />
            </div>
        </div>
        <div class="m-10">
            <h3 class="text-xl font-semibold text-gray-800">Upcoming</h3>
            <div class="flex flex-wrap justify-start space-x-4 pt-4">
                <Card
                v-for="(card, index) in upcoming.results.slice(0,4)"
                :key="index"
                :title="card.title"
                :description="card.description"
                :imageSrc="`https://image.tmdb.org/t/p/w500/${card.poster_path}`"
                />
            </div>
        </div>
    </HomeLayout>
</template>