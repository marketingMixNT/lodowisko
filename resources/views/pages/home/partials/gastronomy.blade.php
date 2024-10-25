<x-section id="gastronomia">

    {{-- container --}}
    <x-wrapper class="max-w-screen-xl pt-12 md:pt-24">
        <div class="max-w-screen-lg mx-auto space-y-12">
        {{-- TEXT --}}
        <div class="space-y-12">

            <x-heading>Przekąska i gorąca kawa po ślizganiu</x-heading>
            <p class="text-xl text-center">Po intensywnej zabawie na lodzie zapraszamy do naszej gastronomii, gdzie
                znajdziesz szeroki wybór pysznych dań i napojów. Oferujemy wszystko, co najlepsze na zimowe dni – od
                gorącej czekolady i aromatycznej kawy po rozgrzewające zupy i smakowite przekąski. To idealne miejsce,
                aby się zrelaksować, odpocząć i nabrać sił przed kolejną rundą ślizgania. Spędź czas z rodziną i
                przyjaciółmi, delektując się pysznym jedzeniem w miłej atmosferze.</p>
        </div>

        {{-- MENU --}}
       <div class="max-w-screen-md mx-auto">

       
            <x-price-list>

                {{-- <h2 class="text-center text-3xl font-heading text-fontLight">Nasze menu</h2> --}}

<div class="grid md:grid-cols-2 gap-12 md:gap-0">

    <div class="flex flex-col justify-start items-center text-fontLight">
        <h3 class="text-center text-3xl font-heading mb-4">Napoje</h3>
        <ul class="flex flex-col justify-start items-center gap-3">
            <li class="text-2xl font-medium">Wino grzane</li>
            <li class="text-2xl font-medium">Kawa</li>
            <li class="text-2xl font-medium">Herbata</li>
            <li class="text-2xl font-medium">Zimne napoje</li>
        </ul>
    </div>

    <div class="flex flex-col justify-start items-center text-fontLight">
        <h3 class="text-center text-3xl font-heading mb-4">Dania ciepłe</h3>
        <ul class="flex flex-col justify-start items-center gap-3">
            <li class="text-2xl font-medium">Gofry</li>
            <li class="text-2xl font-medium">Kebab</li>
            <li class="text-2xl font-medium">Frytki</li>
            <li class="text-2xl font-medium">Oscypek z grilla</li>
        </ul>
    </div>
</div>


            </x-price-list>
        </div>
        </div>
        {{-- IMAGES --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-screen-xl mx-auto">

            <div>
                <img src="{{asset('assets/gastronomia-2.webp')}}" alt="gofry w gastronomii na lodowisku Biała Owca w Białce Tatrzańskiej"
                    class="aspect-square rounded-lg object-cover shadow-xl">
            </div>
            <div>
                <img src="{{asset('assets/gastronomia-4.webp')}}" alt="kawa w gastronomii na lodowisku Biała Owca w Białce Tatrzańskiej"
                    class="aspect-square rounded-lg object-cover shadow-xl">
            </div>
            <div class="hidden lg:block">
                <img src="{{asset('assets/gastronomia-3.webp')}}" alt="kebab w gastronomii na lodowisku Biała Owca w Białce Tatrzańskiej"
                    class="aspect-square rounded-lg object-cover shadow-xl">
            </div>
           

        </div>


    </x-wrapper>
</x-section>