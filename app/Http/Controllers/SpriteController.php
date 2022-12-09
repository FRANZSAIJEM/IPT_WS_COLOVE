<?php

namespace App\Http\Controllers;

use App\Models\Sprite;
use Illuminate\Http\Request;

class SpriteController extends Controller
{
    public function index() {
        $sprites = Sprite::orderBy('shape_name')
            ->orderBy('first_name')->get();

        return response()->json([
            'sprites' => $sprites
        ]);
    }

    public function show(Sprite $sprites) {
        $sprites->load('materials');
        return response()->json($sprites);
    }

    public function store(Request $request) {
        $request->validate([
            'shape_name' => 'string|required',
            'size' => 'string|required',
            'type' => 'string|required',

        ]);

        $sprite = Sprite::create($request->all());

        return response()->json($sprite);
    }

    public function update(Sprite $sprite, Request $request) {
        $sprite->update($request->all());

        return response()->json($sprite);
    }

    public function destroy(Sprite $sprite) {
        $sprite->delete();
        return response()->json(['message'=>'Sprite has been deleted.']);
    }
}
