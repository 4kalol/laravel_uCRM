<script setup>
import Pagination from '@/Components/Pagination.vue';

const props = defineProps({
    customers: Object,
});


</script>

<template>
<ul v-for="customer in customers.data" :key="customer.id">
    <li>{{ customer.id }}</li>
    <li>{{ customer.name }}</li>
</ul>
<Pagination class="mt-6" :links="customers.links"></Pagination>
</template>
