<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('add-product',[ProductsController::class,'adding']);
Route::put('edit-product', [ProductsController::class,'edit']);
Route::delete('delete-product/{id}', [ProductsController::class, 'delete']);
Route::get('getdata',[ProductsController::class,'getData']);
