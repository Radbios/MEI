<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $encomendas = Order::all();
        return view('order.index', compact('encomendas'));
    }

    public function store(Request $request){
        Order::create([
            'deliveryDate' => $request['deliveryDate'],
            'state' => $request['state'],
            'orderState' => $request['orderState'],
            'clientId' => $request['clientId'],
        ]);     
        return redirect()->route('materiais.index');
    }

    public function show($encomenda_id){
        $encomenda = Order::findOrFail($encomenda_id);
        return view("order.show", compact("encomenda"));
    }

    public function edit($encomenda_id){
        $encomenda = Order::findOrFail($encomenda_id);
        return view("order.edit", compact("encomenda"));
    }

    public function update(Request $request, $encomenda_id){
        Order::findOrFail($encomenda_id)->update([
            'deliveryDate' => $request['deliveryDate'],
            'state' => $request['state'],
            'orderState' => $request['orderState'],
            'clientId' => $request['clientId'],
        ]);
        return redirect()->route('materiais.index');
    }

    public function delete($encomenda_id){
        Order::findOrFail($encomenda_id)->delete();
        return redirect()->route('materiais.index');
    }
}
