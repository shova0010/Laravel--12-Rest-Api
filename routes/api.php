<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::get('testing',function(){
//     return 'this is a text api';
// });

Route::post('add-product',[ProductsController::class,'adding']);
