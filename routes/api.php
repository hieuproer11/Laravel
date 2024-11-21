<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CatController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/testapi', function (){
   return 'test API';
});

//Route::get('/cats/{id}',[CatController::class,'show']);
//Route::get('/cats',[CatController::class,'index']);
Route::apiResource('/cats',CatController::class);
