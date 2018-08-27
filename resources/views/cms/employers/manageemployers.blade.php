@extends('layouts.master')

@section('content')

@if (Auth::user()->isAdmin())
  <div id="cmspage">
    <a href="{{ route('cms.manageemployers.add') }}">Add Employer</a>

    <table>
      <tr>
        <th>Project name</th><th>Startdate</th><th>Duration</th><th>Employer</th><th>Client</th><th>Description</th>
      </tr>

      @foreach($employers as $employer)
        <tr>
          <td>
            {{$employer->name}}
          </td>
          <td>
            {{$employer->startdate}}
          </td>
          <td>
            {{$employer->duration}}
          </td>
          <td>
            {{$employer->employer}}
          </td>
          <td>
            {{$employer->client->name}}
          </td>
          <td>
            {{$employer->description}}
          </td>

          <td>
            <a href="#">Edit</a>
          </td>
          <td>
            <a href="#">Delete</a>
          </td>
        </tr>
      @endforeach
    </table>
  </div>

@else
  "WHY ARE YOU HERE?"
<?php echo Auth::user()->role() ?>
@endif

@endsection
