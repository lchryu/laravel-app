<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodsController extends Controller
{
    public function index() {
        //$foods = Food::all(); // select * from foods;
        $food = Food::where('name','=','sushi')
            ->firstOrFail();
//        dd($foods);
        return view('foods.index', [
            'food' => $food
        ]);
    }
    public function create() {
        // insert new food
        return view('foods.create');
    }
}
