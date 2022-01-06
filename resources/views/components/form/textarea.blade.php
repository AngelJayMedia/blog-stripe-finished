@php
$classes = 'border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm w-full'
@endphp

<textarea {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</textarea>
