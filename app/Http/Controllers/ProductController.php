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

        /* Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'url_image' => "No tiene"
        ]); */

        echo '<h1>Se ha guardado con exito!!!!!</h1>';
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'url_image' => "No tiene"
        ]);

        //return redirect()->route('products.index')->with('success', 'Producto actualizado con éxito');
        echo '<h1>Se ha Actualizado con exito!!!!!</h1>';
    }

    public function destroy(Product $product)
    {
        // Lógica para eliminar el producto
        $product->delete();

        //return redirect()->route('products.index')->with('success', 'Producto eliminado con éxito');
        echo '<h1>Se Elimino!!!!!</h1>';
    }
}
