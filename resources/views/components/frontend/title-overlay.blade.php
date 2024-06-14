<div class="mt-[1px]">
    <div class="relative mx-auto">
        <img class="h-64 lg:h-80 w-full object-cover" src="{{ asset('assets/img/overlay.jpg') }}" alt="Random image" />
        <div class="absolute inset-0 bg-blue-600 opacity-70"></div>
        <div class="absolute inset-0 flex flex-col gap-y-6 items-center justify-center">
            <h2 class="text-white text-3xl lg:text-5xl 2xl:text-6xl font-bold">{{ $title }}</h2>
            <p class="text-sm sm:text-base text-white font-semibold flex gap-2">
                <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-1">
                    <i class="ti ti-home"></i>
                    Home
                </a>
                <span>-</span>
                {{ $breadcumb }}
            </p>
        </div>
    </div>
</div>
