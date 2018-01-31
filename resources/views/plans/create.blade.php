@extends('layout')

@section('content')

    <div class="container">
        <div class="row">

        <div class="col-md-6 offset-md-3">
            <h1 class="page-header text-center">Pridėti naują planą</h1>


            @include('errors')

            <form method="POST" action="{{ url('/create') }}">

                {{ csrf_field() }}


                <div class="form-group">
                    <label for="company">Tiekėjas: </label>

                    <div class="input-group">
                        <select class="form-control" id="company" name="company">
                            @foreach($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach

                        </select>

                        <div class="input-group-append">
                            <a href="{{ url('/company/create') }}" class="btn btn-outline-secondary" role="button">Pridėti naują</a>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="plan_name">Planas: </label>
                    <input type="text" class="form-control" id="plan_name" name="plan_name" required>
                </div>

                <div class="form-group">
                    <label for="price">Kaina: </label>
                    <input type="number" min="0" step="0.01"  class="form-control" id="price" name="price">
                </div>


                <h2 class="page-header text-center">Nemokami kiekiai: </h2>

                <div class="form-group">
                    <label for="free_sms">SMS: </label>
                    <input type="number" min="0" class="form-control" id="free_sms" name="free_sms" required>
                </div>

                <div class="form-group">
                    <label for="free_calls">Skambučiai: </label>
                    <input type="number" min="0" class="form-control" id="free_calls" name="free_calls" required>
                </div>

                <div class="form-group">
                    <label for="free_gb">GB: </label>
                    <input type="number" min="0" class="form-control" id="free_gb" name="free_gb" required>
                </div>


                <h2 class="page-header text-center">Kaina viršijus limitą: </h2>

                <div class="form-group">
                    <label for="price_sms">SMS: </label>
                    <input type="number" min="0" step="0.01" class="form-control" id="price_sms" name="price_sms" required>
                </div>

                <div class="form-group">
                    <label for="price_calls">Skambučiai: </label>
                    <input type="number" min="0" step="0.01" class="form-control" id="price_calls" name="price_calls" required>
                </div>

                <div class="form-group">
                    <label for="price_gb">GB: </label>
                    <input type="number" min="0" step="0.01" class="form-control" id="price_gb" name="price_gb" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Pridėti</button>
                </div>
            </form>

            </div>
        </div>
    </div>
@endsection