<aside class="min-h-screen col-span-1 px-8 shadow">
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

        @unlesswriter
        {{-- Users --}}
        <div>
            <x-sidenav.title>
                {{ __('Users') }}
            </x-sidenav.title>

            <div>
                <x-sidenav.link href="{{ route('admin.users.index') }}" :active="request()->routeIs('admin.users.index')">
                    <x-zondicon-user-group class="w-3 text-theme-blue-100" />
                    <span>{{ __('index') }}</span>
                </x-sidenav.link>
            </div>

            <div>
                <x-sidenav.link href="{{ route('admin.posts.create') }}" :active="request()->routeIs('admin.posts.create')">
                    <x-zondicon-compose class="w-3 text-theme-blue-100" />
                    <span>{{ __('Create') }}</span>
                </x-sidenav.link>
            </div>
        </div>

        {{-- Writer --}}
        <div>
            <x-sidenav.title>
                {{ __('Writers') }}
            </x-sidenav.title>

            <div>
                <x-sidenav.link href="{{ route('admin.writers.index') }}" :active="request()->routeIs('admin.writers.index')">
                    <x-zondicon-user-group class="w-3 text-theme-blue-100" />
                    <span>{{ __('index') }}</span>
                </x-sidenav.link>
            </div>

            <div>
                <x-sidenav.link href="{{ route('admin.posts.create') }}" :active="request()->routeIs('admin.posts.create')">
                    <x-zondicon-compose class="w-3 text-theme-blue-100" />
                    <span>{{ __('Create') }}</span>
                </x-sidenav.link>
            </div>
        </div>
        @endunless

        {{-- Post --}}
        <div>
            <x-sidenav.title>
                {{ __('Post') }}
            </x-sidenav.title>
            <div>
                @writer
                <x-sidenav.link href="{{ route('admin.posts.writer') }}" :active="request()->routeIs('admin.posts.writer')">
                    <x-zondicon-chat-bubble-dots class="w-3 text-theme-blue-100" />
                    <span>{{ __('index') }}</span>
                </x-sidenav.link>
                @else
                <x-sidenav.link href="{{ route('admin.posts.index') }}" :active="request()->routeIs('admin.posts.index')">
                    <x-zondicon-chat-bubble-dots class="w-3 text-theme-blue-100" />
                    <span>{{ __('index') }}</span>
                </x-sidenav.link>
                @endwriter
            </div>

            <div>
                <x-sidenav.link href="{{ route('admin.posts.create') }}" :active="request()->routeIs('admin.posts.create')">
                    <x-zondicon-compose class="w-3 text-theme-blue-100" />
                    <span>{{ __('Create') }}</span>
                </x-sidenav.link>
            </div>
        </div>

        @unlesswriter
        {{-- Tag --}}
        <div>
            <x-sidenav.title>
                {{ __('Tag') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('admin.tags.index') }}" :active="request()->routeIs('admin.tags.index')">
                    <x-zondicon-tag class="w-3 text-theme-blue-100" />
                    <span>{{ __('index') }}</span>
                </x-sidenav.link>
            </div>

            <div>
                <x-sidenav.link href="{{ route('admin.tags.create') }}" :active="request()->routeIs('admin.tags.create')">
                    <x-zondicon-compose class="w-3 text-theme-blue-100" />
                    <span>{{ __('Create') }}</span>
                </x-sidenav.link>
            </div>
        </div>
        @endunless

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
