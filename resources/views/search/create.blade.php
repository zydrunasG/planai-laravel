@extends('layout')

@section('content')


    <div class="container">
        <div class="col-md-6 offset-md-3">

            <h1 class="page-header text-center">Pasirinkite sau tinkamus plano parametrus</h1>

            @include('errors')

            <form method="POST" action="{{ url('search') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="sms">SMS</label>
                    <input type="number" min="0" class="form-control" id="sms" name="sms" required>
                </div>

                <div class="form-group">
                    <label for="calls">Skambučiai</label>
                    <input type="number" min="0" class="form-control" id="calls" name="calls" required>
                </div>

                <div class="form-group">
                    <label for="gb">Internetas, GB</label>
                    <input type="number" min="0" class="form-control" id="gb" name="gb" required>
                </div>


                <div class="form-group">
                    <label for="max_price">Max. kaina</label>
                    <input type="number" min="0" step="0.01" class="form-control" id="max_price" name="max_price" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">Ieškoti</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        document.getElementById("li-search").classList.add("active");
    </script>

@endsection

