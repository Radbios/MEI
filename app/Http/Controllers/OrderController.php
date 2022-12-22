<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $encomendas = Order::paginate(7);
        $produtos = Product::all();
        $clientes = Client::all();
        return view('order.index', compact('encomendas', 'produtos', 'clientes'));
    }

    public function store(Request $request){
        $encomenda = Order::create([
            'deliveryDate' => $request['deliveryDate'],
            'state' => "Em andamento",
            'orderDate' => $request['orderDate'],
            'clientId' => $request['clientId'],
            'frete' => $request['valorFrete']
        ]);

        OrderProduct::create([
            'orderId' => $encomenda->id,
            'productId' => $request['productId'],
            'qnt' => $request['quantidade']
        ]);

        return redirect()->route('encomendas.index');
    }

    public function show($encomenda_id){
        $encomenda = Order::findOrFail($encomenda_id);
        return view("order.show", compact("encomenda"));
    }

    public function edit($encomenda_id){
        $encomenda = Order::findOrFail($encomenda_id);
        $produtos = Product::all();
        $clientes = Client::all();
        return view("order.edit", compact("encomenda", 'produtos', 'clientes'));
    }

    public function update(Request $request, $encomenda_id){
        $encomenda = Order::findOrFail($encomenda_id)->update([
            'deliveryDate' => $request['deliveryDate'],
            'orderDate' => $request['orderDate'],
            'clientId' => $request['clientId'],
            'frete' => $request['valorFrete']
        ]);

        OrderProduct::findOrFail($encomenda_id)->update([
            'productId' => $request['productId'],
            'qnt' => $request['quantidade']
        ]);

        return redirect()->route('encomendas.index');
    }

    public function delete($encomenda_id){
        Order::findOrFail($encomenda_id)->delete();
        return redirect()->route('encomendas.index');
    }
}
