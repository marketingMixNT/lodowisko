@props(['apartment'])


<nav id="mobile-bottom-nav"
    class="bottom-nav_container fixed -bottom-20 left-0 right-0  grid lg:hidden grid-cols-2 z-30 transition-all duration-300  ">

    <x-mobile-button href="https://maps.app.goo.gl/FQmp5KX8DLZduauSA" target="_blank" rel="noreferrer nofollow">
        <x-lucide-map class="size-5  text-fontLight" />
        <span class="text-xs uppercase  text-fontLight">Dojazd</span>
    </x-mobile-button>

    <x-mobile-button href="tel:+48608371137">
        <x-lucide-phone class="size-5  text-fontWhite" />
        <span class="text-xs uppercase  text-fontWhite">Telefon</span>
    </x-mobile-button>






</nav>
