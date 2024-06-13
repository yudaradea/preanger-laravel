<a
    {{ $attributes->merge(['class' => 'flex items-center justify-center px-4 py-3 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none shadow-md group']) }}
>
    {{ $slot }}
    <i class="text-lg mt-[3px] ti ti-arrow-right group-hover:ms-2 transition-all duration-200"></i>
</a>
