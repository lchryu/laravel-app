<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodsController extends Controller
{
    public function index() {
        $foods = Food::all(); // select * from foods;
//        $food = Food::where('name','=','sushi')
//            ->firstOrFail();
//        dd($foods);
        return view('foods.index', [
            'foods' => $foods
        ]);
    }
    public function create() {
        // insert new food
        return view('foods.create');
    }
    public function store(Request $request) {
        // dd('This is store function');
//        $food = new Food();
//        $food->name = $request->input('name');
//        $food->count = $request->input('count');
//        $food->description = $request->input('description');

        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description')
        ]);

        // save to Database;
        $food->save();
        return redirect('/foods');
    }
    public function edit($id) {
//        dd($id);
        $food = Food::find($id);
//        dd($food);
        return view('foods.edit')->with('food', $food);
    }
    public function update(Request $request, $id) {
        $food = Food::where('id', $id)
                ->update([
                    'name' => $request->input('name'),
                    'count' => $request->input('count'),
                    'description' => $request->input('description')
                ]);

        return redirect('/foods');
    }
    public function destroy($id) {
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');
    }
}
