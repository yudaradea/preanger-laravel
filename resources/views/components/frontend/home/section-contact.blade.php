<section id="contact" class="bg-gray-50">
    <div class="container py-10 md:py-14">
        <div class="flex flex-col items-center justify-center">
            <h1
                class="inline-flex items-center px-2 pb-2 text-2xl font-bold text-center uppercase border-b border-blue-600 md:pb-3 md:border-b-2 md:text-4xl xl:text-5xl"
            >
                Contact
            </h1>
            <p class="mt-4 text-sm text-center text-gray-600 lg:text-base lg:text-start dark:text-neutral-400">
                Lorem ipsum dolor sit amet consectetur.
            </p>
        </div>

        <div class="flex flex-col mt-6 lg:flex-row gap-y-6 lg:mt-10 lg:justify-between">
            <div
                class="lg:flex lg:flex-col px-[10px] py-6 bg-white border-t-2 border-b-2 border-blue-600 shadow-md md:px-4 space-y-7 md:space-y-8 lg:w-[40%]"
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
                <div class="grid gap-5 md:gap-6 md:grid-cols-2">
                    <div class="grid gap-2 md:gap-3">
                        <label
                            for="name"
                            class="text-sm tracking-wide border-gray-400 rounded-lg md:text-base text-slate-500"
                        >
                            Your Name
                        </label>
                        <div class="max-w-sm space-y-3">
                            <input
                                type="text"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder=""
                            />
                        </div>
                    </div>

                    <div class="grid gap-2 md:gap-3">
                        <label
                            for="name"
                            class="text-sm tracking-wide border-gray-400 rounded-lg md:text-base text-slate-500"
                        >
                            Your Email
                        </label>
                        <div class="max-w-sm space-y-3">
                            <input
                                type="email"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder=""
                            />
                        </div>
                    </div>

                    <div class="grid gap-2 md:gap-3 md:col-span-2">
                        <label
                            for="name"
                            class="text-sm tracking-wide border-gray-400 rounded-lg md:text-base text-slate-500"
                        >
                            Subject
                        </label>
                        <div class="space-y-3">
                            <input
                                type="text"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder=""
                            />
                        </div>
                    </div>

                    <div class="grid gap-2 md:gap-3 md:col-span-2">
                        <label
                            for="name"
                            class="text-sm tracking-wide border-gray-400 rounded-lg md:text-base text-slate-500"
                        >
                            Message
                        </label>
                        <div class="space-y-3">
                            <textarea
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                rows="6"
                            ></textarea>
                        </div>
                    </div>

                    <div class="grid w-full mt-2 md:flex lg:flex-1 lg:col-span-2 lg:justify-center lg:mt-4">
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
