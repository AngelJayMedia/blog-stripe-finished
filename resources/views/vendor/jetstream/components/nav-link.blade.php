@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 border-b-2 border-theme-blue-100 font-medium leading-5 text-gray-900 focus:outline-none focus:border-theme-blue-300 transition'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-medium leading-5 text-gray-900 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
