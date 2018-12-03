<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Geinin;

class GeininController extends Controller
{
    public function index() {
        $geinins = Geinin::all();
        return view('geinin.index', ['geinins' => $geinins]);
    }

    public function show(Request $request, $id) {
        $geinin = Geinin::find($id);
        return view('geinin.show', ['geinin' => $geinin]);
    }
}
