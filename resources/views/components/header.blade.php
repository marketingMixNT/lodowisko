<header id="header" class="fixed top-0 left-0 right-0 duration-500  text-white z-50">

    <div class="absolute left-6 top-1/2 -translate-y-1/2 ">


        <a href="tel:+48608371137" class="font-semibold text-xl xl:flex justify-center items-center gap-2 hidden ">
            <x-lucide-phone class="w-8" />


            608 371 137
        </a>

        <div class="flex xl:hidden  justify-center items-center gap-3 ">

            <a href="https://maps.app.goo.gl/e4z9T3TtmTVTB2xz7" target="_blank" class="font-light text-sm flex justify-center items-center gap-2  " aria-label="Otwórz mapę">
                <x-lucide-map-pin class="w-5" />
            </a>
            
            <a href="tel:+48608371137" class="font-light text-sm flex justify-center items-center gap-2 " aria-label="Zadzwoń">
                <x-lucide-phone class="w-5" />
                
            </a>
        </div>
    </div>


    <ul class="flex justify-center items-center gap-6 text-white text-xl  ">
        <li class="hidden lg:block"><a href="{{route('home')}}/#lodowisko" class="link-hover ">Lodowisko</a></li>
        <li class="hidden lg:block"><a href="{{route('home')}}/#wypozyczalnia" class="link-hover ">Wypożyczalnia</a></li>
        <li class="flex justify-center">
            <a href="{{route('home')}}"><img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-24" aria-label="Strona główna"></a>
        </li>
        <li class="hidden lg:block"><a href="{{route('home')}}/#gastronomia" class="link-hover ">Gastronomia</a></li>
        <li class="hidden lg:block"><a href="{{route('home')}}/#kontakt" class="link-hover ">Kontakt</a></li>
    </ul>


    <div class="absolute right-6 top-1/2 -translate-y-1/2 ">


        <a href="https://maps.app.goo.gl/e4z9T3TtmTVTB2xz7" target="_blank" class=" font-semibold text-xl hidden xl:flex justify-center items-center gap-2  ">
            <x-lucide-map-pin class="w-8" />


            Środkowa 161, Białka Tatrzańska
        </a>

        <button id="openMenu" class="lg:hidden" aria-label="Otwórz menu"> <x-lucide-menu class="w-8 "/></button>
   
    </div>
</header>