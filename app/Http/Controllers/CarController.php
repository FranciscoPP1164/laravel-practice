<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Controllers are a way to abstract the logic of handling requests entered into a separate class and not in the routing code.

class CarController extends Controller
{
    public function __invoke()
    {
        return 'unique action controller';
    }

    public function getAllCars()
    {
        return 'listing all cars';
    }

    public function getCarById(string $id)
    {
        return 'car with id ' . $id;
    }

    public function createCar(Request $request)
    {
        return [
            'id' => '1',
            'plate' => $request->plate,
            'brand' => $request->brand,
            'model' => $request->model,
            'color' => $request->color,
        ];
    }
}
