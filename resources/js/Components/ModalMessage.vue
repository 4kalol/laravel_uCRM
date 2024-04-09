<script setup>
import { defineEmits, defineProps, ref } from 'vue';

const props = defineProps({
    showStatus: Boolean,
    message: String,
});

const emit = defineEmits(['close','enter']);
const name = ref('');

const closeModal = () => {
    emit('close');
};

const enterRoom = () => {
    emit('enter', name.value);
}


</script>

<template>
  <div id="modal" v-show="props.showStatus">
    <div id="modal-content" class="modal">
      <p id="modal-message" class="modal__message">{{ props.message }}</p>
      <div class="flex flex-col items-center mt-3">
        <input type="text" v-model="name">
        <button type="button" class="modal__btn" @click="enterRoom">enter</button>
        <button type="button" class="modal__btn" @click="closeModal">close</button>
      </div>
    </div>
    <div id="modal-overlay"></div>
  </div>
</template>

<style scoped>
.modal {
  padding: 10px 20px;
  border: 2px solid #2768a5;
  background: #dadde0;
  z-index: 2;
  display: block;
  text-align: center;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 10px;
}

.modal__message {
  margin-top: 10px;
}

.modal__cancel {
  margin-right: 30px;
  font-size: 15px;
}

.modal__cancel:hover {
  cursor: pointer;
  color: rgb(14, 48, 240);
  font-weight: bold;
}

.modal__btn {
  display: inline-block;
  margin: 20px auto;
  text-decoration: none;
  width: 80px;
  height: 30px;
  text-decoration: none;
  color: #000000;
  border: solid 2px #2768a5;
  border-radius: 3px;
  transition: 0.4s;
  text-align: center;
  vertical-align: middle;
  font-size: 15px;
  background-color: #dadde0;
}

.modal__btn:hover {
  background: #2768a5;
  color: white;
  cursor: pointer;
}

#modal-overlay {
  z-index: 1;
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 120%;
  background-color: rgba(0, 0, 0, 0.75);
}
</style>
