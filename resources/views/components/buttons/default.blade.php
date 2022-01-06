<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-100 active:bg-gray-400 focus:outline-none focus:border-gray-100 focus:ring focus:ring-gray-100 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
