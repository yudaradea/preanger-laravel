<section id="faq" {{ $attributes->merge(['class' => 'relative']) }}>
    <div class="container py-10 md:py-14">
        <x-frontend.section-title>
            <x-slot name="title">Frequenly Ask Questions</x-slot>
            <x-slot name="subtitle">Lorem ipsum dolor sit amet consectetur.</x-slot>
        </x-frontend.section-title>

        <div class="pt-8 mx-auto md:pt-10 lg:max-w-4xl">
            <div class="flex w-full flex-col gap-4 text-slate-700 dark:text-slate-300 text-sm">
                <div
                    x-data="{ isExpanded: false }"
                    class="divide-y divide-slate-300 overflow-hidden rounded-xl border border-slate-300 bg-slate-100/40 dark:divide-slate-700 dark:border-slate-700 dark:bg-slate-800/50"
                >
                    <button
                        id="controlsAccordionItemOne"
                        type="button"
                        class="flex w-full items-center justify-between gap-2 bg-slate-100 p-4 text-left underline-offset-2 hover:bg-slate-100/75 focus-visible:bg-slate-100/75 focus-visible:underline focus-visible:outline-none dark:bg-slate-800 dark:hover:bg-slate-800/75 dark:focus-visible:bg-slate-800/75"
                        aria-controls="accordionItemOne"
                        @click="isExpanded = ! isExpanded"
                        :class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold'  : 'text-onSurface dark:text-onSurfaceDark font-medium'"
                        :aria-expanded="isExpanded ? 'true' : 'false'"
                    >
                        What browsers are supported?
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2"
                            stroke="currentColor"
                            class="size-5 shrink-0 transition"
                            aria-hidden="true"
                            :class="isExpanded  ?  'rotate-180'  :  ''"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div
                        x-cloak
                        x-show="isExpanded"
                        id="accordionItemOne"
                        role="region"
                        aria-labelledby="controlsAccordionItemOne"
                        x-collapse
                    >
                        <div class="p-4 text-sm text-pretty">
                            Our website is optimized for the latest versions of Chrome, Firefox, Safari, and Edge. Check
                            our
                            <a href="#" class="underline underline-offset-2 text-blue-700 dark:text-blue-600">
                                documentation
                            </a>
                            for additional information.
                        </div>
                    </div>
                </div>
                <div
                    x-data="{ isExpanded: false }"
                    class="divide-y divide-slate-300 overflow-hidden rounded-xl border border-slate-300 bg-slate-100/40 dark:divide-slate-700 dark:border-slate-700 dark:bg-slate-800/50"
                >
                    <button
                        id="controlsAccordionItemTwo"
                        type="button"
                        class="flex w-full items-center justify-between gap-2 bg-slate-100 p-4 text-left underline-offset-2 hover:bg-slate-100/75 focus-visible:bg-slate-100/75 focus-visible:underline focus-visible:outline-none dark:bg-slate-800 dark:hover:bg-slate-800/75 dark:focus-visible:bg-slate-800/75"
                        aria-controls="accordionItemTwo"
                        @click="isExpanded = ! isExpanded"
                        :class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold'  : 'text-onSurface dark:text-onSurfaceDark font-medium'"
                        :aria-expanded="isExpanded ? 'true' : 'false'"
                    >
                        How can I contact customer support?
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2"
                            stroke="currentColor"
                            class="size-5 shrink-0 transition"
                            aria-hidden="true"
                            :class="isExpanded  ?  'rotate-180'  :  ''"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div
                        x-cloak
                        x-show="isExpanded"
                        id="accordionItemTwo"
                        role="region"
                        aria-labelledby="controlsAccordionItemTwo"
                        x-collapse
                    >
                        <div class="p-4 text-sm text-pretty">
                            Reach out to our dedicated support team via email at
                            <a href="#" class="underline underline-offset-2 text-blue-700 dark:text-blue-600">
                                support@example.com
                            </a>
                            or call our toll-free number at 1-800-123-4567 during business hours.
                        </div>
                    </div>
                </div>
                <div
                    x-data="{ isExpanded: false }"
                    class="divide-y divide-slate-300 overflow-hidden rounded-xl border border-slate-300 bg-slate-100/40 dark:divide-slate-700 dark:border-slate-700 dark:bg-slate-800/50"
                >
                    <button
                        id="controlsAccordionItemThree"
                        type="button"
                        class="flex w-full items-center justify-between gap-2 bg-slate-100 p-4 text-left underline-offset-2 hover:bg-slate-100/75 focus-visible:bg-slate-100/75 focus-visible:underline focus-visible:outline-none dark:bg-slate-800 dark:hover:bg-slate-800/75 dark:focus-visible:bg-slate-800/75"
                        aria-controls="accordionItemThree"
                        @click="isExpanded = ! isExpanded"
                        :class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold'  : 'text-onSurface dark:text-onSurfaceDark font-medium'"
                        :aria-expanded="isExpanded ? 'true' : 'false'"
                    >
                        What is the refund policy?
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2"
                            stroke="currentColor"
                            class="size-5 shrink-0 transition"
                            aria-hidden="true"
                            :class="isExpanded  ?  'rotate-180'  :  ''"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div
                        x-cloak
                        x-show="isExpanded"
                        id="accordionItemThree"
                        role="region"
                        aria-labelledby="controlsAccordionItemThree"
                        x-collapse
                    >
                        <div class="p-4 text-sm text-pretty">
                            Please refer to our
                            <a href="#" class="underline underline-offset-2 text-blue-700 dark:text-blue-600">
                                refund policy page
                            </a>
                            on the website for detailed information regarding eligibility, timeframes, and the process
                            for requesting a refund.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
