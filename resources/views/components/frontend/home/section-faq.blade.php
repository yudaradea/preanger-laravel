<section id="faq">
    <div class="container py-10 md:py-14">
        <div class="flex flex-col items-center justify-center">
            <h1
                class="inline-flex items-center px-2 pb-2 text-lg font-bold text-center uppercase border-b border-blue-600 sm:text-xl md:pb-3 md:border-b-2 md:text-3xl xl:text-4xl"
            >
                Frequently Asked Questions
            </h1>
        </div>

        <div class="pt-6 mx-auto space-y-4 md:pt-8 lg:max-w-4xl">
            {{-- faq 1 --}}
            <div class="flex flex-col gap-2 p-4 rounded-lg shadow-sm bg-gray-50" x-data="{ show: false }">
                {{-- Pertanyaan --}}
                <div
                    class="flex items-center w-full gap-2 cursor-pointer group"
                    @click="show = !show"
                    x-cloak
                    x-bind:class="{ 'pb-2 border-b-2': show }"
                >
                    <p
                        class="font-semibold transition-all duration-200 md:text-lg group-hover:text-blue-400"
                        x-bind:class="{ 'text-blue-400': show }"
                    >
                        Siapakah saya?
                    </p>
                    <i
                        class="mt-[3px] text-xl ti ti-chevron-down ms-auto duration-300 group-hover:text-blue-400"
                        x-bind:class="show ? 'rotate-180 text-blue-400 ' : 'rotate-0  '"
                    ></i>
                </div>
                {{-- Jawaban --}}
                <div x-show="show" x-cloak x-collapse x-collapse.duration.300ms>
                    <p class="mt-1 text-sm font-medium leading-relaxed text-gray-400">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum veritatis excepturi sequi quam
                        molestiae nihil totam quis iusto soluta a!
                    </p>
                </div>
            </div>

            {{-- faq 1 --}}
            <div class="flex flex-col gap-2 p-4 rounded-lg shadow-sm bg-gray-50" x-data="{ show: false }">
                {{-- Pertanyaan --}}
                <div
                    class="flex items-center w-full gap-2 cursor-pointer group"
                    @click="show = !show"
                    x-cloak
                    x-bind:class="{ 'pb-2 border-b-2': show }"
                >
                    <p
                        class="font-semibold transition-all duration-200 md:text-lg group-hover:text-blue-400"
                        x-bind:class="{ 'text-blue-400': show }"
                    >
                        Siapakah saya?
                    </p>
                    <i
                        class="mt-[3px] text-xl ti ti-chevron-down ms-auto duration-300 group-hover:text-blue-400"
                        x-bind:class="show ? 'rotate-180 text-blue-400 ' : 'rotate-0  '"
                    ></i>
                </div>
                {{-- Jawaban --}}
                <div x-show="show" x-cloak x-collapse x-collapse.duration.300ms>
                    <p class="mt-1 text-sm font-medium leading-relaxed text-gray-400">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum veritatis excepturi sequi quam
                        molestiae nihil totam quis iusto soluta a!
                    </p>
                </div>
            </div>

            {{-- faq 1 --}}
            <div class="flex flex-col gap-2 p-4 rounded-lg shadow-sm bg-gray-50" x-data="{ show: false }">
                {{-- Pertanyaan --}}
                <div
                    class="flex items-center w-full gap-2 cursor-pointer group"
                    @click="show = !show"
                    x-cloak
                    x-bind:class="{ 'pb-2 border-b-2': show }"
                >
                    <p
                        class="font-semibold transition-all duration-200 md:text-lg group-hover:text-blue-400"
                        x-bind:class="{ 'text-blue-400': show }"
                    >
                        Siapakah saya?
                    </p>
                    <i
                        class="mt-[3px] text-xl ti ti-chevron-down ms-auto duration-300 group-hover:text-blue-400"
                        x-bind:class="show ? 'rotate-180 text-blue-400 ' : 'rotate-0  '"
                    ></i>
                </div>
                {{-- Jawaban --}}
                <div x-show="show" x-cloak x-collapse x-collapse.duration.300ms>
                    <p class="mt-1 text-sm font-medium leading-relaxed text-gray-400">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum veritatis excepturi sequi quam
                        molestiae nihil totam quis iusto soluta a!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
