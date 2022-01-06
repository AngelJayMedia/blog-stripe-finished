@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-theme-blue-200 focus:ring focus:ring-theme-blue-100 focus:ring-opacity-50 rounded shadow-sm']) !!}>
