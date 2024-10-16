<div id="mobileMenu"
    class="fixed top-0 bottom-0 right-0 left-0 sm:left-1/2  flex flex-col justify-between px-7 py-5  bg-bgSecondary-800  opacity-0 duration-300 ease-out z-50 translate-x-[100%]">

    <div class="flex flex-col gap-16">

        {{-- close --}}
        <div class="flex justify-end">
            <button id="closeMenu" class="border border-white p-2 rounded-full cursor-pointer group">

                <x-lucide-x class="size-10 group-hover:rotate-90 duration-300 text-white" />


            </button>
        </div>

        <nav>
            <ul class="flex flex-col justify-start items-start gap-5 pl-6 text-white">
                <li class="flex justify-center">
                    <a href="#"><img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-24"></a>
                </li>
                <li class="text-xl"><a href="#">Lodowisko</a></li>
                <li class="text-xl"><a href="#">Wypożyczalnia</a></li>

                <li class="text-xl"><a href="#">Gastronomia</a></li>
                <li class="text-xl"><a href="#">Kontakt</a></li>

               
            </ul>
        </nav>
    </div>
    <div class="flex flex-col justify-end ">
        <hr class="mb-5">
        {{--
        <x-header.language-switcher class="self-end" /> --}}
    </div>

</div>