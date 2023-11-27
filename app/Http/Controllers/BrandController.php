<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('practice2.brands.index', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('practice2.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newBrand = $request->validate([
            'brand' => 'bail|required|string|max:30|unique:brands,brand',
            'owner' => 'bail|required|string|max:50',
        ]);

        Brand::create($newBrand);

        return redirect()->route('practice2.brands.index')->with('success', 'The brand are created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('practice2.brands.show', ['brand' => $brand]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('practice2.brands.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $newBrand = $request->validate([
            'brand' => 'bail|required|string|max:30|unique:brands,brand',
            'owner' => 'bail|required|string|max:50',
        ]);

        $brand->update($newBrand);

        return redirect()->route('practice2.brands.index')->with('success', 'The brand are updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        if ($brand->trashed()) {
            $brand->forceDelete();
            return redirect()->route('practice2.brands.trash')->with('success', 'The brand are deleted permanent');
        }

        $brand->delete();
        return redirect()->route('practice2.brands.index')->with('success', 'The brand are moved to trash');
    }

    public function trash()
    {
        $trashedBrands = Brand::onlyTrashed();
        return view('practice2.brands.trash', ['brands' => $trashedBrands]);
    }

    public function restore(Brand $brand)
    {
        $brand->restore();
        return redirect()->route('practice2.brands.trash')->with('success', 'The brand are restored');
    }
}
