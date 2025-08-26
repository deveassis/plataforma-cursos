<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primary border border-transparent hover:text-primary hover:border-primary rounded-md font-semibold text-xs text-secondary uppercase tracking-widest hover:bg-secondary focus:bg-primary active:bg-primary focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
