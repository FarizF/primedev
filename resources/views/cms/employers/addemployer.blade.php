@extends('layouts.master')

@section('content')

@if (Auth::user()->isAdmin())
  <div id="cmspage">
    <form action="{{ route('cms.manageemployers.add') }}" method="post" enctype="multipart/form-data" files="true">
      @csrf
      @method('post')
      <input type="text" name="name" placeholder="Employer companyname*"/>
      <input type="text" name="directorname" placeholder="Director name"/>
      <input type="text" name="branch" placeholder="Branche/Sector"/>
      <select class="" name="addressinfo">
        <option value="" disabled selected hidden>Link Address</option>
      </select>
      <input type="file" name="image" accept=".png, .PNG, .jpg, .jpeg" multiple/>
      <input type="submit" name="addemployer" value="Add Employer">
    </form>
  </div>

@else
  "WHY ARE YOU HERE?"
<?php echo Auth::user()->role() ?>
@endif

@endsection
