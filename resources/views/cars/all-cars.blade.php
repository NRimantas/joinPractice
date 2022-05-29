@extends('layouts.home')
@section('content')

<div class="container">
    {{-- ADD CAR --}}
    {{-- <a href="{{ route('cars.create') }}" name="add_car" class="btn btn-info btn-sm">ADD CAR</a> --}}
        {{-- CAR TABLE --}}

    <table class="w-full text-md rounded mb-4">
        <thead>
            <tr class="border-b">
                <th class="text-left p-3">#</th>
                <th class="text-left p-3">Maker</th>
                <th class="text-left p-3">Model</th>
                <th class="text-left p-3">Color</th>
                <th class="text-left p-3">Plate_number</th>
                <th class="text-left p-3">Release_year</th>
                <th class="text-left p-3" colspan="2">Owner</th>
                <th class="text-left p-3"></th>
            </tr>
        </thead>
        <tbody>
            {{-- FOREACH TO GET USERS DATA --}}
            @foreach ($cars as $car)
                <tr>
                    <td><strong>{{ $car->id }}</strong></td>
                    <td>{{ $car->maker }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->plate_number }}</td>
                    <td>{{ $car->release_year }}</td>
                    <td>

                            {{$car->first_name}}
                            {{$car->last_name}}


                    </td>






                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
