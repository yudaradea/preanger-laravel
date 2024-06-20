<section id="hero" {{ $attributes }}>
    <div class="container py-12 md:py-20">
        <div class="grid flex-col-reverse gap-10 md:grid-cols-2 md:gap-8 xl:gap-20 md:items-center">
            <div class="order-2 md:order-1">
                <h1
                    class="block text-3xl font-bold leading-snug text-center text-gray-800 md:text-start lg:text-4xl xl:text-5xl 2xl:text-6xl lg:leading-tight md:leading-tight xl:leading-tight 2xl:leading-tight dark:text-white"
                >
                    Building Bridges,
                    <br />
                    changing the world
                </h1>
                <p class="mt-4 text-justify text-gray-800 xl:text-lg dark:text-neutral-400 lg:text-start">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis sapiente magni enim,
                    architecto dignissimos asperiores facilis ex iste delectus.
                </p>

                <!-- Buttons -->
                <div class="grid w-full gap-3 mt-8 md:flex">
                    <x-frontend.button href="#about">Get Started</x-frontend.button>
                </div>
                <!-- End Buttons -->
            </div>
            <!-- End Col -->

            <div class="flex justify-end order-1 md:order-2">
                <div class="relative w-full ms-4 2xl:w-4/5">
                    <img
                        class="w-full h-[350px] md:h-[400px] xl:h-[550px] 2xl:h-[600px] rounded-3xl object-cover relative z-[1]"
                        src="{{ asset('assets/img/hero-img.jpg') }}"
                        alt="Image Hero"
                    />
                    <div
                        class="absolute inset-0 mt-4 -mb-4 bg-gradient-to-tr from-blue-500 size-full rounded-3xl me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0"
                    ></div>
                </div>
            </div>
            <!-- End Col -->
        </div>
    </div>
</section>
