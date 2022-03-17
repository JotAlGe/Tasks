    @include('partials.head')
    </head>
    <body>
        <header>
            <h1 class="h1 text-center text-secondary mb-4">
                @yield('head', 'Home')
            </h1>
        </header>
        @yield('content')

        {{-- livewire --}}
        @livewireScripts
    </body>
</html>
