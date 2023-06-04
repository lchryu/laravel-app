<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = 'Laravel Course from Chung Hoi';
        $x = 1;
        $y = 2;
//        return view('products.index', compact('title', 'x', 'y'));
        $name = 'Hoang';
//        return view ('products.index')->with('name', $name);
        $myphone = [
            'name' => 'iphone 14',
            'year' => 2022,
            'isFavourite' => true
        ];
//        return view('products.index', compact('myphone'));
        // send directly
//        return view('products.index', [
//            'myphone' => $myphone
//        ]);
        print_r(route('products'));
        return view('products.index');
    }

    public function detail($productName, $id)
    {
        return "product's name: $productName<br> id: $id";
//        $phones = [
//            'iphone 15' => 'iphone 15',
//            'samsung' => 'sam sung',
//        ];
//        return view('products.index', [
//            'product' => $phones[$productName] ?? 'Product ' . $productName . ' not found'
//        ]);
    }

    public function about()
    {

    }

}
