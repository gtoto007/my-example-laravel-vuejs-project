@extends('layouts.main')

@section('content')
    <div id="contact">
        <div class="section-content">
            <h1 class="section-header">Benvenuti in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> BitBoss Test</span></h1>
            <h3>Presenta la tua candidatura</h3>
        </div>
        <div class="contact-section">
            <div class="container">
                {!! Form::open(['route' => ['applications.store'], 'method' => 'post'])!!}
                    <div class="col-md-12">

                        <div class="col-md-6 form-line">
                            <div class="form-group">
                                {!! Form::label('developer_first_name', 'Nome') !!}
                                {!! Form::text('developer_first_name', null, ['class' => 'form-control', 'placeholder'=>'Nome']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('developer_last_name', 'Cognome') !!}
                                {!! Form::text('developer_last_name', null, ['class' => 'form-control', 'placeholder'=>'Cognome']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('developer_email', 'Email') !!}
                                {!! Form::text('developer_email', null, ['re-expr' => 'email', 'class' => 'form-control', 'placeholder'=>'Email']) !!}
                            </div>
                        </div>

                        <div class="col-md-6 form-line">
                            <div class="form-group">
                                {!! Form::label('developer_phone', 'Telefono') !!}
                                {!! Form::text('developer_phone', null, ['re-expr' => 'phone_ne', 'class' => 'form-control', 'placeholder'=>'Telefono']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('notes', 'Note') !!}
                                {!! Form::textarea('notes', null, ['class' => 'form-control', 'placeholder'=>'Note']) !!}
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Invia candidatura</button>
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
