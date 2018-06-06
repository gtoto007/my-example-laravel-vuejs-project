@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Benvenuto</h1>
            <p class="lead text-muted">Candidati ora per diventare uno sviluppatore di BitBoss</p>
            <p>
                <a href="{{route('apply')}}" class="btn btn-primary my-2">Candidati</a>
            </p>
        </div>
    </section>
    <section class="">
        <div class="container">
            <h2>Il Test</h2>

            <p>Abbiamo costruito questo test.</p>

            <p>Abbiamo fatto finta di creare questa piccola - e brutta - applicazione per raccogliere le candidature dei
                programmatori. Riesci a finirla? </p>

            <p>Non ti preoccupare, non la useremo davvero per raccogliere candidature. Siamo più bravi di così.</p>

            <h2>Requisiti</h2>
            <ul>
                <li>Grafica
                </li>
                <ul>
                    <li>Mettere il footer sticky in fondo alla pagina
                    </li>
                </ul>
                <li>Funzionalità per gli utenti</li>
                <ul>
                    <li>Dopo la registrazione, l'utente deve trovarsi sulla pagina per candidarsi.</li>
                    <li> Bisogna memorizzare la candidatura dell'utente
                    </li>
                    <li> Associare la candidatura all'utente che l'ha inviata
                    </li>
                    <li> Dare all'utente la possibilità di accedere ad una pagina dove è presente lo stato
                        della sua candidatura (accettata o rifiutata). Al login l'utente viene portato automaticamente
                        su questa pagina.
                    </li>
                    <li> Un utente non può candidarsi più volte</li>
                </ul>
                <li>Funzionalità per gli utenti Admin</li>
                <ul>
                    <li> Solo gli utenti admin possono accedere ad una sezione con una lista delle candidature ricevute
                    </li>
                    <li> Notifica quando c’è una nuova candidatura (su Slack + Email agli utenti admin)
                    </li>
                    <li> Ogni candidato potrà essere rifiutato o scartato. Creare la logica di accettazione o scarto
                        dopo che admin ha cliccato sul pulsante d'azione
                    </li>
                    <li> Notifica al candidato quando viene accettato o rifiutato
                    </li>
                </ul>
                <li> Popolare il database con un seed delle candidature
                </li>
            </ul>
            <h2>Quando hai finito</h2>
            <p>Fai una pull request sul repository. Esamineremo il codice che hai scritto.</p>
            <h2>Cosa esamineremo</h2>
            <p>Guarderemo se il codice funziona e se i requisiti sono rispettati, certo.</p>
            <p>Ma guarderemo anche tutto il resto: la qualità e l'ordine del codice, l'inventiva per risolvere un
                problema, quanto conosci Laravel, le ottimizzazioni e i piccoli dettagli.</p>
            <p>Non aver paura di usare troppo overengineering, di stravolgere tutto, o, al contrario, di usare la nostra
                traccia, o di essere troppo banale. Prova - se ti va
                - a
                stupirci.</p>
        </div>
    </section>
@endsection
