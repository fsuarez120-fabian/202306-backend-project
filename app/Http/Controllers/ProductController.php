<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProducts()
    {
        $products = Product::all();
        //dd($products);
        return view("products.products", [
            'listadoProductos' => $products
        ]);
    }

    public function detail()
    {
        return view('products.detail');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        /* echo $request->name.'<br>';
        echo $request->description.'<br>';
        echo $request->price.'<br>'; */

        $newProduct = new Product();

        /* dd($newProduct); */

        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->price =  $request->price;
        $newProduct->url_image = "No tiene";

        //dd($newProduct);

        $newProduct->save();

        echo '<h1>Se ha guardado con exito!!!!!</h1>';
    }
}
