@extends('layout')

@section('content')




    <div class="container">
        <h1 class="text-center page-header">Geriausias planas:</h1>
        <p></p>
            @foreach($plans as $plan)
                @if(count($plan['plans']))
                    @for($i = 0; $i < count($plan['plans']); $i++)

                        @if($bestPlan ==  $plan['plans'][$i]->id)
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list-group">
                                    <li class="list-group-item active text-center">Informacija</li>
                                    <li class="list-group-item"><strong>Operatorius: </strong> {{ $plan->name }}</li>
                                    <li class="list-group-item"><strong>Planas: </strong> {{ $plan['plans'][$i]->plan_name }}</li>
                                    <li class="list-group-item"><strong>Kaina: </strong> {{ $plan['plans'][$i]->price }} eur</li>

                                </ul>
                            </div>

                            <div class="col-md-4">
                                <ul class="list-group">
                                    <li class="list-group-item active text-center">Specifikacija</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['specs']->free_sms }} sms</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['specs']->free_calls }} mins</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['specs']->free_gb }} GB</li>
                                </ul>
                            </div>


                            <div class="col-md-4">
                                <ul class="list-group">
                                    <li class="list-group-item active text-center">Mokesčiai</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['fees']->price_sms }} sms / eur</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['fees']->price_calls }} min / eur</li>
                                    <li class="list-group-item">{{ $plan['plans'][$i]['fees']->price_gb }} GB /eur </li>
                                </ul>
                            </div>
                            </div>
                    <p></p>
                     @if($max_price > $plan['plans'][$i]->price )
                         <h1 class="page-header text-center">Valio nepermokėsit! O sutaupysite: {{ $max_price - $plan['plans'][$i]->price  }}</h1>
                         @else
                            <h1 class="page-header text-center">Jums teks mokėti: {{ $plan['plans'][$i]->price - $max_price }} eurais daugiau.</h1>
                            <h3 class="text-muted text-center">Arba sumažinkite savo norimo plano kiekius</h3>
                         @endif

    @endif
                    @endfor
                @endif
            @endforeach


    </div>


@endsection