<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index() {
        return response()->json([
            'materials' => Material::orderBy('mtrl_name')->get()
        ]);
    }

    public function show(Material $material) {
        $material->load('transactionItems');
        return response()->json($material);
    }

    public function update(Material $material, Request $request) {
        $material->update($request->all());
        return response()->json($material);
    }

    public function destroy(Material $material) {
        $material->delete();
        return response()->json(['message'=>'Item has been deleted.']);
    }

    public function store(Request $request) {
        $request->validate([
            'barcode' => 'string|required',
            'name' => 'string|required',
            'description' => 'string|required',
            'units' => 'string|required',
            'price' => 'numeric|required',
            'quantity' => 'numeric|required',
        ]);

        $material = Material::create($request->all());
        return response()->json($material);
    }

}
