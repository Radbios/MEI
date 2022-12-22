<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clientes = Client::paginate(7);

        return view('client.index', compact('clientes'));
    }

    public function store(Request $request){
        $endereco = Address::create([
            'city' => $request['city'],
            'neighborhood' => $request['neighborhood'],
            'street' => $request['street'],
            'number' => $request['number'],
            'cep' => $request['cep'],
        ]); 
        Client::create([
            'name' => $request['name'],
            'phoneNumber' => $request['phoneNumber'],
            'email' => $request['email'],
            'addressId' => $endereco->id
        ]);

        return redirect()->route('clientes.index');
    }

    public function show($cliente_id){
        $cliente = Client::findOrFail($cliente_id);
        return view("client.show", compact("cliente"));
    }

    public function edit($cliente_id){
        $cliente = Client::findOrFail($cliente_id);
        return view("client.edit", compact("cliente"));
    }

    public function update(Request $request, $cliente_id){
        Client::findOrFail($cliente_id)->update([
            'name' => $request['name'],
            'phoneNumber' => $request['phoneNumber']
        ]);
        return redirect()->route('clientes.index');
    }

    public function delete($cliente_id){
        Client::findOrFail($cliente_id)->delete();
        return redirect()->route('clientes.index');
    }

    public function search(Request $request)
    {
        // dd($request->search);
        
            $clientes = Client::where('name', 'LIKE', "%{$request->search}%")
                ->orWhere('phoneNumber', 'LIKE', "%{$request->search}%")
                // ->orWhere('addressId', 'LIKE', "%{$request->search}%")
                // ->orWhere('email', 'LIKE', "%{$request->search}%")
                ->paginate(10);
        
        return view('client.index', compact('clientes'));
    }
}
