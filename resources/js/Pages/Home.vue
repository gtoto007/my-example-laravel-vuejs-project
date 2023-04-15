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

    <section
        class="bg-gray-100 w-full  text-center selection:bg-red-500 selection:text-white p-20">
      <MyTitle>Benvenuto</MyTitle>
      <p class="text-xl text-gray-500 mt-2 mb-6">Candidati ora per diventare uno sviluppatore di BitBoss</p>
      <a :href="route('apply.create')" class="bg-blue-500 rounded-md text-white p-2">Candidati</a>
    </section>

    <section class="bg-white w-full pl-14 pt-4  selection:bg-red-500 selection:text-white pb-4">
      <Subtitle>Introduzione</Subtitle>
      <Paragraph>Questo progetto ha avuto lo scopo di soddisfare alcuni requisiti richiesti per un colloquio di lavoro,
        estendendo un'applicazione preesistente.
        L'obiettivo dell'applicazione è quello di consentire ad un'azienda di ricevere candidature per le posizioni
        lavorative aperte.
      </Paragraph>
      <Paragraph>
        Leggi il readme.md che trovi nella root del repository per verificare la corretta configurazione del progetto.
      </Paragraph>

      <Subtitle>Requisiti soddisfatti:</Subtitle>

      <Checked>Mettere il footer sticky in fondo alla pagina</Checked>
      <Checked>Dopo la registrazione, l'utente deve finire sulla pagina per candidarsi.</Checked>
      <Checked>Memorizzare la candidatura dell'utente</Checked>
      <Checked>Associare la candidatura all'utente che l'ha inviata</Checked>
      <Checked> Dare all'utente la possibilità di accedere ad una pagina dove è presente lo stato
        della sua candidatura (accettata o rifiutata).Al login l'utente viene portato automaticamente su
        questa pagina.
      </Checked>
      <Checked>Un utente non può candidarsi più volte</Checked>
      <Checked>Solo gli utenti admin possono accedere alla manipolazione delle candidature</Checked>
      <Checked> Logica di accettazione o scarto dopo che admin ha cliccato sul pulsante</Checked>
      <Checked> Popolare il database con un seed delle candidature</Checked>
      <Checked> Notifica al candidato quando viene accettato o rifiutato</Checked>
      <Checked> Notifica quando c’è una nuova candidatura (su Slack + Email agli utenti admin)</Checked>


      <Subtitle>Alcune aggiunte sviluppate in autonomia:</Subtitle>
      <Checked>progetto convertito da Laravel 7 a Laravel 10</Checked>
      <Checked>utilizzo di Inertia/Vue.Js invece di un classico approccio api</Checked>

      <Subtitle> ACCOUNT DEMO AMMINISTRATORE   </Subtitle>
      <Paragraph class="bg-gray-200 p-4">
        admin@bitboss.it<br/>
        password<br/>
      </Paragraph>
      <Paragraph>
        <I>(assicurati di aver lanciato il seed)</I>
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
