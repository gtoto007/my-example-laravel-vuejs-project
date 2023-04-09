<script setup>
import {Head, router} from '@inertiajs/vue3';
import NavBar from "@/Layouts/NavBar.vue";
import Paragraph from "@/Components/Paragraph.vue";
import LI from "@/Components/LI.vue";
import Subtitle from "@/Components/Subtitle.vue";
import MyTitle from "@/Pages/MyTitle.vue";
import Layout from "@/Layouts/Layout.vue";
import Checked from "@/Components/Checked.vue";

defineProps({
  canLogin: {
    type: Boolean,
  },
  canRegister: {
    type: Boolean,
  },
  laravelVersion: {
    type: String,
    required: true,
  },
  phpVersion: {
    type: String,
    required: true,
  },
});

</script>

<template>
  <Head title="Welcome"/>

  <div class="relative flex flex-col items-center min-h-screen bg-center ">

    <sectio
        class="bg-gray-100 w-full  text-center selection:bg-red-500 selection:text-white p-20">
      <MyTitle>Benvenuto</MyTitle>
      <p class="text-xl text-gray-500 mt-2 mb-6">Candidati ora per diventare uno sviluppatore di BitBoss</p>
      <a :href="route('apply.create')" class="bg-blue-500 rounded-md text-white p-2">Candidati</a>
    </sectio>

    <section class="bg-white w-full pl-14 pt-4  selection:bg-red-500 selection:text-white pb-4">
      <Subtitle>Il Test</Subtitle>
      <Paragraph>Abbiamo costruito questo test.</Paragraph>

      <Paragraph>Abbiamo fatto finta di creare questa piccola - e brutta - applicazione per raccogliere le candidature
        dei
        programmatori. Riesci a finirla?
      </Paragraph>

      <Paragraph>Non ti preoccupare, non la useremo davvero per raccogliere candidature. Siamo più bravi di così.
      </Paragraph>

      <Subtitle>Requisiti</Subtitle>

      <Checked>Mettere il footer sticky in fondo alla pagina</Checked>
      <Checked>Dopo la registrazione, l'utente deve finire sulla pagina per candidarsi.</Checked>
      <Checked>Memorizzare la candidatura dell'utente</Checked>
      <Checked>Associare la candidatura all'utente che l'ha inviata</Checked>
      <Checked> Dare all'utente la possibilità di accedere ad una pagina dove è presente lo stato
        della sua candidatura (accettata o rifiutata).Al login l'utente viene portato automaticamente su
        questa pagina. </Checked>
      <Checked>Un utente non può candidarsi più volte</Checked>
      <Checked>Solo gli utenti admin possono accedere alla manipolazione delle candidature</Checked>
      <Checked> Logica di accettazione o scarto dopo che admin ha cliccato sul pulsante</Checked>
      <Checked> Popolare il database con un seed delle candidature</Checked>
      <ul>
        <LI> Notifica quando c’è una nuova candidatura (su Slack + Email agli utenti admin)</LI>
        <LI> Notifica al candidato quando viene accettato o rifiutato</LI>
      </ul>
      <Subtitle>Quando hai finito</Subtitle>
      <Paragraph>Fai il push sul repository. Esamineremo il codice che hai scritto.</Paragraph>
      <Subtitle>Cosa esamineremo</Subtitle>
      <Paragraph>Guarderemo se il codice funziona e se i requisiti sono rispettati, certo.</Paragraph>
      <Paragraph>Ma guarderemo anche tutto il resto: la qualità e l'ordine del codice, l'inventiva per risolvere un
        problema, quanto conosci Laravel, le ottimizzazioni e i piccoli dettagli.
      </Paragraph>
      <Paragraph>Non aver paura di usare troppo overengineering, di stravolgere tutto, o, al contrario, di usare la
        nostra traccia, o di essere troppo banale. Prova - se ti va - a stupirci.
      </Paragraph>
    </section>
  </div>

</template>

<style>
.bg-dots-darker {
  background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
  .dark\:bg-dots-lighter {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
  }
}
</style>
