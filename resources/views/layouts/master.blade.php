<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fariz Fakkel - My Profile</title>
        @include('includes.styles')
        @include('includes.scripts')
        @include('includes.fonts')
    </head>
    @if(Request::is('/'))<body id="home">
    @else <body>
    @endif
        @include('layouts.nav.nav')
        @include('layouts.nav.mobilenav')
        @yield('content')
        @include('layouts.footer')
    </body>
</html>
