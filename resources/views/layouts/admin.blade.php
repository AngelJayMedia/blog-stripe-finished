<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @bukStyles(true)
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    {{-- <x-jet-banner /> --}}
    <div class="min-h-screen bg-gray-100">

        <x-dashboard.nav />

        <div class="grid grid-cols-8">

            {{-- Sidenav --}}
            @admin
            <x-dashboard.admin.sidenav />
            @endadmin

            <div class="col-span-7">
                <!-- Page Heading -->
                @if (isset($header))
                <header class="mx-6 mt-6 text-gray-600 shadow bg-theme-blue-100">
                    <div class="px-4 py-6 wrapper">
                        {{ $header }}
                    </div>
                </header>
                @endif

                {{-- Alerts --}}
                <div class="mx-6 mt-6">
                    <x-alerts.main />
                </div>

                <!-- Page Content -->
                <main class="m-6 bg-white shadow">
                    <div class="py-6">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </div>

    @stack('modals')
    @bukScripts(true)
    @livewireScripts
</body>
</html>
