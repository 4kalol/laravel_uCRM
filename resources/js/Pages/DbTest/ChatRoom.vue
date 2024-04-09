<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { reactive, ref, onMounted } from 'vue';
import axios from 'axios';

const props = defineProps({
    messagesInfo: Array,
    roomId: Number,
    currentUserInfo: Array,
});

const messageLists = ref([]);
const newMessage = ref('');

onMounted(() => {
    messageLists.value = props.messagesInfo.map((data) => {
        return {
            message: data.message,
            userName: data.user_name,
            userId: data.user_id,
        };
    });
});

const sendMessage = async() => {
    try{
        messageLists.value.push({
            message: newMessage.value,
            userName: props.currentUserInfo[0].name,
            userId: props.currentUserInfo[0].id,
        });
        // 非同期処理でDBに新規メッセージを追加(Inertia.post()を使うと全画面の再レンダリングされてしまうため)
        const res = await axios.get(`/api/insertMessage/?message=${newMessage.value}&roomId=${props.roomId}&userId=${props.currentUserInfo[0].id}`);
        console.log(res.data);
        newMessage.value = '';
    }catch(e){
        console.log(e);
    }
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">トークルーム {{ props.roomId }} 号室</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <section class="w-4/5 md:w-3/5 lg:w-2/5 m-auto">
                            <div class="my-4 p-4 rounded-lg bg-blue-200">
                                <ul>
                                    <li class="truncate" v-for="messageList in messageLists" :key="messageList.userId">
                                        {{ messageList.userName }}:
                                        {{ messageList.message }}
                                    </li>
                                </ul>
                            </div>
                            <form @submit.prevent="sendMessage" class="my-4 py-2 px-4 rounded-lg bg-gray-300 text-sm flex flex-col md:flex-row flex-grow" action="/chat" method="POST">
                                <input v-model="newMessage" class="mt-2 md:mt-0 md:ml-2 py-1 px-2 rounded flex-auto" type="text" name="message" placeholder="Input message." maxlength="200">
                                <button class="mt-2 md:mt-0 md:ml-2 py-1 px-2 rounded text-center bg-gray-500 text-white" type="submit">Send</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
