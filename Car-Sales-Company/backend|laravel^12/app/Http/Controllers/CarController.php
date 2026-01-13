<?php

namespace App\Http\Controllers;

use App\Http\Resources\Car\CarIndexResource;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        $cars = Car::get();
        $cars->load('car_month_options');

        return response()->json([
            'cars' => CarIndexResource::collection($cars)
        ], 200);
    }

    public function show(Car $car) {
        return new CarIndexResource($car);
    }
}
