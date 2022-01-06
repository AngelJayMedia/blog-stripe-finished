<x-guest-layout>

    <section class="container pt-16 mx-auto mb-32">

        {{-- Header --}}
        <header class="flex flex-col py-8 mt-8 mb-12 space-y-6 text-center">
            <h2 class="font-serif text-5xl font-bold">Membership</h2>
            <hr class="self-center w-40 border-b-4 border-theme-blue-200">
        </header>

        {{-- Alert Message --}}
        <x-alerts.main />

        <div class="grid grid-cols-3 gap-8 my-16">
            {{-- Free Plan --}}
            <div class="border border-gray-200 divide-y divide-gray-200 shadow-lg bg-gray-50">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold leading-6 text-gray-900">Free</h2>
                    <p class="mt-4 text-sm leading-normal">Awesome packages</p>
                    <p class="mt-8">
                        <span class="text-4xl font-extrabold">$0.00</span>
                    </p>
                    @auth
                    @notsubscribed($user)
                    <span class="block mt-6 text-theme-blue-100">
                        {{ __('You are current subscribed to our Free Plan') }}
                    </span>
                    @endnotsubscribed
                    @else
                    <x-jet-button class="mt-6">
                        {{ __("Sign Up") }}
                        <svg style="height: 1.25rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current">
                            <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"></path>
                        </svg>
                    </x-jet-button>
                    @endauth

                </div>
                <div class="px-6 pt-6 pb-8">
                    <h3 class="text-xs font-semibold tracking-wide uppercase">What's included
                    </h3>
                    <ul class="mt-6 space-y-4">
                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Some huge benefit
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Crazy offer
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Used Laravel 8 to make this
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Tailwind is awesome
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                AOS js library for some extra effects
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            @foreach ($plans as $plan)
            <div class="border border-gray-200 divide-y divide-gray-200 shadow-lg bg-gray-50">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold leading-6 text-gray-900">{{ $plan->name() }}</h2>
                    <p class="mt-4 text-sm leading-normal">Awesome packages</p>
                    <p class="mt-8">
                        <span class="text-4xl font-extrabold">{{ $plan->price() }}</span>
                        <span class="text-base font-medium text-gray-500">{{ $plan->abbreviation() }}</span>
                    </p>

                    @subscribedToProduct($user, $plan->stripeProductId(), $plan->stripeName())

                    @onTrial($user, $plan->stripeName())
                    {{-- Trail Message --}}
                    <h2 class="p-2 mt-4 text-white bg-green-500 rounded">
                        Your trial will end on {{ $user->trialEndsAt($plan->stripeName())->format('d F Y') }}
                    </h2>

                    @else
                    {{-- Subscription Message --}}
                    <h2 class="p-2 mt-4 text-white rounded bg-theme-blue-300">
                        You are currently subscribed to this plan
                    </h2>

                    @onGracePeriod($plan->stripeName())
                    <h2 class="p-2 mt-4 bg-blue-300 rounded">
                        Your subscription will end on {{ $user->subscription($plan->stripeName())->ends_at->format('d F Y') }}
                    </h2>

                    {{-- Resume Button --}}
                    <a href="{{ route('subscriptions.update', $plan->stripeName()) }}" class="inline-block p-2 mt-4 text-white transition-all duration-150 rounded bg-theme-blue-100 hover:bg-theme-blue-100">
                        Resume Subscription
                    </a>

                    @else
                    {{-- Cancel Button --}}
                    <a href="{{ route('subscriptions.destroy', $plan->stripeName()) }}" class="inline-block p-2 mt-4 text-white transition-all duration-150 bg-red-600 rounded hover:bg-red-500">
                        Cancel Subscription
                    </a>
                    @endonGracePeriod

                    @endonTrial
                    @else
                    <x-link.primary class="mt-4 text-xl " href="{{ route('payments', ['plan' => $plan->stripeName()]) }}">
                        Sign up
                    </x-link.primary>
                    @endsubscribedToProduct

                </div>
                <div class="px-6 pt-6 pb-8">
                    <h3 class="text-xs font-semibold tracking-wide uppercase">What's included
                    </h3>
                    <ul class="mt-6 space-y-4">
                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Some huge benefit
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Crazy offer
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Used Laravel 8 to make this
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Tailwind is awesome
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                AOS js library for some extra effects
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-guest-layout>
