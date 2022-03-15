
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Tasks')</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        @livewireStyles
    </head>
    <body>
        @yield('content')
        <h1>
            @yield('head', 'Encabezado')
        </h1>
        {{-- livewire --}}
        @livewireScripts
    </body>
</html>
