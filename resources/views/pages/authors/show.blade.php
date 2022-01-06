<x-guest-layout>
    <x-slot name="header">
        <x-slot name="title">
            {{ $author->name() }}
        </x-slot>

        <x-slot name="sub">
            <div class="flex flex-col space-y-8">

                {{-- Bio --}}
                <div class="">
                    <p>
                        {{ $author->bioProfile() }}
                    </p>
                </div>

                {{-- Details --}}
                <div class="flex space-x-2">
                    <x-heroicon-o-pencil-alt class="w-5 h-5 text-gray-800" />
                    <span>{{ $posts->total() }} Post[s]</span>
                </div>

                {{-- Socials --}}
                <div class="flex space-x-4">
                    <x-social.profile :author="$author" />
                </div>
            </div>
        </x-slot>

        {{-- Profile Image --}}
        <x-slot name="image">
            <img class="max-w-xl" src="{{ asset($author->profile_photo_url) }}" alt="Authors">
        </x-slot>
    </x-slot>

    <section class="container mx-auto">

        <header class="flex flex-col py-8 mt-8 mb-12 space-y-8 text-center">
            <h2 class="font-serif text-4xl font-bold">
                {{ $author->name() }} latest posts
            </h2>
            <hr class="self-center w-40 border-b-4 border-theme-blue-200">
        </header>

        <div class="post-container">
            @foreach ($posts as $post)
            {{-- Single Post --}}
            <x-posts.latest :post="$post" />
            @endforeach
        </div>

        @if($posts->hasPages())
        <div class="p-4 mb-20 bg-gray-200">
            {{ $posts->links() }}
        </div>
        @endif

    </section>

</x-guest-layout>
