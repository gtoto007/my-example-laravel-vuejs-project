@extends('layouts.app')

@section('content')
    <section class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <img src="//bitboss.it/images/BitBoss/logo-black-200.png"/>
        <div class="container">
            <h1>Candidati</h1>
            <p class="lead">Presenta la tua candidatura</p>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="container">
                {!! Form::open(['route' => ['applications.store'], 'method' => 'post'])!!}
                <div class="form-group">
                    {!! Form::label('first_name', 'Nome') !!}
                    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>'Nome']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('last_name', 'Cognome') !!}
                    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>'Cognome']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Email']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('phone', 'Telefono') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder'=>'Telefono']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('notes', 'Note') !!}
                    {!! Form::textarea('notes', null, ['rows'=>3, 'class' => 'form-control', 'placeholder'=>'Note']) !!}
                </div>

                <div>

                    <button type="submit" class="btn btn-lg btn-block btn-outline-primary"><i class="fa fa-paper-plane"
                                                                                              aria-hidden="true"></i>
                        {{__("Invia candidatura")}}
                    </button>
                </div>

                {!! Form::close() !!}
            </div>
    </section>

@stop
