<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferencesController extends Controller {
    public function index() {
        $references = Reference::all();
        return view('references.index', compact('references'));
    }

    public function single($id) {
        $reference = Reference::find($id);
        return view('references.single', compact('reference'));
    }
}
