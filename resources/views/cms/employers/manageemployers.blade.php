@extends('layouts.master')

@section('content')

@if (Auth::user()->isAdmin())
  <div id="cmspage">
    <a href="{{ route('cms.manageemployers.add') }}">Add Employer</a>

    <table>
      {{-- <tr>
        <th>Project name</th><th>Startdate</th><th>Duration</th><th>Employer</th><th>Client</th><th>Description</th>
      </tr> --}}

      {{-- @foreach($projects as $project)
        <tr>
          <td>
            {{$project->name}}
          </td>
          <td>
            {{$project->startdate}}
          </td>
          <td>
            {{$project->duration}}
          </td>
          <td>
            {{$project->employer}}
          </td>
          <td>
            {{$project->client->name}}
          </td>
          <td>
            {{$project->description}}
          </td>
        </tr>
      @endforeach --}}
    </table>
  </div>

@else
  "WHY ARE YOU HERE?"
<?php echo Auth::user()->role() ?>
@endif

@endsection
