@if (Auth::user()->isAdmin() && Request::is('cms*'))
  <div id="menu">
    <a href="/cms">CMS Home</a>
    <a href="/cms/editportfolio">Manage Portfolio</a>
    <a href="/cms/editreferences">Manage References</a>
    <a href="/logout">Logout</a>
  </div>
@else
  <div id="menu">
    <a href="/">About</a>
    <a href="/portfolio">Portfolio</a>
    <a class="isDisabled" href="{{asset('/documents/Curriculum Vitae Fariz Fakkel.png')}}">Resume</a>
    <a class="isDisabled" href="#">Contact</a>
  </div>
@endif
