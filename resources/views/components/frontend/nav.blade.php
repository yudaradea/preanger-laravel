<nav
    x-data="{ scroll: false }"
    class="sticky top-0 z-20 mx-auto bg-white border-b border-gray-300"
    @scroll.window="scroll = (window.pageYOffset > 70) ? true : false"
    x-bind:class="scroll ? 'shadow-md' : ''"
>
    <div class="container flex items-center justify-between h-[60px]">
        {{-- logo --}}

        <div class="flex items-center">
            <x-backend.logo href="{{ route('home') }}" />
        </div>

        <div class="items-center hidden h-full gap-8 lg:flex">
            <x-frontend.nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                Home
            </x-frontend.nav-link>

            <x-frontend.nav-link href="{{ route('home') }}">About</x-frontend.nav-link>

            <x-frontend.nav-link href="{{ route('home') }}">Project</x-frontend.nav-link>

            <x-frontend.nav-link href="{{ route('home') }}">Blog</x-frontend.nav-link>

            <x-frontend.nav-link href="{{ route('home') }}">Contact</x-frontend.nav-link>
        </div>

        {{-- Mobile --}}
        <x-frontend.mobile-menu />
    </div>
</nav>
