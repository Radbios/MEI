<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(){
        $materiais = Material::all();
        return view('estoque.index', compact('materiais'));
    }

    public function store(Request $request){
        Material::create([
            'name' => $request['nome'],
            'fornecedor'=> $request['fornecedor'],
            'contatoFornecedor' => $request['contatoFornecedor'],
            'lote' => $request['lote'],
            'validadeLote' => $request['validadeLote'],
            'price' => $request['preco'],
            'amount' => $request['qtd'],
            'unit' => $request['unidade'],
        ]);
        return redirect()->route('estoque.index');
    }

    public function show($material_id){
        $material = Material::findOrFail($material_id);
        return view("estoque.show", compact("material"));
    }

    public function edit($material_id){
        $material = Material::findOrFail($material_id);
        return view("estoque.edit", compact("material"));
    }

    public function update(Request $request, $material_id){
        Material::findOrFail($material_id)->update([
            'name' => $request['nome'],
            'fornecedor'=> $request['fornecedor'],
            'contatoFornecedor' => $request['contatoFornecedor'],
            'lote' => $request['lote'],
            'validadeLote' => $request['validadeLote'],
            'price' => $request['preco'],
            'amount' => $request['quantidade'],
            'unit' => $request['unidade'],
        ]);
        return redirect()->route('estoque.index');
    }

    public function delete($material_id){
        Material::findOrFail($material_id)->delete();
        return redirect()->route('estoque.index');
    }
}
