<?php

namespace App\Http\Controllers;

use App\Models\cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index(){
        $cats = cat::all();
        return view('index', compact('cats'));
    }

    public function show(cat $cat){
        return view('show', compact('cat'));
    }
    public function create(){
        return view('create');
    }
    public function store(){
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
    }

    public function edit(cat $cat){
        return view('edit',compact('cat'));
    }
    public function update(cat $cat){
        $validated = request()->validate([
            'name' => 'required',
            'price' => 'integer',
            'description' => 'required',
            'image' => '',
            'birth_date' => 'required'
        ]);
        $cat->name = request('name');
        $cat->price = request('price');
        $cat->description = request('description');
        $cat->image = request('image');
        $cat->birth_date = request('birth_date');
        $cat->save();
        return redirect('/cats/' . $cat->id);
    }

    public function delete(cat $cat){

        $cat->delete();
        return redirect('/cats');
    }
}
