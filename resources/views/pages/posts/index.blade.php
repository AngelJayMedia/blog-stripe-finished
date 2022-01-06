<x-guest-layout>
    <x-slot name="header">

        <x-slot name="title">
            {{ __('Decor') }}
        </x-slot>

        <x-slot name="sub">
            <div class="flex flex-col space-y-8">
                {{-- Details --}}
                <div class="flex space-x-2">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit non facere eius alias temporibus quaerat quae debitis, corrupti nesciunt porro aperiam? Ea odio error, magnam ipsum aliquid nisi facilis alias!
                    </p>
                </div>
            </div>
        </x-slot>

        <x-slot name="image">
            <img class="max-w-xl" src="{{ asset('img/tags/decor.jpg') }}" alt="Decor">
        </x-slot>
    </x-slot>

    <section class="container mx-auto">

        <header class="flex flex-col py-8 mt-8 mb-12 space-y-8 text-center">
            <h2 class="font-serif text-4xl font-bold">Latest posts</h2>
            <hr class="self-center w-40 border-b-4 border-theme-blue-200">
        </header>

        <div class="post-container">
            {{-- Single Post --}}
            <article class="flex" data-aos="fade-up">
                <a href="#" class="post-image">
                    <img class="object-cover w-full h-full" src="{{ asset('img/stock/stock-one.jpg') }}" alt="Stock One">
                </a>
                <section class="relative flex-1">
                    <div class="mt-16 space-y-8">
                        <a href="#" class="text-sm font-bold uppercase text-theme-blue-100">Tags</a>
                        <h2 class="font-serif text-5xl font-bold">
                            How to set up your living room space? Tips and Tricks
                        </h2>
                        <p class="leading-6 tracking-wide text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima, reprehenderit officia neque praesentium quo alias vel saepe earum incidunt. Ratione, laudantium voluptatum? Esse eveniet sed laborum. Id modi eius asperiores quae rem exercitationem, fugit, quasi corrupti, commodi repellat placeat neque possimus necessitatibus facere ipsa corporis doloribus fugiat! Inventore, nostrum.
                        </p>
                    </div>

                    {{-- Author --}}
                    <div class="absolute flex justify-between w-full bottom-8">
                        <div class="flex items-center space-x-4">
                            <a href="#">
                                <img class="object-cover w-12 h-12 rounded" src="{{ asset('img/authors/author-four.jpg') }}" alt="Author One">
                            </a>
                            <div class="">
                                <h3 class="text-xl font-bold">Michelle Jones</h3>
                                <span class="text-sm text-gray-600">Food & Leisure</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <x-link.primary>
                            {{ __('Read More') }}
                        </x-link.primary>

                    </div>
                </section>
            </article>

            {{-- Single Post --}}
            <article class="flex" data-aos="fade-up">
                <a href="#" class="post-image">
                    <img class="object-cover w-full h-full" src="{{ asset('img/stock/stock-two.jpg') }}" alt="Stock One">
                </a>
                <section class="relative flex-1">
                    <div class="mt-16 space-y-8">
                        <a href="#" class="text-sm font-bold uppercase text-theme-blue-100">Tags</a>
                        <h2 class="font-serif text-5xl font-bold">
                            How to set up your living room space? Tips and Tricks
                        </h2>
                        <p class="leading-6 tracking-wide text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima, reprehenderit officia neque praesentium quo alias vel saepe earum incidunt. Ratione, laudantium voluptatum? Esse eveniet sed laborum. Id modi eius asperiores quae rem exercitationem, fugit, quasi corrupti, commodi repellat placeat neque possimus necessitatibus facere ipsa corporis doloribus fugiat! Inventore, nostrum.
                        </p>
                    </div>

                    {{-- Author --}}
                    <div class="absolute flex justify-between w-full bottom-8">
                        <div class="flex items-center space-x-4">
                            <a href="#">
                                <img class="object-cover w-12 h-12 rounded" src="{{ asset('img/authors/author-four.jpg') }}" alt="Author One">
                            </a>
                            <div class="">
                                <h3 class="text-xl font-bold">Michelle Jones</h3>
                                <span class="text-sm text-gray-600">Lifestyle</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <x-link.primary>
                            {{ __('Read More') }}
                        </x-link.primary>

                    </div>
                </section>
            </article>

            {{-- Single Post --}}
            <article class="flex" data-aos="fade-up">
                <a href="#" class="post-image">
                    <img class="object-cover w-full h-full" src="{{ asset('img/stock/stock-four.jpg') }}" alt="Stock One">
                </a>
                <section class="relative flex-1">
                    <div class="mt-16 space-y-8">
                        <a href="#" class="text-sm font-bold uppercase text-theme-blue-100">Tags</a>
                        <h2 class="font-serif text-5xl font-bold">
                            How to set up your living room space? Tips and Tricks
                        </h2>
                        <p class="leading-6 tracking-wide text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima, reprehenderit officia neque praesentium quo alias vel saepe earum incidunt. Ratione, laudantium voluptatum? Esse eveniet sed laborum. Id modi eius asperiores quae rem exercitationem, fugit, quasi corrupti, commodi repellat placeat neque possimus necessitatibus facere ipsa corporis doloribus fugiat! Inventore, nostrum.
                        </p>
                    </div>

                    {{-- Author --}}
                    <div class="absolute flex justify-between w-full bottom-8">
                        <div class="flex items-center space-x-4">
                            <a href="#">
                                <img class="object-cover w-12 h-12 rounded" src="{{ asset('img/authors/author-four.jpg') }}" alt="Author One">
                            </a>
                            <div class="">
                                <h3 class="text-xl font-bold">Michelle Jones</h3>
                                <span class="text-sm text-gray-600">Food & Leisure</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <x-link.primary>
                            {{ __('Read More') }}
                        </x-link.primary>

                    </div>
                </section>
            </article>

            {{-- Single Post --}}
            <article class="flex" data-aos="fade-up">
                <a href="#" class="post-image">
                    <img class="object-cover w-full h-full" src="{{ asset('img/stock/stock-four.jpg') }}" alt="Stock One">
                </a>
                <section class="relative flex-1">
                    <div class="mt-16 space-y-8">
                        <a href="#" class="text-sm font-bold uppercase text-theme-blue-100">Tags</a>
                        <h2 class="font-serif text-5xl font-bold">
                            How to set up your living room space? Tips and Tricks
                        </h2>
                        <p class="leading-6 tracking-wide text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima, reprehenderit officia neque praesentium quo alias vel saepe earum incidunt. Ratione, laudantium voluptatum? Esse eveniet sed laborum. Id modi eius asperiores quae rem exercitationem, fugit, quasi corrupti, commodi repellat placeat neque possimus necessitatibus facere ipsa corporis doloribus fugiat! Inventore, nostrum.
                        </p>
                    </div>

                    {{-- Author --}}
                    <div class="absolute flex justify-between w-full bottom-8">
                        <div class="flex items-center space-x-4">
                            <a href="#">
                                <img class="object-cover w-12 h-12 rounded" src="{{ asset('img/authors/author-four.jpg') }}" alt="Author One">
                            </a>
                            <div class="">
                                <h3 class="text-xl font-bold">Michelle Jones</h3>
                                <span class="text-sm text-gray-600">Health</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <x-link.primary>
                            {{ __('Read More') }}
                        </x-link.primary>

                    </div>
                </section>
            </article>
        </div>


    </section>

</x-guest-layout>
