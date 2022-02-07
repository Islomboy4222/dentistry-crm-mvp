<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/ready.css">
        <link rel="stylesheet" href="/css/demo.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <div class="container-fluid">

                @yield('content')

            </div>

            {{-- <!-- Page Content -->
            <main>
                {{ $slot }}
            </main> --}}

            <footer class="footer sticky-footer bg-white" style="position:fixed bottom:0">
                <div class="container my-auto">
                  <div class="copyright text-center my-auto text-gray-900">
                    <span>Stomatologiya &copy; Website 2022</span>
                  </div>
                </div>
            </footer>

        </div>

        @stack('modals')

        @livewireScripts
    </body>
    <script src="/bootstrap/js/core/bootstrap.min.js"></script>
    <script src="/js/core/jquery.3.2.1.min.js"></script>
    <script src="/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="/js/core/popper.min.js"></script>
    <script src="/js/core/bootstrap.min.js"></script>
    <script src="/js/plugin/chartist/chartist.min.js"></script>
    <script src="/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
    <script src="/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <script src="/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
    <script src="/js/plugin/chart-circle/circles.min.js"></script>
    <script src="/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="/js/ready.min.js"></script>
    <script src="/js/modal.js"></script>
    <script src="/js/demo.js"></script>
    @yield('custom-scripts')
    @stack('scripts')
</html>
