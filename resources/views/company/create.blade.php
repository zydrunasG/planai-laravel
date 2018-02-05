@extends('layout')

@section('content')

    <div class="container">
        <div class="col-md-6 offset-md-3">

            <h1 class="page-header text-center">Naujas tinklo operatorius
            </h1>

            @include('errors')

            <form method="POST" action="{{ url('company/create') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Operatorius: </label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">Pridėti</button>
                </div>

            </form>
        </div>
    </div>


@endsection


@section('footer')
    <script>
        document.getElementById("li-company").classList.add("active");
    </script>

@endsection