<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head />
</head>

<body class="relative font-sans antialiased">
    {{-- Main Nav --}}
    <x-partials.nav />

    <!-- Page Heading -->
    @isset($header))
    <header class="relative overlay hero-header">
        <div class="container flex items-center justify-between h-full pt-16 mx-auto">
            <div class="flex-1 space-y-5">

                @isset($title)
                <h2 class="font-serif font-bold leading-tight text-gray-900 text-8xl" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500">
                    {{ $title }}
                </h2>
                @endisset

                {{-- Subtitle --}}
                @isset($sub)
                <div class="max-w-xl" data-aos="fade-in" data-aos-delay="500" data-aos-duration="500">
                    {{ $sub }}
                </div>
                @endisset
            </div>

            {{-- Image --}}
            <div class="flex-1" data-aos="fade-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500">
                @isset($image)
                {{ $image }}
                @endisset
            </div>
        </div>
        <div class="curve curve-bottom"></div>
    </header>
    @endisset

    <div class="font-sans antialiased">
        @auth
        @if(auth()->user()->onGenericTrial())
        <div class="pt-16">
            <div class="p-2 bg-green-500">
                <h2 class="container mx-auto text-white">
                    You are currently on a free trial that will end in
                    {{ now()->diffInDays(auth()->user()->trial_ends_at) }} day(s)
                    @if(!request()->routeIs('membership'))
                    You can subscribe <a href="{{ route('membership') }}">here</a>
                    @endif
                </h2>
            </div>
        </div>
        @endif
        @endauth
        {{ $slot }}
    </div>

    <x-partials.footer />


    {{-- Blade UI Kit --}}
    @bukScripts(true)

    {{-- Livewire --}}
    <livewire:scripts />

    @stack('scripts')
</body>
</html>
