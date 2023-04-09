<script setup>


const props = defineProps({
  items: Object
});

</script>

<script>
import NavBar from "@/Layouts/NavBar.vue";
import Subtitle from "@/Components/Subtitle.vue";
import MyTitle from "@/Pages/MyTitle.vue";
import {router} from '@inertiajs/vue3'


function approve(id) {
  router.post('/apply/accept', {
    id: id,
  })
}

function discard(id) {
  router.post('/apply/discard', {
    id: id,
  })
}

export default {
  name: "Apply",
}
</script>

<template>

  <MyTitle class="text-center mt-5">Gestione candidature</MyTitle>
  <Subtitle class="text-center">Valuta e decidi se approvare o scartare le candidature.</Subtitle>
  <section class="container px-4 mx-auto w-full">
    <div class="flex flex-col">
      <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden border border-gray-200  md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 ">
              <thead class="bg-gray-50 ">
              <tr>
                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                  <div class="flex items-center gap-x-3">
                    <span>Id</span>
                  </div>
                </th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                  Data
                </th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                  Status
                </th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                  Candidato
                </th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                  Azioni
                </th>

              </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200 ">


              <tr v-for="application in items" :key="application.id">
                <td class="px-4 py-4 text-sm font-medium text-gray-700  whitespace-nowrap">
                  <div class="inline-flex items-center gap-x-3">
                    <span>#{{ application.id }}</span>
                  </div>
                </td>
                <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">{{ application.created_at }}</td>


                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                  <div v-if="application.status=='pendente'"
                       class="inline-flex items-center px-3 py-1 text-gray-500 rounded-full gap-x-2 bg-gray-100/60 ">
                    <svg width="12" height="12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002"/>
                    </svg>

                    <h2 class="text-sm font-normal">pendente</h2>
                  </div>
                  <div v-else-if="application.status=='scartato'"
                       class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 ">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"/>
                    </svg>
                    <h2 class="text-sm font-normal">{{ application.status }}</h2>
                  </div>
                  <div v-else-if="application.status=='accettato'"
                       class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 ">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"/>
                    </svg>
                    <h2 class="text-sm font-normal">accettato</h2>
                  </div>
                </td>
                <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <div>
                      <h2 class="text-sm font-medium text-gray-800">{{ application.first_name }}
                        {{ application.last_name }}</h2>
                      <p class="text-xs font-normal text-gray-600 ">{{ application.email }}</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-4 text-sm whitespace-nowrap">
                  <div v-if="application.status=='pendente'" class="flex items-center gap-x-6">
                    <a :href="route('apply.show',{id:application.id})"
                       class="text-gray-500 transition-colors duration-200 underline underline-offset-4
 hover:text-indigo-500 focus:outline-none">
                      Valuta
                    </a>
                    <button @click="discard(application.id)"
                       class="text-red-500 transition-colors duration-200 underline underline-offset-4
 hover:text-indigo-500 focus:outline-none">
                      Scarta
                    </button>

                    <button class="text-blue-500 transition-colors duration-200 underline underline-offset-4
 hover:text-indigo-500 focus:outline-none" @click="approve(application.id)">
                      Approva
                    </button>
                  </div>
                </td>
              </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="flex items-center justify-between mt-6">
      <a href="#"
         class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100    ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-5 h-5 rtl:-scale-x-100">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"/>
        </svg>

        <span>
                 previous
             </span>
      </a>

      <div class="items-center hidden md:flex gap-x-3">
        <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md  bg-blue-100/60">1</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">2</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">3</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">...</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">12</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">13</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">14</a>
      </div>

      <a href="#"
         class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100    ">
             <span>
                 Next
             </span>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-5 h-5 rtl:-scale-x-100">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/>
        </svg>
      </a>
    </div>
  </section>
</template>


