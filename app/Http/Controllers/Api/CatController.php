<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat = Cat::all();
        return response()->json($cat);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=> 'required|min:5',
            'price'=> ['required','numeric'],
            'description'=> 'required|min:5',
            'birth_date'=> 'required|date',
        ]);
        if($validator->fails()){
                return response()->json([
                'success'=> false,
                'message'=> $validator->errors()
            ]);
        }
        $cat = new Cat;
        $cat-> name = $request->name;
        $cat-> price = $request->price;
        $cat-> description = $request->description;
        $cat-> birth_date = $request->birth_date;
        $cat -> save();
        return response()->json([
            'success'=> true,
            'message'=> "Your cat has been successfully added"
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cat = Cat::find($id);
        if($cat){
            return response()->json($cat);
        }
        else{
            return response() -> json([
                'success' => false,
                'message' => "Cat number: $id does not exist"
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'name'=> 'required|min:5',
            'price'=> ['required','numeric'],
            'description'=> 'required|min:5',
            'birth_date'=> 'required|date',
        ]);
        if($validator->fails()){
            return response()->json([
                'success'=> false,
                'message'=> $validator->errors()
            ]);
        }
        $cat = Cat::find($id);
        $cat-> name = $request->name;
        $cat-> price = $request->price;
        $cat-> description = $request->description;
        $cat-> birth_date = $request->birth_date;
        $cat -> save();
        return response()->json([
            'success'=> true,
            'message'=> "Your cat has been successfully modified"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = Cat::find($id);
        if($cat){
            $cat -> delete();
            return response() -> json([
                'success' => true,
                'message' => "Cat number: $id has been successfully deleted"
            ]);
        }
        else
        {
            return response() -> json([
                'success' => false,
                'message' => "Cat number: $id does not exist"
            ]);
        }

    }
}
