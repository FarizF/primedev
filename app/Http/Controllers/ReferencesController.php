<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reference;

class ReferencesController extends Controller {
    public function index() {
        $references = Reference::all();
        return view('references.index', compact('references'));
    }

    public function single(Reference $reference) {
        return view('references.single', compact('reference'));
    }
}
