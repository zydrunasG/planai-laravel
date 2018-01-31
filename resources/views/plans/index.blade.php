@extends('layout')

@section('content')

    <main role="main" class="container-fluid">

        <h1 class="page-header text-center">Visi planai</h1>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Operatorius</th>
                <th scope="col">Planas</th>
                <th scope="col">Kaina</th>
                <th scope="col">Nemokami sms</th>
                <th scope="col">Nemokami skambučiai</th>
                <th scope="col">Nemokami gb</th>
                <th scope="col">Kaina sms</th>
                <th scope="col">Kaina skambučių</th>
                <th scope="col">Kaina gb</th>

            </tr>
            </thead>
            <tbody>



            @if(count($plans))
               @foreach($plans as $plan)
                   @if(count($plan['plans']))
                       @for($i = 0; $i < count($plan['plans']); $i++)
                <tr>

                    <th>{{ $plan['plans'][$i]->id}}</th>
                    <th>{{ $plan->name }}</th>
                    <th>{{ $plan['plans'][$i]->plan_name }}</th>
                    <th>{{ $plan['plans'][$i]->price }} eur</th>
                    <th>{{ $plan['plans'][$i]['specs']->free_sms }} vnt</th>
                    <th>{{ $plan['plans'][$i]['specs']->free_calls }} mins</th>
                    <th>{{ $plan['plans'][$i]['specs']->free_gb }} GB</th>
                    <th>{{ $plan['plans'][$i]['fees']->price_sms }} vnt</th>
                    <th>{{ $plan['plans'][$i]['fees']->price_calls }} mins</th>
                    <th>{{ $plan['plans'][$i]['fees']->price_gb }} GB</th>

                </tr>
                       @endfor
                    @endif
                @endforeach
            @else
                <tr>
                    <th scope="row">ner</th>

                </tr>
            @endif

            </tbody>
        </table>

    </main>

@endsection