@foreach ($comments as $comment)

@php
$depth = ($comment->depth * 8)
@endphp

<div class="grid grid-cols-12 space-x-2 shadow bg-white
@if($comment->depth > 0 )ml-{{ $depth }}@endif">

    {{-- Avatar --}}
    <div class="flex items-center justify-center col-span-1 py-8 max-h-28">
        <x-user.avatar :user="$comment->author()" />
    </div>

    {{-- Comment Body --}}
    <div class="relative flex flex-col col-span-11 py-4 space-y-2">
        <h1 class="font-bold uppercase text-bs">
            {{ $comment->author()->name() }}
        </h1>
        <p class="text-base text-gray-600">
            {{ $comment->body() }}
        </p>

        {{-- Reply --}}
        <div class="">
            @if(!$comment->depth())
            <x-posts.reply :comment="$comment" :post="$post" :loop="$loop->depth" />
            @endif
        </div>

    </div>
</div>

@if($comment->replies())
<x-posts.replies :comments="$comment->replies()" :post=$post />
@endif

@endforeach
