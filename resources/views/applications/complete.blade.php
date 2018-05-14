@extends('layouts.main')

@section('content')
    <div id="contact">
        <div class="section-content">
            <h1 class="section-header">Grazie per la tua candidatura  <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> {{$application->developer_first_name}}</span></h1>
            <h3>Riceverai presto una mail di risposta</h3>
        </div>

        <div class="contact-section">
            <div class="container">
                <a class="btn btn-default home-button submit" href="{{route('applications.create')}}">Torna alla home</a>
            </div>
        </div>
    </div>
@stop
