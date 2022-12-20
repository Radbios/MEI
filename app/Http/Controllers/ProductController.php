<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $produtos = Product::all();
        return view('product.index', compact('produtos'));
    }

    public function store(Request $request){
        Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);     
        return redirect()->route('produtos.index');
    }

    public function show($produto_id){
        $produto = Product::findOrFail($produto_id);
        return view("product.show", compact("produto"));
    }

    public function edit($produto_id){
        $produto = Product::findOrFail($produto_id);
        return view("product.edit", compact("produto"));
    }

    public function update(Request $request, $produto_id){
        Product::findOrFail($produto_id)->update([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);
        return redirect()->route('produtos.index');
    }

    public function delete($encomenda_id){
        Product::findOrFail($encomenda_id)->delete();
        return redirect()->route('produtos.index');
    }
}
