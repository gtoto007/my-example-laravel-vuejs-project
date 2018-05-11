@extends('layouts.main')

@section('content')
    <div id="contact">
        <applications
                :applicationsprop="{{$applications}}"
                inline-template
                v-cloak>
            <div class="col-md-12">
                <div class="container">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Cognome</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Telefono</th>
                            <th class="text-center">Stato</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="application in applications">
                            <td>@{{application.developer_first_name}}</td>
                            <td>@{{application.developer_last_name}}</td>
                            <td>@{{application.developer_email}}</td>
                            <td>@{{application.developer_phone}}</td>
                            <td v-if="application.accepted == 1">Accettato</td>
                            <td v-if="application.accepted == 0">Rifiutato</td>
                            <td v-if="application.accepted == null">In attesa</td>
                            <td><a class="btn btn-default home-button" @click="acceptApplication(application)">Accetta</a></td>
                            <td><a class="btn btn-default home-button" @click="refuseApplication(application)">Rifiuta</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </applications>
    </div>
@stop
