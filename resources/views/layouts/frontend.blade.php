<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.head')
    </head>

    <body>
        <img class="BG" src="/img/BG.jpeg" alt="">
        <img class="BG1" src="/img/BGRight.png" alt="">
        @include('layouts.preloader')

        <div class="wrapper">

            @include('layouts.header')

            @yield('content')

            @include('layouts.footer')

        </div>

        @include('layouts.js')

        @yield('script')
    </body>

</html>
