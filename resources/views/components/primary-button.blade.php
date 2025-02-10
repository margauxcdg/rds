<button {{ $attributes->merge(['type' => 'submit',
    'class' => 'inline-flex items-center justify-center px-4 py-4 border border-transparent rounded-md font-semibold text-sm text-white tracking-widest focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
