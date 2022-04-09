<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
        @yield('script')
    </head>
    <body>
        @include('includes.front-navbar')
            @yield('content')
        @include('includes.front-footer')
    </body>
<html>
