<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizza = [
        ['type' => 'Italian', 'base' => 'Thin crust', 'price' => 10],
        ['type' => 'Veg Supreme', 'base' => 'Cheese crust', 'price' => 20],
        ['type' => 'Margerita', 'base' => 'Garlic crust', 'price' => 30]
    ];
    return view('pizzas', ['pizza' => $pizza]);
});
