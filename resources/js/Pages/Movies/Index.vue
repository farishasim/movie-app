<script setup>
import HomeLayout from '@/Layouts/HomeLayout.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head } from '@inertiajs/vue3';

defineProps(['response']);
</script>
 
<template>
    <Head title="Movie" />
 
    <HomeLayout>
        <div class="m-10">
            <h3 class="text-xl font-semibold text-gray-800">Now Playing</h3>
            <div class="flex flex-wrap justify-start space-x-4 pt-4">
                <!-- Loop through the cardData array and render a Card component for each item -->
                <Card
                v-for="(card, index) in response.results.slice(0,4)"
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
                <!-- Loop through the cardData array and render a Card component for each item -->
                <Card 
                v-for="(card, index) in cardData"
                :key="index"
                :title="card.title"
                :description="card.description"
                :imageSrc="card.imageSrc"
                />
            </div>
        </div>
        <div class="m-10">
            <h3 class="text-xl font-semibold text-gray-800">Top Rated</h3>
            <div class="flex flex-wrap justify-start space-x-4 pt-4">
                <!-- Loop through the cardData array and render a Card component for each item -->
                <Card 
                v-for="(card, index) in cardData"
                :key="index"
                :title="card.title"
                :description="card.description"
                :imageSrc="card.imageSrc"
                />
            </div>
        </div>
        <div class="m-10">
            <h3 class="text-xl font-semibold text-gray-800">Upcoming</h3>
            <div class="flex flex-wrap justify-start space-x-4 pt-4">
                <!-- Loop through the cardData array and render a Card component for each item -->
                <Card 
                v-for="(card, index) in cardData"
                :key="index"
                :title="card.title"
                :description="card.description"
                :imageSrc="card.imageSrc"
                />
            </div>
        </div>
    </HomeLayout>
</template>

<script>
import Card from '@/Components/Card.vue';

export default {
  components: {
    Card,
  },
  data() {
    return {
      cardData: [
        {
          title: 'Card 1',
          description: 'Description for Card 1.',
          imageSrc: 'https://image.tmdb.org/t/p/w500/1E5baAaEse26fej7uHcjOgEE2t2.jpg',
        },
        {
          title: 'Card 2',
          description: 'Description for Card 2.',
          imageSrc: 'https://image.tmdb.org/t/p/w500/1E5baAaEse26fej7uHcjOgEE2t2.jpg',
        },
        {
          title: 'Card 3',
          description: 'Description for Card 3.',
          imageSrc: 'https://image.tmdb.org/t/p/w500/1E5baAaEse26fej7uHcjOgEE2t2.jpg',
        },
        {
          title: 'Card 4',
          description: 'Description for Card 4.',
          imageSrc: 'https://image.tmdb.org/t/p/w500/1E5baAaEse26fej7uHcjOgEE2t2.jpg',
        },
        // Add more card data as needed
      ],
    };
  },
};
</script>