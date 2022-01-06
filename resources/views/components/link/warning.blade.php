<a {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-yellow-400 border border-transparent rounded font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-500 active:bg-yellow-300 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</a>
