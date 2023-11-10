<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello world';
});

Route::match(['get', 'post', 'put'], '/match', function () {
    return 'Hello world from Route::match';
});

Route::post('/users', function (Request $request) {
    return [
        'id' => '1',
        'name' => $request->name,
        'age' => $request->age,
    ];
});

Route::redirect('/redirect', '/hello');

Route::view('/home', 'welcome');

Route::get('/users/{id}', function (string $id) {
    return 'user with id ' . $id;
});

Route::get('/users/{id}/{name}', function (string $id, string $name) {
    return 'user with id ' . $id . ' with name ' . $name;
});

Route::put('/users/{id}', function (Request $request, string $id) {
    return [
        'id' => $id + 1,
        'name' => $request->name,
        'age' => $request->age,
    ];
});

Route::get('/optional/{id?}', function (string $id = '0') {
    return $id;
});

Route::get('/regular/{id}', function (string $id) {
    return $id;
})->where(['id' => '[0-9]+']);

Route::get('/regular/aux/{id}', function (string $id) {
    return $id;
})->whereNumber('id');
