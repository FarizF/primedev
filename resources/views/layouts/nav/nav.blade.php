@if (Auth::user()->isAdmin() && Request::is('cms*')) <nav id="nav" class="cms">
@else <nav id="nav">
@endif
  <div class="container">
    @if (Request::is('/') || Request::is('cms*'))<a id="logolink" href="/"><img src="{{asset('/images/logo_farizfakkel.png')}}"></a>
    @else <a id="logolink" href="/"><img src="{{asset('/images/logo_farizfakkel_black.png')}}"></a>
    @endif
      @include('layouts.nav.menucontent')
    <div class="hbbutton"><img src="{{asset('/images/hbmenuwhitesmall.png')}}"></div>
  </div>
</nav>
