<div>
    <div class="post-container">

        {{-- Latest Post --}}
        @foreach ($posts as $post)
        <x-posts.latest :post="$post" />
        @endforeach

    </div>

    <div class="flex justify-center my-16">
        @if($posts->hasMorePages())
        <x-jet-button wire:click="loadMore">

            <span wire:loading.remove>
                Load More
            </span>

            <div wire:loading.delay>
                <div class="flex items-center justify-center space-x-4">
                    <span>Loading</span>
                    <span class="w-6 h-6 border-b-2 border-white rounded-full animate-spin"></span>
                </div>
            </div>

        </x-jet-button>
        @else
        <h2 class="p-2 font-bold text-white rounded bg-theme-blue-100">
            No more posts...
        </h2>
        @endif
    </div>

</div>
