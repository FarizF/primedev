<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Project;
use App\Image;
use App\Employer;
use Illuminate\Http\UploadedFile;

class AdminController extends Controller {
  public function index() {
    return view('cms.index');
  }


  // Portfolio
  public function indexPortfolio() {
    $projects = DB::table('projects')->get();

    return view('cms.portfolio.manageportfolio', ['projects' => $projects]);
  }

  public function addProjectGet() {
    return view('cms.portfolio.addproject');
  }

  public function addProject(Request $request) {
    $project = new Project();
    $project->name = $request->input('name');
    if ($request->input('startdate')) $project->startdate = $request->input('startdate');
    if ($request->input('duration')) $project->duration = $request->input('duration');
    if ($request->input('employer')) $project->employer_id = $request->input('employer');
    if ($request->input('client')) $project->client_id = $request->input('client');
    if ($request->input('description')) $project->description = $request->input('description');
    $project->save();

    if ($request->file('images')) {
      $images = $request->file('images');
      $iOrder = 1;

      $validator = Validator::make(
        $images, [
          'image_file.*' => 'required|mimes:jpg,jpeg,png|max:20000'
          ], [
            'image_file.*.required' => 'Please upload an image',
            'image_file.*.mimes' => 'Only jpeg and png images are allowed',
            'image_file.*.max' => 'Sorry! Maximum allowed size for an image is 20000MB',
          ]
      );

      if ($validator->fails()) {
        return $validator->errors()->getMessages();
      } else {
        foreach ($images as $image) {
          if ($image->store('images')) {
            $newImageRecord = new Image();
            $newImageRecord->hashname = $image->hashName();
            $newImageRecord->priority = $iOrder;
            $newImageRecord->project_id = $project->id;
            $newImageRecord->save();
          }
          $iOrder++;
        }
      }
    }

    return Redirect::back();
  }


  // Employers
  public function indexEmployers() {
    $employers = DB::table('employers')->get();

    return view('cms.employers.manageemployers', ['employers' => $employers]);
  }

  public function addEmployerGet() {
    return view('cms.employers.addemployer');
  }

  public function addEmployer(Request $request) {
    $employer = new Employer();
    $employer->name = $request->input('name');
    $employer->directorname = $request->input('directorname');
    $employer->branch = $request->input('branch');
    if ($request->input('addressinfo')) $employer->pi_id = $request->input('addressinfo');
    $employer->save();

    return Redirect::back();
  }
}
