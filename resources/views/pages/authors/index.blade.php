<x-guest-layout>

    <section class="container pt-16 mx-auto mb-32">

        {{-- Header --}}
        <header class="flex flex-col py-8 mt-8 mb-12 space-y-6 text-center">
            <h2 class="font-serif text-5xl font-bold">Authors</h2>
            <hr class="self-center w-40 border-b-4 border-theme-blue-200">
        </header>

        <div class="gap-8 my-16 space-y-4 sm:grid sm:grid-cols-2 lg:grid-cols-4 sm:space-y-0">
            @foreach($authors as $author)
            <div class="transition duration-500 transform bg-white shadow-lg hover:shadow-xl hover:scale-105" data-aos="fade-up">
                <a href="{{ route('authors.show', $author) }}">

                    {{-- Profile Image --}}
                    <img class="w-full" src="{{ asset($author->profile_photo_url) }}" />

                    <div class="px-4 py-4 space-y-4">
                        <h1 class="font-serif text-2xl font-bold font-gray-700">
                            {{ $author->name() }}
                        </h1>

                        <p class="text-sm tracking-normal">
                            {{ $author->bioProfileExcerpt() }}
                        </p>

                        <div class="flex pt-8 space-x-4">

                            @if(!empty($author->facebookProfile()))
                            <a href="{{ $author->facebookProfile() }}" target="_blank">
                                <x-fab-facebook-f class="h-4 text-theme-blue-200" />
                            </a>
                            @endif

                            @if(!empty($author->twitterProfile()))
                            <a href="{{ $author->twitterProfile() }}" target="_blank">
                                <x-fab-twitter class="h-4 text-theme-blue-200" />
                            </a>
                            @endif

                            @if(!empty($author->instagramProfile()))
                            <a href="{{ $author->instagramProfile() }}" target="_blank">
                                <x-fab-instagram-square class="h-4 text-theme-blue-200" />
                            </a>
                            @endif

                            @if(!empty($author->linkedInProfile()))
                            <a href="{{ $author->linkedInProfile() }}" target="_blank">
                                <x-fab-linkedin-in class="h-4 text-theme-blue-200" />
                            </a>
                            @endif

                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>

    </section>

</x-guest-layout>
