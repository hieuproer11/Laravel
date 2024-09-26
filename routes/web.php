<?php

use Illuminate\Support\Facades\Route;
use App\Models\cat;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function (){
    //Aller chercher les donnees dans le modele
    $username = 'Zab';
    $password = "Zab123123";
    return view('home', compact('username', 'password'));
    //Envoyer les donnees a la vue
    //return view('home', [
      //'user' =>  $username,
        //'pw' => $password
    //]);
});

Route::get('/bonjour/{username1}',function($username1){
    return view('bonjour', compact('username1'));
});

Route::get('/plus/{nombre1}/{nombre2}',function($nombre1, $nombre2){
    $res = $nombre1 + $nombre2;
    return view('plus', compact('nombre1', 'nombre2', 'res'));
});

Route::get('/cats', function(){
    $cats = cat::all();
   return view('index', compact('cats'));
});


Route::get('/cats/create', function (){
    return view('create');
});

Route::get('/cats/{id}', function($id){
    $cat = cat::find($id);
    return view('show', compact('cat'));
});

// store

Route::post('/cats', function (){
    $validated = request() -> validate([
        'name' => 'required',
        'price' => 'integer',
        'description' => 'required',
        'image' => '',
        'birth_date' => 'required'
    ]);
    //dd($validated['name']);
    $c = new cat;
    $c -> name = request('name');
    $c -> price = request('price');
    $c -> description = request('description');
    $c -> image = request('image');
    $c -> birth_date = request('birth_date');
    $c -> save();
    return redirect('/cats/'.$c->id);
});





