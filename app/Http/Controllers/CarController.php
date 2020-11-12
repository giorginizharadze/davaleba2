<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{

  public function getAllCars(Request $request)
  {
    $cars = Car::orderBy('id', 'DESC');

    if ($request->id) {
      $cars->where('id', $request->id);
    }

    if ($request->name) {
      $cars->where('name', $request->name);
    }

    if ($request->category) {
      $cars->where('make', $request->make);
    }

    if ($request->model) {
      $Cars->where('model', '>', $request->model);
    }

    if ($request->license_number) {
      $cars->where('license_number', '<', $request->license_number);
    }

    if ($request->weight) {
      $cars->where('weight', '=', $request->weight);
    }
    
    if ($request->registration_year) {
        $cars->where('registration_year', '=', $request->registration_year);
    }

    if ($request->created_at) {
        $cars->where('created_at', '=', $request->created_at);
    }

    if ($request->updated_at) {
        $cars->where('updated_at', '=', $request->updated_at);
      }
    

    $cars = $cars->get();

    return view('cars-page')->with('cars', $cars);
  }

  public function saveCar(Request $request)
  {
    Car::create([
      'name'     => $request->name,
      'make'    => $request->make,
      'model'     => $request->model,
      'license_number'    => $request->license_number,
      'weight'     => $request->weight,
      'registration_year'     => $request->registration_year,
      'created_at'     => $request->created_at,
      'updated_at'     => $request->updated_at
    ]);

    return redirect()->route('cars.all');
  }

  public function editCars($id)
  {
    $car_to_edit = Car::where('id', $id)->firstOrFail();

    return view('edit-form')->with('car', $car_to_edit);
  }

  public function updateCar(Request $request, $id)
  {
    Car::where('id', $id)->update([
      'name'     => $request->name,
      'make'    => $request->make,
      'model'    => $request->model,
      'license_number'     => $request->license_number,
      'weight'    => $request->weight,
      'registration_year'    => $request->registration_year,
      'created_at'    => $request->created_at,
      'updated_at'    => $request->updated_at
    ]);

    return redirect()->back();
  }

  public function deleteCar(Request $request)
  {
    Car::where('id', $request->car_id)->delete();

    return redirect()->back();
  }
}
