@extends('layouts.app')

@section('content')


    <applications inline-template>
        <div>
            <table>
                <tr v-for="(application, index) in items" :key="application.id">
                    <td>@{{ application.first_name }}</td>
                    <td>@{{ application.last_name }}</td>
                </tr>
            </table>

            <paginator :dataSet="dataSet" @changed="fetch"></paginator>
        </div>
    </applications>


@endsection