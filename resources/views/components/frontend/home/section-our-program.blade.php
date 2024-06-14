<section id="program" {{ $attributes->merge(['class' => 'relative']) }}>
    <div class="container py-10 md:py-14">
        <x-frontend.section-title>
            <x-slot name="title">Our Program</x-slot>
            <x-slot name="subtitle">We've helped some great companies brand, design and get to market.</x-slot>
        </x-frontend.section-title>
        <div class="mt-12 lg:mt-16">
            <!-- Grid -->
            <div class="grid gap-6 mb-10 md:grid-cols-2 lg:grid-cols-3 lg:mb-14">
                <!-- Card -->
                <a
                    class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-900 dark:border-neutral-800"
                    href="#"
                >
                    <div class="w-full h-80 lg:h-96">
                        <img
                            class="object-cover w-full h-full rounded-t-xl"
                            src="https://images.unsplash.com/photo-1668869713519-9bcbb0da7171?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=988&q=80"
                            alt="Image Description"
                        />
                    </div>
                    <div class="p-4 md:p-5">
                        <p class="inline-block px-2 py-1 mt-2 text-xs text-white bg-green-600 rounded-full">
                            Completed
                        </p>
                        <h3
                            class="mt-3 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-neutral-300 dark:group-hover:text-white"
                        >
                            Better is when everything works together
                        </h3>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a
                    class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-900 dark:border-neutral-800"
                    href="#"
                >
                    <div class="w-full h-80 lg:h-96">
                        <img
                            class="object-cover w-full h-full rounded-t-xl"
                            src="https://images.unsplash.com/photo-1668869713519-9bcbb0da7171?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=988&q=80"
                            alt="Image Description"
                        />
                    </div>
                    <div class="p-4 md:p-5">
                        <p class="inline-block px-2 py-1 mt-2 text-xs text-white bg-blue-600 rounded-full">On Going</p>
                        <h3
                            class="mt-3 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-neutral-300 dark:group-hover:text-white"
                        >
                            Better is when everything works together
                        </h3>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a
                    class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-900 dark:border-neutral-800"
                    href="#"
                >
                    <div class="w-full h-80 lg:h-96">
                        <img
                            class="object-cover w-full h-full rounded-t-xl"
                            src="https://images.unsplash.com/photo-1668869713519-9bcbb0da7171?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=988&q=80"
                            alt="Image Description"
                        />
                    </div>
                    <div class="p-4 md:p-5">
                        <p class="inline-block px-2 py-1 mt-2 text-xs text-white bg-yellow-600 rounded-full">
                            Comming Soon
                        </p>
                        <h3
                            class="mt-3 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-neutral-300 dark:group-hover:text-white"
                        >
                            Better is when everything works together
                        </h3>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Grid -->

            <!-- Card -->
            <div class="text-center">
                <div
                    class="inline-block bg-white border rounded-full shadow-sm dark:bg-neutral-900 dark:border-neutral-800"
                >
                    <div class="flex items-center px-4 py-3 gap-x-2">
                        <p class="text-gray-600 dark:text-neutral-400">Want to see more?</p>
                        <a
                            class="flex items-center font-medium text-blue-600 decoration-2 dark:text-blue-500 group"
                            href="{{ route('program') }}"
                            wire:navigate
                        >
                            <p class="hover:underline">Go here</p>
                            <i
                                class="transition-all duration-200 mt-[3px] lg:mt-1 ti ti-chevron-right ms-1 group-hover:ms-2"
                            ></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
</section>
