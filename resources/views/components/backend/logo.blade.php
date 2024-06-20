@props(['logoAttributes' => []])

<a
    {{ $attributes->merge(['class' => 'text-nowrap h-8 md:h-10']) }}
    wire:navigate
>
    <img
        src="{{ asset('assets/img/logo-preanger.png') }}"
        alt="Logo-Dark"
        {!! $attributes->merge($logoAttributes)->merge(['class' => 'w-full h-full']) !!}
    />
</a>
