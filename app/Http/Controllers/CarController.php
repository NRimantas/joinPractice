<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::table('users');
        $cars = Car::join('users', 'cars.user_id', '=', 'users.id')
        ->get(['cars.*', 'users.first_name', 'users.last_name']);
        // dd($cars);

        return view('cars.all-cars', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $user = User::find($id);
        return view('cars.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([

            'maker' => 'required',
            'model' => 'required',
            'color' => 'required',
            'plate_number' => 'required',
            'release_year' => 'required',

        ]);

        $car = new Car();

        $car->maker = $request->maker;
        $car->model = $request->model;
        $car->color = $request->color;
        $car->plate_number = $request->plate_number;
        $car->release_year = $request->release_year;
        $car->user_id = $id;
        $car->save();
        $cars = Car::where('user_id', '=', $id)->get();
        return view('cars.index', ['cars' => $cars, 'id' => $id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $cars = Car::where('user_id', '=', $id)->get();
        return view('cars.index', ['cars' => $cars, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $cid)
    {
        $cars = Car::find($cid);
        return view('cars.edit', ['cars' => $cars, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $cid)
    {
        $request->validate([
            'maker' => 'required',
            'model' => 'required',
            'color' => 'required',
            'plate_number' => 'required',
            'release_year' => 'required'
        ]);
        $car = Car::find($cid);

        $car->maker = $request->maker;
        $car->model = $request->model;
        $car->color = $request->color;
        $car->plate_number = $request->plate_number;
        $car->release_year = $request->release_year;
        $car->user_id = $id;
        $car->save();
        $cars = Car::where('user_id', '=', $id)->get();
        return view('cars.index', ['cars' => $cars, 'id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $cid)
    {
        $car = Car::find($cid);
        $car->delete();

        $cars = Car::where('user_id', '=', $id)->get();
        return view('cars.index', ['cars' => $cars, 'id' => $id]);
    }
}
