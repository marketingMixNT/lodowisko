<header id="header" class="fixed top-0 left-0 right-0 duration-500  text-white z-50 py-2">



    <div class="flex justify-between max-w-screen-2xl mx-auto px-6 2xl:px-0 ">

        <a href="{{route('home')}}" class="link-hover  lg:hidden"><img src="{{asset('assets/logo.png')}}" alt="logo Lodowisko Biała
Owca w Białce Tatrzańskiej" class="w-28  object-contain object-center" />
        </a>


        <ul class="hidden lg:flex justify-center items-center gap-6 text-white text-xl  ">

            <li class="hidden lg:block"><a href="{{route('home')}}" class=" "><img
                        src="{{asset('assets/logo.png')}}" alt="logo Lodowisko Biała
Owca w Białce Tatrzańskiej" class="w-24  object-contain object-center " />
                </a> </li>
            <li class="hidden lg:block"><a href="{{route('home')}}/#lodowisko" class="link-hover ">Lodowisko</a></li>
            <li class="hidden lg:block"><a href="{{route('home')}}/#wypozyczalnia" class="link-hover ">Wypożyczalnia</a>
            </li>
            <li class="hidden lg:block"><a href="{{route('home')}}/#gastronomia" class="link-hover ">Gastronomia</a>
            </li>

            <li class="hidden lg:block"><a href="{{route('home')}}/#kontakt" class="link-hover ">Kontakt</a></li>
            <li class="hidden lg:block"><a href="{{route('home')}}/#faq" class="link-hover ">FAQ</a></li>
            <li class="hidden lg:block"><a href="{{route('blog.index')}}" class="link-hover ">Aktualności</a></li>
        </ul>


        <div class="hidden lg:flex justify-center items-center gap-6 ">
            <a href="https://maps.app.goo.gl/GNqpgpcfAvYnMM6W6" target="_blank"
                class="font-light text-sm flex justify-center items-center gap-2  " aria-label="Otwórz mapę">
                <x-lucide-map-pin class="w-8" />
            </a>

            <a href="tel:+48734775817" class="font-light text-sm flex justify-center items-center gap-2 "
                aria-label="Zadzwoń">
                <x-lucide-phone class="w-8" />

            </a>
        </div>

        <button id="openMenu" class=" lg:hidden" aria-label="Otwórz menu">
            <x-lucide-menu class="w-8 " />
        </button>
    </div>


</header>