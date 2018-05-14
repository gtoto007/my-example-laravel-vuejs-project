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
@endsection
