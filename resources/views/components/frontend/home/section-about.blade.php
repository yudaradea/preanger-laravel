<section id="about" {{ $attributes->merge(['class' => 'relative']) }}>
    <div class="container py-10 md:py-14">
        <x-frontend.section-title>
            <x-slot name="title">About Us</x-slot>
            <x-slot name="subtitle">Lorem ipsum dolor sit amet consectetur.</x-slot>
        </x-frontend.section-title>

        <div class="pt-12 md:pt-20">
            <div class="grid flex-col-reverse gap-10 md:grid-cols-2 xl:gap-20 md:items-center">
                <div class="order-2">
                    <h1
                        class="block text-2xl font-bold leading-snug text-gray-800 md:text-start lg:text-3xl xl:text-4xl lg:leading-tight md:leading-tight xl:leading-tight 2xl:leading-tight dark:text-white"
                    >
                        Preanger institute is Lorem.
                    </h1>
                    <div
                        class="mt-4 text-sm leading-relaxed text-justify text-gray-500 dark:text-neutral-400 lg:text-start"
                    >
                        <p class="mb-2">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque quis repellendus obcaecati
                            natus quae totam blanditiis facere provident enim eveniet earum consectetur similique
                            perspiciatis, quibusdam eligendi quisquam. Praesentium sequi alias maiores laborum.
                        </p>

                        <p>
                            quis quibusdam est dignissimos, exercitationem voluptatum ducimus saepe iusto laudantium at
                            reiciendis dolorem ea eos! Fugit illo consequuntur dolorem accusantium voluptatem similique
                            est, commodi tempore voluptates doloremque quibusdam!
                        </p>
                    </div>

                    <!-- Buttons -->
                    <div class="grid w-full gap-3 mt-8 lg:mt-10 md:inline-flex">
                        <x-frontend.button href="{{ route('about') }}" wire:navigate>View More</x-frontend.button>
                    </div>
                    <!-- End Buttons -->
                </div>

                <!-- End Col -->

                <div class="flex justify-start order-1">
                    <div class="relative w-full me-4 2xl:w-4/5">
                        <img
                            class="w-full h-[350px] md:h-[450px] xl:h-[550px] 2xl:h-[600px] rounded-3xl object-cover relative z-10"
                            src="{{ asset('assets/img/team-2.jpg') }}"
                            alt="Image Hero"
                        />
                        <div
                            class="absolute inset-0 mt-4 -mb-4 bg-gradient-to-tl from-blue-500 size-full rounded-3xl ms-4 -me-4 lg:mt-6 lg:-mb-6 lg:ms-6 lg:-me-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0"
                        ></div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
        </div>
    </div>

    <x-frontend.home.why-us />
</section>
