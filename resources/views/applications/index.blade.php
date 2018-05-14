@extends('layouts.app')

@section('content')

    <applications inline-template>
        <div>
            <table>
                <tr v-for="(application, index) in items" :key="application.id">
                    <td>@{{ application.first_name }}</td>
                    <td>@{{ application.last_name }}</td>
                    <td><a href="javascript:;" onclick="accept(application)">{{__("Approve")}}</a></td>
                    <td><a href="javascript:;" onclick="">{{__("Refuse")}}</a></td>
                </tr>
            </table>

            <paginator :dataSet="dataSet" @changed="fetch"></paginator>
        </div>
    </applications>


@endsection