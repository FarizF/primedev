@extends('layouts.master')

@section('content')
  <div id="homephoto">
    <div class="gradientoverlay">
      <div id="intro">
        <div class="text">
          <h1>Simply solid and just perfect for you</h1>
          <p>
            A software engineering student who is passionate
            about producing clean and concise code to create digital solutions
            that fulfill any demand. Developing solutions that are ultimately of
            significance is amazingly satisfying.
          </p>
        </div>
        <div class="verticalline"></div>
        <div id="profile">
          <div id="mybigface"></div>
        </div>
      </div>
      <div class="sociallinks">
        @include('layouts.sociallinks')
      </div>
    </div>
  </div>
@endsection