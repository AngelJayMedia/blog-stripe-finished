@php
$classes = 'inline-flex items-center px-4 py-2 bg-theme-blue-100 border border-transparent rounded font-semibold text-xs text-white uppercase tracking-widest hover:bg-theme-blue-200 active:bg-theme-blue-300 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
