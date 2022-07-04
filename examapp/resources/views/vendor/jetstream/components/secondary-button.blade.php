<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center  mr-2 px-4 py-2  border border-gray-300 rounded-md font-normal text-xs text-gray-700  tracking-widest  hover:text-gray-700   active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
