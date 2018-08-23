@extends('layouts.master')

@section('content')

@if (Auth::user()->isAdmin())
  <div id="cmspage">
    <form action="{{ route('cms.manageemployers.add') }}" method="post" enctype="multipart/form-data" files="true">
      @csrf
      @method('post')
      <input type="text" name="name" placeholder="Project name*"/>
      <input type="date" name="startdate" placeholder="Project startdate"/>
      <input type="text" name="duration" placeholder="Project duration"/>
      <select class="" name="employer">
        <option value="" disabled selected hidden>Select employer</option>
      </select>
      <select class="" name="client">
        <option value="" disabled selected hidden>Select client</option>
      </select>
      <textarea name="description"></textarea>
      <input type="file" name="images[]" accept=".png, .PNG, .jpg, .jpeg" multiple/>
      <input type="submit" name="addproject" value="Add Project">
    </form>
  </div>

@else
  "WHY ARE YOU HERE?"
<?php echo Auth::user()->role() ?>
@endif

@endsection
