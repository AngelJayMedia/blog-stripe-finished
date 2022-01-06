@props(['active'])

@php
$classes = ($active ?? false)
? 'px-2 py-1 cursor-pointer inline-flex items-center pt-1 border-b-2 border-theme-blue-100 font-medium leading-5 text-gray-900 focus:outline-none focus:border-theme-blue-300 transition'
: 'px-2 py-1 cursor-pointer inline-flex items-center pt-1 border-b-2 border-transparent font-medium leading-5 text-theme-blue-100 hover:text-theme-blue-100 hover:border-theme-blue-100 focus:outline-none focus:text-theme-blue-100 focus:border-theme-blue-100 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
