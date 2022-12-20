<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(){
        $materiais = Material::all();
        return view('material.index', compact('materiais'));
    }

    public function store(Request $request){
        Material::create([
            'name' => $request['name'],
            'type' => $request['type'],
            'price' => $request['price'],
            'amount' => $request['amount'],
            'unit' => $request['unit'],
        ]);     
        return redirect()->route('materiais.index');
    }

    public function show($material_id){
        $material = Material::findOrFail($material_id);
        return view("material.show", compact("material"));
    }

    public function edit($material_id){
        $material = Material::findOrFail($material_id);
        return view("material.edit", compact("material"));
    }

    public function update(Request $request, $material_id){
        Material::findOrFail($material_id)->update([
            'name' => $request['name'],
            'type' => $request['type'],
            'price' => $request['price'],
            'amount' => $request['amount'],
            'unit' => $request['unit'],
        ]);
        return redirect()->route('materiais.index');
    }

    public function delete($material_id){
        Material::findOrFail($material_id)->delete();
        return redirect()->route('materiais.index');
    }
}