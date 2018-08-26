@extends('layouts.master')

@section('content')

@if (Auth::user()->isAdmin())
  <div id="cmspage">
    <a href="{{ route('cms.manageportfolio.add') }}">Add Project</a>

    <table>
      <tr>
        <th>Project name</th><th>Startdate</th><th>Duration</th><th>Employer</th><th>Client</th><th>Description</th>
      </tr>

      @foreach($projects as $project)
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
            @if (isset($project->employer->name))
              {{$project->employer->name}}
            @endif
          </td>
          <td>
            @if (isset($project->client->name))
              {{$project->client->name}}
            @endif
          </td>
          <td>
            {{$project->description}}
          </td>
          <td>
            <a href="{{ route('cms.manageportfolio.edit', ['id' => $project->id]) }}">Edit</a>
          </td>
          <td>
            <form class="" action="{{ route('cms.manageportfolio.delete', ['id' => $project->id]) }}" method="post">
              @method('delete')
              <input type="submit" name="delete" value="Delete">
            </form>
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
