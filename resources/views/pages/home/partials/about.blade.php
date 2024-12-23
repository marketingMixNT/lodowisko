<x-section id="lodowisko">

    {{-- container --}}
    <x-wrapper class="max-w-screen-2xl pt-12  md:pt-24">

        {{-- PICTOGRAMS --}}
        <x-heading>Czysta frajda na lodzie</x-heading>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12">

            <x-about-pictogram>
                <x-lucide-users class="w-20" />
                <h3 class="text-2xl font-heading">Świetna zabawa dla grup</h3>
                <p class="text-lg">Planujesz wyjście z grupą? Nasze lodowisko to idealne miejsce na zimową integrację i
                    wspólne ślizganie. </p>
            </x-about-pictogram>

            <x-about-pictogram>
                <x-gmdi-ice-skating class="w-20" />
                <h3 class="text-2xl font-heading">Profesjonalna tafla lodu</h3>
                <p class="text-lg">Nasza tafla jest regularnie pielęgnowana, aby zapewnić najlepsze warunki do
                    ślizgania. Płynna jazda
                    gwarantowana!</p>
            </x-about-pictogram>

            <x-about-pictogram>
                <x-mdi-penguin class="w-20" />
                <h3 class="text-2xl font-heading">Wypożyczalnia sprzętu</h3>
                <p class="text-lg">Nie masz łyżew? Nie martw się! Nasza wypożyczalnia oferuje pełen zestaw sprzętu, w
                    tym łyżwy, kaski i
                    pingwinki dla dzieci.</p>
            </x-about-pictogram>

            <x-about-pictogram>
                <x-lucide-circle-parking class="w-20" />
                <h3 class="text-2xl font-heading">Parking tuż przy lodowisku</h3>
                <p class="text-lg">Nie martw się o miejsce na samochód! Dla wygody naszych gości przygotowaliśmy duży
                    parking
                    bezpośrednio przy lodowisku.</p>
            </x-about-pictogram>


        </div>

        {{-- PRICING --}}
        <x-heading>Lodowisko czynne codziennie od 10-21</x-heading>
        <div class="max-w-screen-md mx-auto">
            <x-price-list>

                <h3 class="text-center text-3xl font-heading text-fontLight">1 razowe wejście bez limitu</h3>
                <ul class="flex flex-col gap-8 text-fontLight">
                    <x-price-item title="Bilet ulgowy - do lat 16" price="20 zł" />
                    <x-price-item title="Bilet normalny" price="25 zł" />
                    <x-price-item title="Grupy powyżej 20 osób" price="indywidualna wycena" />

                </ul>


            </x-price-list>
        </div>

        {{-- IMAGES --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-screen-xl mx-auto">

            <div>
                <img src="{{asset('assets/mobile/o-nas-1.webp')}}" alt="Dziewczyna na lodowisku Biała Owca w Białce Tatrzańskiej"
                    class="aspect-square rounded-lg object-cover shadow-xl w-full h-full" loading="lazy">
            </div>
            <div>
                <img src="{{asset('assets/mobile/o-nas-2.webp')}}" alt="Dziewczyna na lodowisku Biała Owca w Białce Tatrzańskiej"
                    class="aspect-square rounded-lg object-cover shadow-xl w-full h-full" loading="lazy">
            </div>
            <div class="md:hidden lg:block">
                <img src="{{asset('assets/mobile/o-nas-3.webp')}}" alt="Łyzwiarz na lodowisku Biała Owca w Białce Tatrzańskiej"
                    class="aspect-square rounded-lg object-cover shadow-xl w-full h-full" loading="lazy">
            </div>

        </div>

    </x-wrapper>




</x-section>