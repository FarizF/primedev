<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PortfolioController extends Controller{
  public function index() {
      $projects = Project::all();
      return view('portfolio.index', compact('projects'));
  }
}
