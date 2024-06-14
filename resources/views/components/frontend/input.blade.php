<div>
    <div class="flex rounded-lg">
        <span
            class="inline-flex items-center px-4 text-sm text-blue-600 bg-white border border-gray-200 shadow-sm min-w-fit rounded-s-md border-e-0"
        >
            {{ $slot }}
        </span>
        <input
            {{ $attributes->merge(['class' => 'block w-full px-3 py-3 text-sm border-gray-200 shadow-sm pe-11 rounded-e-lg focus:outline-none  focus:border-gray-200 focus:ring-0']) }}
        />
    </div>
</div>
