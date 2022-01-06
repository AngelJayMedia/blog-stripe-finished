<x-guest-layout>
    @section('title', "BOLD | Blog: $post->title")

    @section('keywords')
    @foreach ($post->tags() as $tag)
    {{ $tag->name() }},
    @endforeach
    @endsection

    @section('description')
    {{ $post->title() }}
    @endsection

    @section('metaImage')
    {{ asset('storage/' . $post->image()) }}
    @endsection

    <section class="container mx-auto">
        <div class="grid grid-cols-4 gap-10 pt-24">
            @if($post->isPremium())
            @subscribed(auth()->user())
            {{-- Single Post --}}
            <article class="col-span-3" data-aos="fade-up" data-aos-duration="500">

                {{-- Cover Image --}}
                <div class=" h-96">
                    <img class="object-cover w-full h-full" src="{{ asset('storage/' . $post->image()) }}" alt="{{ $post->title() }}">
                </div>

                {{-- Content --}}
                <div class="relative flex-1">
                    <div class="mt-16 space-y-8">

                        <div class="flex space-x-2">

                            {{-- Tags --}}
                            @foreach ($post->tags() as $tag)
                            <a href="#" class="text-sm font-bold uppercase text-theme-blue-100">{{ $tag->name() }}</a>
                            @endforeach

                        </div>

                        {{-- Title --}}
                        <h2 class="font-serif text-5xl font-bold">
                            {{ $post->title() }}
                        </h2>

                        {{-- Author --}}
                        <div class="flex items-center space-x-8">
                            <div class="flex items-center space-x-4">
                                <a href="#">
                                    <img class="object-cover w-12 h-12 rounded" src="{{ asset($post->author()->profile_photo_url) }}" alt="Author One">
                                </a>
                                <div class="">
                                    <h3 class="text-xl font-bold">
                                        {{ $post->author()->name() }}
                                    </h3>
                                </div>
                            </div>

                            {{-- Date --}}
                            <span class="text-gray-600">
                                Posted: {{ $post->publishedAtDate() }}
                            </span>

                            <span class="text-gray-600">
                                {{ $post->readTime() }} minute(s) read
                            </span>
                        </div>

                        <div class="leading-6 tracking-wide text-gray-700">
                            {!! $post->body() !!}
                        </div>

                    </div>
                </div>

                <hr class="pt-1 my-12 border-t border-b">

                <div class="flex flex-col items-center mb-24 space-y-4">
                    <h2 class="font-serif font-bold capitalize">Share this post</h2>

                    {{-- Social Share --}}
                    <x-social.links :post="$post" url="{{ Request::url() }}" />

                </div>

                {{-- Comments --}}
                @if($post->isCommentable())
                <x-posts.comments :post="$post" />
                @endif
            </article>
            @else
            <div class="col-span-3" data-aos="fade-up" data-aos-duration="500">

                <div class="p-4 space-y-4 shadow">
                    <h2 class="text-2xl text-theme-blue-200">
                        This content is for premium user only
                    </h2>
                    <h2>
                        Please subscribe to view content
                    </h2>
                    <x-buttons.primary href="{{ route('membership') }}">
                        Subscribe
                    </x-buttons.primary>
                </div>
            </div>
            @endsubscribed

            @else
            <article class="col-span-3" data-aos="fade-up" data-aos-duration="500">

                {{-- Cover Image --}}
                <div class=" h-96">
                    <img class="object-cover w-full h-full" src="{{ asset('storage/' . $post->image()) }}" alt="{{ $post->title() }}">
                </div>

                {{-- Content --}}
                <div class="relative flex-1">
                    <div class="mt-16 space-y-8">

                        <div class="flex space-x-2">

                            {{-- Tags --}}
                            @foreach ($post->tags() as $tag)
                            <a href="#" class="text-sm font-bold uppercase text-theme-blue-100">{{ $tag->name() }}</a>
                            @endforeach

                        </div>

                        {{-- Title --}}
                        <h2 class="font-serif text-5xl font-bold">
                            {{ $post->title() }}
                        </h2>

                        {{-- Author --}}
                        <div class="flex items-center space-x-8">
                            <div class="flex items-center space-x-4">
                                <a href="#">
                                    <img class="object-cover w-12 h-12 rounded" src="{{ asset($post->author()->profile_photo_url) }}" alt="Author One">
                                </a>
                                <div class="flex items-center space-x-4">
                                    <h3 class="text-xl font-bold">
                                        {{ $post->author()->name() }}
                                    </h3>
                                </div>
                            </div>

                            {{-- Date --}}
                            <span class="text-gray-600">
                                Posted: {{ $post->publishedAtDate() }}
                            </span>

                            <span class="text-gray-600">
                                {{ $post->readTime() }} minute(s) read
                            </span>
                        </div>

                        <div class="leading-6 tracking-wide text-gray-700">
                            {!! $post->body() !!}
                        </div>

                    </div>
                </div>

                <hr class="pt-1 my-12 border-t border-b">

                <div class="flex flex-col items-center mb-24 space-y-4">
                    <h2 class="font-serif font-bold capitalize">Share this post</h2>

                    {{-- Social Share --}}
                    <x-social.links :post="$post" url="{{ Request::url() }}" />

                </div>

                {{-- Comments --}}
                @if($post->isCommentable())
                <x-posts.comments :post="$post" />
                @endif

            </article>
            @endif

            {{-- Side nav --}}
            <x-sidenav.post :author="$post->author()" />
        </div>
    </section>
</x-guest-layout>
