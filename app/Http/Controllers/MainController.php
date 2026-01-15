<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function showArray()
    {
        $array = [
            ["id" => 1, "title" => "продукт 1", "price" => 500, "path" => "thre.jpg"],
            ["id" => 1, "title" => "продукт 1", "price" => 500, "path" => "for.jpg"],
        ];
        return view('array', compact("array"));
    }
}
