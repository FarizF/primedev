
@if (Auth::check() && Request::is('cms*'))
  @if (Auth::user()->isAdmin())
    <div id="menu">
      <a href="/cms">CMS Home</a>
      <a href={{ route('cms.manageportfolio.index') }}>Manage Portfolio</a>
      <a href="/cms/editreferences">Manage References</a>
      <a href={{ route('cms.manageemployers.index') }}>Manage Employers</a>
      <a href="/cms/editclients">Manage Clients</a>
      <a href="#">Manage Addresses</a>
      <a href="/logout">Logout</a>
    </div>
  @endif
@else
  <div id="menu">
    <a href="/">About</a>
    <a class="isDisabled" href="/portfolio">Portfolio</a>
    <a class="isDisabled" href="{{asset('/documents/Curriculum Vitae Fariz Fakkel.png')}}">Resume</a>
    <a class="isDisabled" href="#">Contact</a>
  </div>
@endif
