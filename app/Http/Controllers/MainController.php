<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;

class MainController extends Controller {
  public function index() {
    return view('home');
  }
}
