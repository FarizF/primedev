@extends('layouts.master')

@section('content')

@if (Auth::user()->isAdmin())
  <div id="cmspage">
    TEST
  </div>

@else
  "WHY ARE YOU HERE?"
<?php echo Auth::user()->role() ?>

@endif

@endsection
