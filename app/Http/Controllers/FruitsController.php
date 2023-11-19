<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//SQL query excecution

class FruitsController extends Controller
{
    public function index()
    {

        $results = DB::transaction(function () {
            $fruits = DB::select('select * from fruit');
            $countFruits = DB::scalar('select count(id) from fruit');

            return [
                'count' => $countFruits,
                'fruits' => $fruits,
            ];
        }, 3);

        return view('fruits.index', $results);
    }

    public function show(string $id)
    {
        $fruit = DB::select('select * from fruit where id = ?', [$id]);
        return response($fruit);
    }

    public function store(Request $request)
    {
        $newFruit = [
            $request->name,
            $request->price,
            $request->stock,
        ];

        try {
            $isFruitCreated = DB::insert('insert into fruit (name, price, stock) values (?, ?, ?)', $newFruit);
        } catch (\Exception $e) {
            return response("something wrent wrong on create the fruit");
        }

        // if (!$isFruitCreated) {
        //     return response("the fruit aren't create");
        // }

        // return response("the fruit are created succesfully");

        return redirect()->route('fruits.index');
    }

    public function destroy(string $id)
    {
        $isFruitDeleted = DB::delete("delete from fruit where id = ?", [$id]);

        // if (!$isFruitDeleted) {
        //     return response("the fruit aren't deleted");
        // }

        // return response("the fruit are deleted succesfully");

        return redirect()->route('fruits.index');

    }
}
