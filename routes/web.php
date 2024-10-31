<?php

use Illuminate\Support\Facades\Route;
use App\Models\cat;
use App\Http\Controllers\CatController;
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/home',function (){
    //Aller chercher les donnees dans le modele
  //  $username = 'Zab';
    //$password = "Zab123123";
    //return view('home', compact('username', 'password'));

//Envoyer les donnees a la vue
    //return view('home', [
      //'user' =>  $username,
        //'pw' => $password
    //]);
//});

//Route::get('/bonjour/{username1}',function($username1){
  //  return view('bonjour', compact('username1'));
//});

//Route::get('/plus/{nombre1}/{nombre2}',function($nombre1, $nombre2){
  //  $res = $nombre1 + $nombre2;
  //  return view('plus', compact('nombre1', 'nombre2', 'res'));
//});



//index
Route::get('/cats',[CatController::class,'index']);
//create
Route::get('/cats/create',[CatController::class,'create'] );
//show
Route::get('/cats/{cat}',[CatController::class,'show'] );
//store
Route::post('/cats',[CatController::class,'store']);
//edit
Route::get('/cats/{id}/edit',[CatController::class,'edit']);
//update
Route::patch('/cats/{id}',[CatController::class,'update']);
//destroy
Route::delete('/cats/{id}',[CatController::class,'delete']);




