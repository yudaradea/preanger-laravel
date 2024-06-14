<section id="contact" {{ $attributes->merge(['class' => 'relative']) }}>
    <div class="container py-10 md:py-14">
        <div class="grid gap-2 lg:grid-cols-3">
            <div class="grid md:grid-cols-7 gap-0.5">
                <div
                    class="flex items-center justify-center py-4 bg-blue-100 md:col-span-2 rounded-tl-md rounded-bl-md md:py-6"
                >
                    <div
                        class="inline-flex justify-center items-center size-[64px] bg-blue-600 rounded-full border-4 border-blue-50 dark:border-blue-900 dark:bg-blue-800"
                    >
                        <i class="text-3xl text-white ti ti-brand-whatsapp"></i>
                    </div>
                </div>
                <div
                    class="flex flex-col items-center justify-center py-4 bg-blue-100 md:col-span-5 rounded-tr-md rounded-br-md md:py-6"
                >
                    <div class="space-y-3 text-center">
                        <p class="text-xl font-bold text-slate-800 md:text-2xl">Whats App</p>
                        <p class="text-sm font-semibold text-slate-500">+62 1234 567 890</p>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-7 gap-0.5">
                <div
                    class="flex items-center justify-center py-4 bg-blue-100 md:col-span-2 rounded-tl-md rounded-bl-md md:py-6"
                >
                    <div
                        class="inline-flex justify-center items-center size-[64px] bg-blue-600 rounded-full border-4 border-blue-50 dark:border-blue-900 dark:bg-blue-800"
                    >
                        <i class="text-3xl text-white ti ti-mail"></i>
                    </div>
                </div>
                <div
                    class="flex flex-col items-center justify-center py-4 bg-blue-100 md:col-span-5 rounded-tr-md rounded-br-md md:py-6"
                >
                    <div class="space-y-3 text-center">
                        <p class="text-xl font-bold text-slate-800 md:text-2xl">Mail</p>
                        <p class="text-sm font-semibold text-slate-500">support@preanger.com</p>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-7 gap-0.5">
                <div
                    class="flex items-center justify-center py-4 bg-blue-100 md:col-span-2 rounded-tl-md rounded-bl-md md:py-6"
                >
                    <div
                        class="inline-flex justify-center items-center size-[64px] bg-blue-600 rounded-full border-4 border-blue-50 dark:border-blue-900 dark:bg-blue-800"
                    >
                        <i class="text-3xl text-white ti ti-map-pin"></i>
                    </div>
                </div>
                <div
                    class="flex flex-col items-center justify-center py-4 bg-blue-100 md:col-span-5 rounded-tr-md rounded-br-md md:py-6"
                >
                    <div class="space-y-3 text-center">
                        <p class="text-xl font-bold text-slate-800 md:text-2xl">Address</p>
                        <p class="text-sm font-semibold text-slate-500">Jl Pegangsaan timur no 42 Serang banten</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 mt-10 bg-blue-100 rounded-lg md:mt-14 md:p-6">
            <h3 class="text-xl font-bold lg:text-2xl text-slate-800">Any Questions?</h3>
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

        <div class="p-4 mt-10 bg-blue-100 rounded-lg md:mt-14 md:p-6">
            <iframe
                class="w-full rounded-lg shadow-sm h-52 md:h-72 lg:h-96"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5025055593433!2d106.83793427503751!3d-6.197236793790459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f46b29c5e473%3A0xebffbc66fc07dbaa!2sJl.%20Pegangsaan%20Timur%2C%20RT.9%2FRW.4%2C%20Cikini%2C%20Kec.%20Menteng%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1718285680781!5m2!1sen!2sid"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>
    </div>
</section>
