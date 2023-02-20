<button {{ $attributes->merge(['type' => 'button', 'class' => 'text-red-600 border-2 border-red-600 inline-flex items-center justify-center px-4 py-2 rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-red-600 hover:text-white transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
