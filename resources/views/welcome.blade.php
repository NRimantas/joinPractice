@extends('layouts.home')
@section('content')
    <div class="container text-center" style="z-index: 1000; color:black">
        {{-- FORM TO CREATE USER --}}
        <form action="{{ route('create') }}" method="POST">
            <div class="row ">
                <div class="col-3">
                    <h1>Create new Owner:</h1>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="first_name">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Date of birth:</label>
                        <input type="date" class="form-control" name="date_of_birth">
                    </div>
                    <div class="mb-3">
                        <label for="license_date" class="form-label">License date:</label>
                        <input type="date" class="form-control" name="license_date">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                <div class="col-1"></div>
                <div class="col-8">
                    {{-- SHOW ALL CARS LINK --}}

                    {{-- TABLE FOR READ USERS --}}
                    <table class="w-full text-md rounded mb-4">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left p-3">#</th>
                                <th class="text-left p-3">First Name</th>
                                <th class="text-left p-3">Last Name</th>
                                <th class="text-left p-3">Email</th>
                                <th class="text-left p-3">Date of birth</th>
                                <th class="text-left p-3">License date</th>
                                <th class="text-left p-3" colspan="3">Action</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- FOREACH TO GET USERS DATA --}}
                            @foreach ($users as $user)
                                <tr>
                                    <td><strong>{{ $user->id }}</strong></td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->date_of_birth }}</td>
                                    <td>{{ $user->license_date }}</td>
                                    <td>
                                        {{-- EDIT LINK TO EDIT USER --}}
                                        <a href="{{ route('edit', $user->id) }}" name="edit" class="btn btn-warning btn-sm">EDIT</a>
                                        {{-- DELETE USER WITH POST METHOD --}}
                                    </td>
                                    <td>
                                        <form action="{{ route('delete', $user->id) }}" method="POST">
                                            {{-- @method('DELETE') --}}
                                            <button type="submit" name="delete"
                                                class="btn btn-danger btn-sm">DELETE</button>
                                            @csrf
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('cars.index', $user->id) }}" name="add_car" class="btn btn-info btn-sm">CARS</i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            @csrf
        </form>
    </div>
@endsection
