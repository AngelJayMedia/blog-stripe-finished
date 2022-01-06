@isset($user)
@php
$classes = 'flex flex-col items-center text-sm text-center transition border-2 border-transparent rounded-full focus:outline-none';
@endphp

<a href="#">
    <img {{ $attributes->merge(['class' => $classes]) }} src="{{ $user->profile_photo_url }}" alt="{{ $user->name() }}">
</a>
@endisset
