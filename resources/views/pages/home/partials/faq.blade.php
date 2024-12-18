<x-section id="faq">

    {{-- container --}}
    <x-wrapper class="max-w-screen-xl pt-12 md:pt-24">
        <div class="max-w-screen-lg mx-auto space-y-12">
            {{-- TEXT --}}
            <div class="space-y-12">

                <x-heading>FAQ</x-heading>
                <p class="text-xl text-center">Planujesz wizytę na naszym lodowisku? Przygotowaliśmy dla Ciebie
                    odpowiedzi na najczęściej zadawane pytania, aby ułatwić organizację Twojego czasu na lodzie. Dowiedz
                    się wszystkiego o godzinach otwarcia, cenniku, dostępnych usługach i innych istotnych informacjach.
                </p>
            </div>

            {{-- MENU --}}
            <div class="max-w-screen-md mx-auto">

                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white text-fontDark"
                    data-inactive-classes="text-fontDark">

                    {{-- item --}}
                    <h2 id="accordion-flush-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-fontDark border-b border-gray-200  gap-3"
                            data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span class="text-xl font-semibold">Jakie są godziny otwarcia lodowiska?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 text-fontDark ">Lodowisko jest otwarte codziennie od godziny 10:00 do 21:00.
                            </p>

                        </div>
                    </div>

                    {{-- item --}}
                    <h2 id="accordion-flush-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-fontDark border-b border-gray-200  gap-3"
                            data-accordion-target="#accordion-flush-body-2" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span class="text-xl font-semibold">Ile kosztuje wstęp na lodowisko?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 text-fontDark ">Bilet wstępu kosztuje 25 zł za godzinę dla dorosłych i 20 zł
                                dla dzieci poniżej 16 lat.
                            </p>

                        </div>
                    </div>

                    {{-- item --}}
                    <h2 id="accordion-flush-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-fontDark border-b border-gray-200  gap-3"
                            data-accordion-target="#accordion-flush-body-3" aria-expanded="true"
                            aria-controls="accordion-flush-body-3">
                            <span class="text-xl font-semibold">Czy lodowisko oferuje wypożyczalnię sprzętu i jaki jest koszt?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 text-fontDark ">Tak, lodowisko posiada wypożyczalnię sprzętu. Koszt wypożyczenia to 20 zł , a w skład zestawu wchodzi równie kask i pingwinek.
                            </p>

                        </div>
                    </div>

                    {{-- item --}}
                    <h2 id="accordion-flush-heading-4">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-fontDark border-b border-gray-200  gap-3"
                            data-accordion-target="#accordion-flush-body-4" aria-expanded="true"
                            aria-controls="accordion-flush-body-4">
                            <span class="text-xl font-semibold">Czy dostępne są zniżki grupowe?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 text-fontDark ">Tak, oferujemy zniżki dla grup powyżej 20 osób. Prosimy o
                                kontakt w celu uzyskania szczegółów.
                            </p>

                        </div>
                    </div>


                    {{-- item --}}
                    <h2 id="accordion-flush-heading-5">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-fontDark border-b border-gray-200  gap-3"
                            data-accordion-target="#accordion-flush-body-5" aria-expanded="true"
                            aria-controls="accordion-flush-body-5">
                            <span class="text-xl font-semibold">Czy na terenie lodowiska dostępne są punkty
                                gastronomiczne?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 text-fontDark ">Tak, na terenie naszego lodowiska znajduje się punkt
                                gastronomiczny, w której można skosztować gorącej czekolady, aromatycznej kawy oraz
                                przekąsek. To idealne miejsce na chwilę odpoczynku po zabawie na lodzie.
                            </p>

                        </div>
                    </div>








                </div>
            </div>




        </div>
    </x-wrapper>
</x-section>