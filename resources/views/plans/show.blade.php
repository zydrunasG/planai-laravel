@extends('layout')

@section('content')




    <div class="container">
        <h1 class="text-center page-header">Geriausias planas:</h1>
            @foreach($plans as $plan)
                @if(count($plan['plans']))
                    @for($i = 0; $i < count($plan['plans']); $i++)

                        @if($bestPlan ==  $plan['plans'][$i]->id)
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list-group">
                                    <li class="list-group-item active">Informacija</li>
                                    <li class="list-group-item"><strong>Operatorius: </strong> {{ $plan->name }}</li>
                                    <li class="list-group-item"><strong>Planas: </strong> {{ $plan['plans'][$i]->plan_name }}</li>
                                    <li class="list-group-item"><strong>Kaina: </strong> {{ $plan['plans'][$i]->price }} eur</li>

                                </ul>
                            </div>

                            <div class="col-md-4">
                                <ul class="list-group">
                                    <li class="list-group-item active">Specifikacija</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['specs']->free_sms }} sms</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['specs']->free_calls }} mins</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['specs']->free_gb }} GB</li>
                                </ul>
                            </div>


                            <div class="col-md-4">
                                <ul class="list-group">
                                    <li class="list-group-item active">Mokesčiai</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['fees']->price_sms }} sms / eur</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['fees']->price_calls }} min / eur</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['fees']->price_gb }} GB /eur </li>
                                </ul>
                            </div>
                            </div>
                        </div>


    @endif
                    @endfor
                @endif
            @endforeach


@endsection