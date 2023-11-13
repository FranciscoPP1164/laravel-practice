<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Service controllers are used to quickly define a standard of routes that allow interaction with a specific resource.

class MotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'view of the motorcycles';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return 'view of form to create motorcycles';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return [
            'id' => '1',
            'plate' => $request->plate,
            'brand' => $request->brand,
            'model' => $request->model,
            'color' => $request->color,
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'view of motorcycle with id ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'view to edit the motorcycle with id ' . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return [
            'id' => $id + 1,
            'plate' => $request->plate,
            'brand' => $request->brand,
            'model' => $request->model,
            'color' => $request->color,
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'motorcycle with id ' . $id . ' are deleted';
    }
}
