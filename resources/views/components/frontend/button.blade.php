<a
    {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 py-3 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none shadow-md']) }}
>
    {{ $slot }}
    <i class="text-lg mt-[1px] ti ti-arrow-right"></i>
</a>
