<script setup>

import {router, useForm} from '@inertiajs/vue3'

const props = defineProps({
  status: {
    type: String
  },
  first_name: {
    type: String
  },
  last_name: {
    type: String
  },
  phone: {
    type: String
  },
  notes: {
    type: String
  },
  email: {
    type: String
  }
});

</script>
<template>
  <MyTitle class="text-center">Grazie per aver inviato la tua candidatura</MyTitle>
  <Subtitle class="text-center">Stato: <span class="font-bold underline">{{ props.status}}</span></Subtitle>
  <section class="mt-5 max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md">
    <form @submit.prevent="submit">
      <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
        <div>
          <label class="text-gray-700" for="first_name">Nome</label>
          <input type="text" id="disabled-input" aria-label="disabled input"
                 class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                 :value="props.first_name" disabled>
        </div>
        <div>
          <label class="text-gray-700" for="surname">Cognome</label>
          <input type="text"  aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" :value="props.last_name" disabled>
        </div>

        <div>
          <label class="text-gray-700" for="emailAddress">Email</label>
          <input type="text"  aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" :value="props.email" disabled>     </div>

        <div>
          <label class="text-gray-700 " for="telephone">Telefono</label>
          <input type="text"  aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" :value="props.phone" disabled></div>

      </div>

      <div>
        <label class="text-gray-700 " for="note">Note</label>
        <textarea id="notes" name="notes" type="text" rows="6" v-model="props.notes"
                  class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" disabled></textarea>
      </div>

    </form>
  </section>
</template>

<script>
import NavBar from "@/Layouts/NavBar.vue";
import Subtitle from "@/Components/Subtitle.vue";
import MyTitle from "@/Pages/MyTitle.vue";

export default {
  name: "Apply",
  components: {MyTitle, Subtitle}
}
</script>

