<template>
  <MyTitle class="text-center mt-5">Candidati</MyTitle>
  <Subtitle class="text-center">Presenta la tua candidatura</Subtitle>
  <section class="mt-5 max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md">
    <form>
      <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
        <div>
          <label class="text-gray-700" for="name">Nome</label>
          <input id="name" name="name" type="text"
                 class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
        </div>
        <div>
          <label class="text-gray-700" for="surname">Cognome</label>
          <input id="surname" name="surname" type="text"
                 class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
        </div>

        <div>
          <label class="text-gray-700" for="emailAddress">Email</label>
          <input id="email" name="email" type="email"
                 class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
        </div>

        <div>
          <label class="text-gray-700 " for="telephone">Telefono</label>
          <input id="telephone" name="telephone" type="text"
                 class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40  focus:outline-none focus:ring">
        </div>

      </div>

      <div>
        <label class="text-gray-700 " for="note">Note</label>
        <textarea id="note" name="note" type="text" rows="6"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40  focus:outline-none focus:ring"></textarea>
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

<script>
import NavBar from "@/Layouts/NavBar.vue";
import Subtitle from "@/Components/Subtitle.vue";
import MyTitle from "@/Pages/MyTitle.vue";

export default {
  name: "Apply",
  components: {MyTitle, Subtitle, NavBar}
}
</script>

<style scoped>

</style>