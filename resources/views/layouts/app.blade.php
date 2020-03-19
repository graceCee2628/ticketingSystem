<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials._head')
<body>
    <div id="app">
        <!-- NAV BAR -->
         @include('partials._navigation')

        <main class="py-4 container-fluid">
            @yield('content')
        </main>
    </div>
</body>
</html>
