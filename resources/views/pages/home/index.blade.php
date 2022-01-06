<x-guest-layout>

    {{-- Hero Section --}}
    <section class="relative flex h-screen overlay">
        <div class="container flex items-center justify-between w-full mx-auto">
            {{-- Text --}}
            <div class="">
                <div class="mb-4 space-y-4 font-serif font-bold text-8xl" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500">
                    <h2>Blog designed</h2>
                    <h2>To help you</h2>
                    <h2>Succeed!</h2>
                </div>
                <div class="space-y-6" data-aos="fade-in" data-aos-delay="500" data-aos-duration="500">
                    <p class="max-w-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dicta quidem consequuntur, blanditiis magni quo modi! Nam modi explicabo alias.
                    </p>
                    <x-jet-button class="mt-4">
                        {{ __('Subscribe') }}
                    </x-jet-button>
                </div>
            </div>

            {{-- Image --}}
            <div class="opacity-90" data-aos="fade-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500">
                <img class="max-w-3xl" src="{{ asset('img/bg/stripe.svg') }}" alt="Stripe">
            </div>
        </div>
        <div class="curve curve-bottom"></div>
    </section>

    {{-- Blog Posts --}}
    <section class="container mx-auto">
        <header class="flex flex-col py-8 mt-8 mb-12 space-y-6 text-center">
            <h2 class="font-serif text-5xl font-bold">Latest Post</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, nesciunt?</p>
            <hr class="self-center w-40 border-b-4 border-theme-blue-200">
        </header>

        {{-- Livewire Latest Post --}}
        <livewire:home.latest-post />

    </section>
</x-guest-layout>
