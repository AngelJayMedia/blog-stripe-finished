<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-theme-blue-200 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-theme-blue-100 active:bg-theme-blue-400 focus:outline-none focus:border-theme-blue-100 focus:ring focus:ring-theme-blue-100 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
