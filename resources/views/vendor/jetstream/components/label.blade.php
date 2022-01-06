@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm uppercase text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
