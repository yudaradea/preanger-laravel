<section id="contact" {{ $attributes->merge(['class' => 'relative']) }}>
    <div class="container py-10 md:py-14">
        <x-frontend.section-title>
            <x-slot name="title">Contact</x-slot>
            <x-slot name="subtitle">Lorem ipsum dolor sit amet consectetur.</x-slot>
        </x-frontend.section-title>

        <div class="flex flex-col mt-6 lg:flex-row gap-y-6 lg:mt-10 lg:justify-between">
            <div
                class="lg:flex lg:flex-col px-[12px] py-6 bg-white border-t-2 border-b-2 border-blue-600 shadow-md md:px-4 space-y-7 md:space-y-8 lg:w-[40%]"
            >
                {{-- item 1 --}}
                <div class="flex items-center w-full gap-3 md:gap-4">
                    <div class="flex items-center">
                        <div
                            class="inline-flex justify-center items-center size-[48px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800"
                        >
                            <i class="text-2xl text-blue-600 ti ti-map-pin"></i>
                        </div>
                    </div>

                    <div class="grid">
                        <p class="font-bold tracking-wide">Address</p>
                        <p class="mt-1 text-sm text-slate-500">Jl. Trip Pegangsaan Timur no.52 Jakarta, indonesia</p>
                    </div>
                </div>

                {{-- item 2 --}}
                <div class="flex items-center w-full gap-3 md:gap-4">
                    <div class="flex items-center">
                        <div
                            class="inline-flex justify-center items-center size-[48px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800"
                        >
                            <i class="text-2xl text-blue-600 ti ti-brand-whatsapp"></i>
                        </div>
                    </div>

                    <div class="grid">
                        <p class="font-bold tracking-wide">Whats App</p>
                        <p class="mt-1 text-sm text-slate-500">+62 8123 4567 890</p>
                    </div>
                </div>

                {{-- item 3 --}}
                <div class="flex items-center w-full gap-3 md:gap-4">
                    <div class="flex items-center">
                        <div
                            class="inline-flex justify-center items-center size-[48px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800"
                        >
                            <i class="text-2xl text-blue-600 ti ti-mail"></i>
                        </div>
                    </div>

                    <div class="grid">
                        <p class="font-bold tracking-wide">E Mail</p>
                        <p class="mt-1 text-sm text-slate-500">support@peranger.com</p>
                    </div>
                </div>

                <iframe
                    class="w-full h-52 md:h-72"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5025055593433!2d106.83793427503751!3d-6.197236793790459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f46b29c5e473%3A0xebffbc66fc07dbaa!2sJl.%20Pegangsaan%20Timur%2C%20RT.9%2FRW.4%2C%20Cikini%2C%20Kec.%20Menteng%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1718285680781!5m2!1sen!2sid"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>

            {{-- form contact --}}
            <div
                class="lg:w-[58%] py-6 md:py-8 px-4 md:px-6 bg-white shadow-md border-t-2 border-b-2 border-blue-600 lg:flex lg:flex-col"
            >
                <h3 class="text-xl font-semibold lg:text-2xl text-slate-800">Any Questions?</h3>
                <div class="grid gap-5 mt-6 lg:mt-8 md:gap-x-6 md:gap-y-10 md:grid-cols-2">
                    <x-frontend.input type="text" placeholder="Name">
                        <i class="text-2xl ti ti-user"></i>
                    </x-frontend.input>

                    <x-frontend.input type="email" placeholder="Email">
                        <i class="text-2xl ti ti-mail"></i>
                    </x-frontend.input>

                    <x-frontend.input type="text" placeholder="Phone">
                        <i class="text-2xl ti ti-phone"></i>
                    </x-frontend.input>

                    <x-frontend.input type="email" placeholder="Subject">
                        <i class="text-2xl ti ti-book"></i>
                    </x-frontend.input>

                    <div class="grid gap-2 md:gap-3 md:col-span-2">
                        <div class="space-y-3">
                            <textarea
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-gray-200 focus:ring-0"
                                rows="6"
                                placeholder="messages"
                            ></textarea>
                        </div>
                    </div>

                    <div class="grid w-full mt-2 md:flex lg:flex-1 lg:col-span-2 lg:justify-center lg:mt-3">
                        <button
                            href=""
                            class="px-6 py-3 text-sm text-white transition-colors duration-200 bg-blue-500 rounded-lg shadow-sm hover:bg-blue-600 lg:py-4"
                        >
                            Send Message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
