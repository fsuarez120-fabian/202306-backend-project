<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProducts(){
        return view("products.products");
    }

    public function detail(){
        return view('products.detail');
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        dd($request);

        $request->validate([
            'name'=>'required'
        ]);
    }
}
