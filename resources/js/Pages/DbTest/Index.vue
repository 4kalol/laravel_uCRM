<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import ModalMessage from '@/Components/ModalMessage.vue';

const props = defineProps({
    rooms: Array,
});

const isShow = ref(false);
const pushedRoomId = ref(null);
const toggleModal = (index) => {
    pushedRoomId.value = index;
    isShow.value = !isShow.value;
};

const enterRoom = (name) => {
    let roomData = null;
    props.rooms.forEach((room) => {
        console.log(room.room_id);
        if (room.room_id === pushedRoomId.value) {
            roomData = room;
        }
    });
    Inertia.get(route('dbtest.show', { room_id: roomData.room_id }), { roomData: roomData, name: name });
};
</script>

<template>
    <Head title="トークルーム一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">トークルーム一覧</h2>
        </template>

        <ModalMessage @enter="enterRoom" @close="toggleModal" :showStatus="isShow" message="名前を決めてください。"></ModalMessage>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div v-for="room in rooms" :key="room.room_id" class="p-6 text-gray-900 border border-solid-50">
                        <button type="button" @click="toggleModal(room.room_id)">
                            {{ room.room_name }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
