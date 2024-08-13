<script setup lang="ts">
import { onMounted, ref } from 'vue';
import { EyeOff, Eye } from 'lucide-vue-next';


const model = defineModel<string>({ required: true });

const input = ref<HTMLInputElement | null>(null);

onMounted(() => {
    if (input.value?.hasAttribute('autofocus')) {
        input.value?.focus();
    }
});

const eye = ref(false);

const changetype = () => {
    if(eye.value){
        input.value.type = 'text';
    }else{
        input.value.type = 'password';
    }
}

defineExpose({ focus: () => input.value?.focus() });
</script>

<template>
    <div class="flex w-full">
        <input
            class="border w-full border-1 border-gray-500 focus:outline-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            v-model="model" ref="input" type="password" />
        <div @click="eye = !eye, changetype()" class="cursor-pointer ">
            <EyeOff v-if="!eye" />
            <Eye v-if="eye" />
        </div>
    </div>
</template>
