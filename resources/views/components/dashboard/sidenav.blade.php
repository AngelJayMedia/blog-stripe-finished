<aside class="min-h-screen col-span-1 px-8 bg-white shadow">
    <div class="py-6 space-y-7">

        {{-- Dashboard --}}
        <div>
            <x-sidenav.title>
                {{ __('Dashboard') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    <x-zondicon-user class="w-3 text-theme-blue-100" />
                    <span>{{ __('Profile') }}</span>
                </x-sidenav.link>
            </div>
        </div>

        {{-- Billing --}}
        <div>
            <x-sidenav.title>
                {{ __('Billing') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('billing') }}" :active="request()->routeIs('billing')">
                    <x-zondicon-user class="w-3 text-theme-blue-100" />
                    <span>{{ __('index') }}</span>
                </x-sidenav.link>
            </div>
        </div>

        {{-- Auth --}}
        <div>
            <x-sidenav.title>
                {{ __('Authentication') }}
            </x-sidenav.title>
            <div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-sidenav.link href="{{ route('logout') }}" onclick="event.preventDefault();                                               this.closest('form').submit();">
                        <x-heroicon-o-logout class="w-4 text-theme-blue-100" />
                        <span>{{ __('Logout') }}</span>
                    </x-sidenav.link>

                </form>

            </div>
        </div>

    </div>
</aside>
