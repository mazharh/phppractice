<?php

namespace App\Http\Controllers;

use App\InsProduct;
use Illuminate\Http\Request;

class InsProductController extends Controller
{
    //
    public function index(){
        $products = InsProduct::all();
        return view('home.index')->with('products', $products);
    }
}
