<aside class="col-span-1 space-y-8" data-aos="fade-left" data-aos-duration="500">

    {{-- About Author --}}
    <div class="p-6 space-y-8 border border-gray-200">
        <h2 class="relative font-serif text-2xl font-bold text-center">
            <span class="side-title">
                About Author
            </span>
        </h2>
        <div class="">
            <img src="{{ asset($author->profile_photo_url) }}" alt="Author Four">
        </div>

        <div class="">
            <p class="text-sm tracking-wide text-gray-700">
                {{ $author->bioProfile() }}
            </p>
        </div>

        {{-- Stats --}}
        <div class="">
            <span class="px-4 py-1 text-white bg-gray-800">
                {{ $author->posts()->count() }} Post[s]
            </span>
        </div>

        {{-- Socials --}}
        <div class="flex space-x-4">
            <x-social.profile :author="$author" />
        </div>

        {{-- Button --}}
        <a class="block" href="{{ route('authors.show', $author) }}">
            View Profile
        </a>
    </div>

    {{-- Popular Posts --}}
    <div class="p-6 space-y-8 border border-gray-200">
        <h2 class="relative font-serif text-2xl font-bold text-center">
            <span class="side-title">
                Popular Posts
            </span>
        </h2>
        <div class="flex flex-col space-y-8">

            {{-- Single Trending --}}
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <img class="object-cover" src="{{ asset('img/stock/stock-one.jpg') }}" alt="Stock One">
                </div>
                <div class="col-span-2">
                    <h2 class="font-serif">Best paint schema to use for walls</h2>
                </div>
            </div>

            {{-- Single Trending --}}
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <img class="object-cover" src="{{ asset('img/stock/stock-two.jpg') }}" alt="Stock One">
                </div>
                <div class="col-span-2">
                    <h2 class="font-serif">Best paint schema to use for walls</h2>
                </div>
            </div>

            {{-- Single Trending --}}
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <img class="object-cover" src="{{ asset('img/stock/stock-three.jpg') }}" alt="Stock One">
                </div>
                <div class="col-span-2">
                    <h2 class="font-serif">Best paint schema to use for walls</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- Tags --}}
    <div class="p-6 space-y-8 border border-gray-200">
        <h2 class="relative font-serif text-2xl font-bold text-center">
            <span class="side-title">
                Tags
            </span>
        </h2>

        <div class="flex flex-wrap gap-3">
            <x-buttons.default>
                Outdoors
            </x-buttons.default>
            <x-buttons.default>
                Health
            </x-buttons.default>
            <x-buttons.default>
                Environment
            </x-buttons.default>
            <x-buttons.default>
                Fitness
            </x-buttons.default>
            <x-buttons.default>
                Family
            </x-buttons.default>
            <x-buttons.default>
                Decor
            </x-buttons.default>
            <x-buttons.default>
                Beauty
            </x-buttons.default>
            <x-buttons.default>
                DIY
            </x-buttons.default>
        </div>
    </div>
</aside>
