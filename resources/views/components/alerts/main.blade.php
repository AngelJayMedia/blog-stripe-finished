@if(session()->has('success'))
<div x-data="{open: true}" x-init="setTimeout(() => { open = false }, 5000)" x-show="open" x-transition:enter="transition duration-500 transform ease-out" x-transition:start="opacity-1" x-transition:leave="transition duration-500 transform ease-in" x-transition:end="opacity-0" class="flex items-center p-2 mb-4 space-x-3 text-white bg-green-400">
    <x-zondicon-checkmark class="w-5 h-6" />
    <span>{{ session('success') }}</span>
</div>
@endif

@if(session()->has('error'))
<div x-data="{open: true}" x-init="setTimeout(() => { open = false }, 5000)" x-show="open" x-transition:enter="transition duration-500 transform ease-out" x-transition:start="opacity-1" x-transition:leave="transition duration-500 transform ease-in" x-transition:end="opacity-0" class="flex items-center p-2 mb-4 space-x-3 text-white bg-red-400">

    <x-zondicon-exclamation-outline class="w-5 h-6" />
    <span>{{ session('error') }}</span>
</div>
@endif
