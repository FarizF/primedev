<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
  public function index() {
    return view('cms.index');
  }

  public function editPortfolio() {
    return view('cms.editportfolio');
  }
}
