@extends('layouts.home')
@section('content')
    <div class="row">
        <div class="col-2"></div>
        {{-- FORM TO EDIT CAR --}}
        <div class="col-10">
            <form action="{{ route('cars.update', ['id' => $id, 'cid' => $cars->id])}}" method="POST">
                <div class="col-3">
                    <h1>Edit Car:</h1>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Maker:</label>
                        <input type="text" class="form-control" name="maker" value="{{ $cars->maker }}">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Model:</label>
                        <input type="text" class="form-control" name="model" value="{{ $cars->model }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Color:</label>
                        <input type="text" class="form-control" name="color" value="{{ $cars->color }}">
                    </div>
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Plate Number:</label>
                        <input type="text" class="form-control" name="plate_number" value="{{ $cars->plate_number }}">
                    </div>
                    <div class="mb-3">
                        <label for="license_date" class="form-label">Release_year:</label>
                        <input type="number" min="1900" max="2099" step="1" value="2022" name = 'release_year' value="{{ $cars->release_year }}" />
                    </div>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
                @csrf
            </form>
        </div>
    </div>
@endsection
