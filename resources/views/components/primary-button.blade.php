<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-center rounded-xl bg-red-700 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50']) }}>
    {{ $slot }}
</button>

