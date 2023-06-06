<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $name = "LCH";
        $names = array('LCH', 'Tony', 'David', 'Peter', 'John');
        return view('about', [
            'name' => $name,
            'names' => $names,
        ]);
    }
}
