<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ConcessionaireController;
use App\Http\Controllers\FruitsController;
use App\Http\Controllers\FruitsV2Controller;
use App\Http\Controllers\MotosController;
use App\Http\Controllers\VehicleController;
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

//basic route in laravel
Route::get('/hello', function () {
    return 'Hello world';
});

//route that has several http methods available
Route::match(['get', 'post', 'put'], '/match', function () {
    return 'Hello world from Route::match';
});

//Dependency injection into the controller function resolved by the service container
Route::post('/users', function (Request $request) {
    return [
        'id' => '1',
        'name' => $request->name,
        'age' => $request->age,
    ];
});

//redirect route
Route::redirect('/redirect', '/hello');

//fast rendering of views
Route::view('/home', 'welcome');

//dynamic parameters in routes
Route::get('/users/{id}', function (string $id) {
    return 'user with id ' . $id;
});

//several dynamic parameters in the routes
Route::get('/users/{id}/{name}', function (string $id, string $name) {
    return 'user with id ' . $id . ' with name ' . $name;
});

//dependencies injection combined with dynamic parameters
Route::put('/users/{id}', function (Request $request, string $id) {
    return [
        'id' => $id + 1,
        'name' => $request->name,
        'age' => $request->age,
    ];
});

//optional dynamic parameter
Route::get('/optional/{id?}', function (string $id = '0') {
    return $id;
});

//constrained dynamic parameters with a regular expression
Route::get('/regular/{id}', function (string $id) {
    return $id;
})->where(['id' => '[0-9]+']);

//constrained dynamic parameters with a regular expression defined by a function
Route::get('/regular/aux/{id}', function (string $id) {
    return $id;
})->whereNumber('id');

//named routes
Route::get('/named/{id}', function (string $id) {
    return 'this is a named route' . $id;
})->name('named');

Route::get('/named/call', function () {
    //helper function route
    return route('named', ['id' => 1, 'name' => 'Francisco']);
});

//routes with controller
Route::get('/cars', [CarController::class, 'getAllCars']);
Route::get('/cars/{id}', [CarController::class, 'getCarById']);
Route::post('/cars', [CarController::class, 'createCar']);
Route::get('/cars/unique', CarController::class);

//this method will create all the routes necessary to interact with a specific resource
Route::resource('/motos', MotosController::class);

//the only method specify the routes that the resource method must generate
Route::resource('/v2/motos', MotosController::class)->only(['index', 'show']);

//route protected with VerifyPassword middleware
Route::get('/protected', function () {
    return 'this route is protected with VerifyPassword middleware';
})->middleware('auth.password');

//the view helper serves to render views of blade in resources folder
Route::get('/views/hello-world', function () {
    return view('hello-world', ['name' => 'Francisco', 'lastName' => 'Parra']);
});

// Route::get('/fruits', [FruitsController::class, 'index']);
// Route::post('/fruits', [FruitsController::class, 'store']);
// Route::delete('/fruits/{id}', [FruitsController::class, 'destroy']);

//route groups
Route::name('fruits.')->prefix('/fruits')->controller(FruitsController::class)->middleware([])->group(function () {
    Route::get('', 'index')->name('index')->withoutMiddleware('auth.password');
    Route::get('/{id}', 'show')->name('show');
    Route::post('', 'store')->name('store');
    Route::delete('/{id}', 'destroy')->name('destroy');
});

Route::name('v2')->resource('v2/fruits', FruitsV2Controller::class);

Route::get('/session/{name}', function (string $name) {
    session(['name' => $name]);
    session()->flash('status', 'flashed');
});

Route::get('/session', function () {
    return session()->all();
});

Route::name('practice2.')->prefix('/practice2')->group(function () {
    Route::get('/brands/trash', [BrandController::class, 'trash'])->name('brands.trash');
    Route::patch('/brands/{brand}/restore', [BrandController::class, 'restore'])->name('brands.restore');
    Route::resource('brands', BrandController::class);

    Route::get('/vehicles/trash', [VehicleController::class, 'trash'])->name('vehicles.trash');
    Route::patch('/vehicles/{vehicle}/restore', [VehicleController::class, 'restore'])->name('vehicles.restore');
    Route::resource('vehicles', VehicleController::class);

    Route::get('/concessionaires/trash', [ConcessionaireController::class, 'trash'])->name('concessionaires.trash');
    Route::patch('/concessionaires/{concessionaire}/restore', [ConcessionaireController::class, 'restore'])->name('concessionaires.restore');
    Route::resource('concessionaires', ConcessionaireController::class);
});

//fallback in case no route matches the current request
Route::fallback(function () {
    return 'the route does not exist';
});
