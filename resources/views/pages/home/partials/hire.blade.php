<x-section id="wypozyczalnia">

    {{-- container --}}
    <x-wrapper class="max-w-screen-xl pb-12 md:pb-24">

        {{-- PICTOGRAMS --}}
        <x-heading>Wypożyczalnia</x-heading>

        <div class="flex flex-col lg:flex-row justify-center items-center gap-12 ">



            <div class="w-full lg:w-1/2 flex flex-col gap-8 text-center lg:text-left">
                <h3 class="text-3xl lg:text-4xl">Wypożycz łyżwy <br /> i ruszaj na lód!</h3>
                <p class="text-lg">Nie masz własnych łyżew? Żaden problem! W naszej wypożyczalni znajdziesz wszystko,
                    czego potrzebujesz, aby cieszyć się ślizganiem na lodzie. Mamy łyżwy dla każdej wielkości stopy, a
                    dla najmłodszych przygotowaliśmy specjalne pingwinki do nauki jazdy. Cały sprzęt jest starannie
                    przygotowany, aby zapewnić komfort i bezpieczeństwo.</p>
            </div>

            <div class="w-full lg:w-1/2 ">
                <x-price-list>
                    <h2 class="text-center text-3xl font-heading text-fontLight">Cennik</h2>
                   
                    <ul class="flex flex-col gap-8 text-fontLight">
                        <x-price-item title="Wypożyczenie sprzętu" price="20zł" />


                    </ul>

                    <p class=" text-xl text-center text-fontLight">kask i pingwinki w cenie</p>
                </x-price-list>
            </div>
        </div>

    </x-wrapper>
</x-section>