    @include('partials.head')
    </head>
    <body>
        <header>
            <h1 class="h2 text-center text-secondary">
                @yield('head', 'Home')
            </h1>
        </header>
        @yield('content')

        {{-- livewire --}}
        @livewireScripts
    </body>
</html>
