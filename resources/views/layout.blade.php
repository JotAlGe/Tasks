    @include('partials.head')
    </head>
    <body>
        <h1>
            @yield('head', 'Encabezado')
        </h1>
        @yield('content')

        {{-- livewire --}}
        @livewireScripts
    </body>
</html>
