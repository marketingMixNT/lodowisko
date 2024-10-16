<header id="header" class="fixed top-0 left-0 right-0 duration-500 shadow-xl text-white">

    <div class="absolute left-6 top-1/2 -translate-y-1/2 ">


        <a href="tel:+48608371137" class="font-extralight text-sm flex justify-center items-center gap-2 hidden xl:block">
            <x-lucide-phone class="w-4" />


            608 371 137
        </a>

        <div class="flex  justify-center items-center gap-3">

            <a href="/" class="font-extralight text-sm flex justify-center items-center gap-2  ">
                <x-lucide-map-pin class="w-5" />
            </a>
            
            <a href="tel:+48608371137" class="font-extralight text-sm flex justify-center items-center gap-2 ">
                <x-lucide-phone class="w-5" />
                
                
            </a>
        </div>
    </div>


    <ul class="flex justify-center items-center gap-6 text-white text-lg font-light ">
        <li class="hidden lg:block"><a href="#">Lodowisko</a></li>
        <li class="hidden lg:block"><a href="#">Wypożyczalnia</a></li>
        <li class="flex justify-center">
            <a href="#"><img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-24"></a>
        </li>
        <li class="hidden lg:block"><a href="#">Gastronomia</a></li>
        <li class="hidden lg:block"><a href="#">Kontakt</a></li>
    </ul>


    <div class="absolute right-6 top-1/2 -translate-y-1/2 ">


        <a href="/" class="font-extralight text-sm hidden xl:flex justify-center items-center gap-2  ">
            <x-lucide-map-pin class="w-4" />


            Środkowa 161, Białka Tatrzańska
        </a>

        <button id="openMenu" class="lg:hidden"> <x-lucide-menu class="w-8 "/></button>
   
    </div>
</header>