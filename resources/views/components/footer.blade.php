<footer class="bg-primary-600 px-6 sm:px-12 2xl:px-0 pb-16 lg:pb-0">
    <div class="max-w-screen-xl mx-auto py-8 md:py-16 space-y-12 text-fontLight">


        <div class="flex flex-col md:flex-row gap-6 md:gap-0 justify-between items-center">

            <a href="{{route('home')}}" aria-label="Strona główna"><img src="{{asset('assets/logo.png')}}" alt="logo Lodowisko Biała
Owca w Białce Tatrzańskiej" class="w-52"></a>

            <nav>
                <ul class="flex gap-12 ">
                    <li><a href="{{route('privacyPolicy')}}" class="text-lg link-hover">Polityka Prywatności</a></li>

                </ul>
            </nav>

            {{-- <ul class="flex gap-12">
                <li><a href="#" class=" link-hover">Facebook</a></li>
                <li><a href="#" class=" link-hover">Instagram</a></li>
            </ul> --}}
        </div>


        <div class="flex flex-col xs:flex-row gap-6 xs:gap-0 justify-between items-center">
            <span>

                © <span id="footerYear"></span> Biała Owca
            </span>
            <a href="https://marketingmix.pl" target="_blank" rel="norefferer nofollow" aria-label="Marketing Mix"><img
                    src="{{asset('assets/marketingmix.svg')}}" alt="logo wykonawcy strony - MarketingMix.pl" class="w-40"></a>
        </div>

    </div>
</footer>