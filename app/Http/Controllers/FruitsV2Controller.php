<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

//query builder

class FruitsV2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fruits = DB::table("fruit")->get();
        return view('fruitsv2.index', ['fruits' => $fruits]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fruitsv2.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFruit $request)
    {
        // $newFruit = $request->validate([
        //     'name' => 'bail|required|string',
        //     'price' => 'bail|required|numeric',
        //     'stock' => 'bail|required|integer',
        // ]);

        $newFruit = $request->validated();

        DB::table('fruit')->insert($newFruit);

        return redirect()->route('v2.fruits.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fruit = DB::table('fruit')->find($id);
        return view('fruitsv2.show', ['fruit' => $fruit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fruit = DB::table('fruit')->find($id);
        return view('fruitsv2.update', ['fruit' => $fruit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $newFruit = $request->validate([
        //     'name' => 'bail|required|string',
        //     'price' => 'bail|required|numeric',
        //     'stock' => 'bail|required|integer',
        // ]);

        $newFruit = $request->only(['name', 'price', 'stock']);

        $validator = Validator::make($newFruit, [
            'name' => 'bail|required|string',
            'price' => 'bail|required|numeric',
            'stock' => 'bail|required|integer',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        DB::table('fruit')->where('id', $id)->update($newFruit);

        return redirect()->route('v2.fruits.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('fruit')->where('id', $id)->delete();

        return redirect()->route('v2.fruits.index')->with('success');
    }
}
