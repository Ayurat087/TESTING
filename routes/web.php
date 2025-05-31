<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Helpers\CalculatorHelper;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'view']);

Route::post('/item', [ItemController::class, 'insert']);
Route::delete('/item/{id}', [ItemController::class, 'delete'])->name('item.destroy');

// ------------------------------
// Tambahan Route Kalkulator
// ------------------------------

Route::get('/calculator/add/{a}/{b}', function ($a, $b) {
    return response()->json(['result' => CalculatorHelper::add($a, $b)]);
});

Route::get('/calculator/subtract/{a}/{b}', function ($a, $b) {
    return response()->json(['result' => CalculatorHelper::subtract($a, $b)]);
});

Route::get('/calculator/multiply/{a}/{b}', function ($a, $b) {
    return response()->json(['result' => CalculatorHelper::perkalian($a, $b)]);
});

Route::get('/calculator/divide/{a}/{b}', function ($a, $b) {
    return response()->json(['result' => CalculatorHelper::pembagian($a, $b)]);
});

Route::get('/calculator/modulus/{a}/{b}', function ($a, $b) {
    return response()->json(['result' => CalculatorHelper::modulus($a, $b)]);
});

Route::get('/calculator/power/{a}/{b}', function ($a, $b) {
    return response()->json(['result' => CalculatorHelper::pangkat($a, $b)]);
});

Route::get('/calculator/sqrt/{a}', function ($a) {
    return response()->json(['result' => CalculatorHelper::akar($a)]);
});
