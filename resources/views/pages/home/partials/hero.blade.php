<section
    class=" w-full bg-center sm:bg-fixed bg-cover bg-blend-multiply bg-primary-600 flex justify-center items-end text-white px-2 sm:px-12 xl:px-0"
    style="background-image: url({{asset('assets/hero.webp')}})  ">

    <div class="flex flex-col justify-center items-center mx-auto text-center  max-w-screen-xl gap-16 2xl:gap-32 pb-20">

        <div class="flex flex-col gap-6 sm:gap-12 mt-32 lg:mt-24 xl:mt-36  px-10 sm:px-0">

            <h1 class="text-5xl sm:text-6xl 2xl:text-8xl font-heading" style="line-height: 1.2">Lodowisko Biała Owca <br /><span>w Białce
                    Tatrzańskiej</span> </h1>
            <p class="text-xl">Zimowa frajda czeka na Ciebie! Wypożycz łyżwy, wskocz na lód i ciesz się niepowtarzalnym
                klimatem górskiego lodowiska.</p>
        </div>

        <div class="grid xl:grid-cols-3 gap-12 2xl:gap-24 px-6 md:px-16 w-full justify-center  max-w-screen-xl">

            <x-hero-card href="#wypozyczalnia" img="{{asset('assets/wypozyczalnia.webp')}}" alt="Łyżwy z wypożyczalni lodowiska Biała Owca w Białce Tatrzańskiej" title="Wypożyczalnia">
                Nie masz łyżew? W naszej wypożyczalni znajdziesz wszystko, czego potrzebujesz do zabawy na lodzie
                – od łyżew po kaski, a dla najmłodszych oferujemy pingwinki wspomagające jazdę.</x-hero-card>

            <x-hero-card href="#lodowisko" img="{{asset('assets/logo-dark.jpg')}}" alt="logo lodowisko Biała Owca" title="Lodowisko">Ślizgaj się
                na doskonale przygotowanej tafli lodu z malowniczym widokiem na Tatry! Lodowisko
                Biała Owca to zimowa rozrywka dla całej rodziny, idealne miejsce na aktywny wypoczynek.</x-hero-card>

            
            <x-hero-card href="#gastronomia" img="{{asset('assets/gastronomia.webp')}}" alt="Gastronomia w lodowisku Biała Owca w Białce Tatrzańskiej" title="Gastronomia">Po
                szaleństwie na lodzie zapraszamy na ciepłe posiłki i gorące napoje w naszej małej
                gastronomii. Zrelaksuj się i nabierz sił w alpejskim klimacie!</x-hero-card>

        </div>

    </div>

</section>