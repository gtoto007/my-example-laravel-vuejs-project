<script setup>

import {router, useForm} from '@inertiajs/vue3'
import Error from "@/Components/Error.vue";
import Subtitle from "@/Components/Subtitle.vue";
import MyTitle from "@/Components/MyTitle.vue";

const props = defineProps({
  errors: {
    type: Object
  }
});


const form = useForm({
  first_name: null,
  last_name: null,
  email: null,
  phone: null,
  notes: null,
})

const submit = () => {
  router.post('/apply', form)
}
</script>
<template>
  <MyTitle class="text-center mt-5">Candidati</MyTitle>
  <Subtitle class="text-center">Presenta la tua candidatura</Subtitle>
  <section class="mt-5 max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md">
    <form @submit.prevent="submit">
      <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
        <div>
          <label class="text-gray-700" for="first_name">Nome</label>
          <input id="first_name" name="first_name" type="text" v-model="form.first_name"
                 class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
          <Error v-if="errors.first_name"> {{ errors.first_name }}</Error>
        </div>
        <div>
          <label class="text-gray-700" for="surname">Cognome</label>
          <input id="last_name" name="last_name" type="text" v-model="form.last_name"
                 class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
          <Error v-if="errors.last_name"> {{ errors.last_name }}</Error>
        </div>

        <div>
          <label class="text-gray-700" for="emailAddress">Email</label>
          <input id="email" name="email" type="email" v-model="form.email"
                 class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
          <Error v-if="errors.email"> {{ errors.email }}</Error>
        </div>

        <div>
          <label class="text-gray-700 " for="telephone">Telefono</label>
          <input id="phone" name="phone" type="text" v-model="form.phone"
                 class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40  focus:outline-none focus:ring">
          <Error v-if="errors.phone"> {{ errors.phone }}</Error>
        </div>

      </div>

      <div class="mt-6">
        <label class="text-gray-700 " for="note">Note</label>
        <textarea id="notes" name="notes" type="text" rows="6" v-model="form.notes"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40  focus:outline-none focus:ring"></textarea>
        <Error v-if="errors.notes"> {{ errors.notes }}</Error>
      </div>

      <div class="flex justify-end mt-6">
        <button
            class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
          Invia la candidatura
        </button>
      </div>
    </form>
  </section>
</template>