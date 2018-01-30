@extends('layout')

@section('content')

    <main role="main" class="container">

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tiekėjas</th>
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
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>


            @if(count($plans))
               @foreach(json_decode($plans, true) as $plan =>$p)

                <tr>
                    <th>{{ $p->id }}</th>
                    <th>{{ $p->name }}</th>


                </tr>

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