@extends('layouts.home')
@section('content')

{{-- EDIT USER --}}
    <div class="container">
        <form action="{{ route('update', $user->id) }}" method="POST">
            <div class="row ">
                <div class="col-8">
                    <h1>Edit User:</h1>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Date of birth:</label>
                        <input type="date" class="form-control" name="date_of_birth" value="{{ $user->date_of_birth }}">
                    </div>
                    <div class="mb-3">
                        <label for="license_date" class="form-label">License date:</label>
                        <input type="date" class="form-control" name="license_date" value="{{ $user->license_date }}">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                @csrf
        </form>
    </div>
@endsection
