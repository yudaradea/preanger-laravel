<div class="flex items-center gap-3 md:gap-4 lg:hidden">
    <div x-data="{ showMenu: false }">
        <!-- Hamburger menu -->
        <div class="cursor-pointer" @click="showMenu = !showMenu">
            <i class="text-2xl ti ti-menu-deep"></i>
        </div>

        <!-- Link menu -->
        <div
            class="fixed inset-0 z-30 bg-gray-50"
            x-show="showMenu"
            x-cloak
            x-transition:enter="transition ease duration-700 transform"
            x-transition:enter-start="opacity-0 translate-x-full"
            x-transition:enter-end="opacity-100 -translate-x-0"
            x-transition:leave="transition ease duration-1000 transform"
            x-transition:leave-start="opacity-100 -translate-x-0"
            x-transition:leave-end="opacity-0 translate-x-full"
        >
            <div class="container h-full">
                <div class="flex items-center justify-end h-16">
                    <div class="cursor-pointer" @click="showMenu = !showMenu">
                        <i class="text-2xl ti ti-x"></i>
                    </div>
                </div>

                <div class="w-full h-[60vh] flex flex-col items-center justify-between mt-10">
                    <x-frontend.mobile-nav-link
                        href="{{ route('home') }}"
                        @click="showMenu = !showMenu"
                        :active="request()->routeIs('home')"
                    >
                        Home
                    </x-frontend.mobile-nav-link>

                    <x-frontend.mobile-nav-link href="{{ route('home') }}">About</x-frontend.mobile-nav-link>

                    <x-frontend.mobile-nav-link href="{{ route('home') }}">Project</x-frontend.mobile-nav-link>

                    <x-frontend.mobile-nav-link href="{{ route('home') }}">Blog</x-frontend.mobile-nav-link>

                    <x-frontend.mobile-nav-link href="{{ route('home') }}">Contact</x-frontend.mobile-nav-link>
                </div>
            </div>
        </div>
    </div>
</div>
