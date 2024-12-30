<x-layouts.app title="Aktualności – Lodowisko Biała Owca w Białce Tatrzańskiej"
    description="Dowiedz się o najnowszych wydarzeniach i aktualnościach z naszego lodowiska w Białce Tatrzańskiej. Sprawdź godziny otwarcia, ceny, zniżki i więcej!">

    @slot('seo')

    {{-- @if ($posts->onFirstPage() === false)
    <link rel="prev" href="{{ $posts->previousPageUrl() }}">
    @endif

    @if ($posts->hasMorePages())
    <link rel="next" href="{{ $posts->nextPageUrl() }}">
    @endif --}}

    @if ($posts->onFirstPage() === false)
    <link rel="prev" href="{{ $posts->currentPage() === 2 ? route('blog.index') : $posts->previousPageUrl() }}">
    @endif

    @if ($posts->hasMorePages())
    <link rel="next" href="{{ $posts->nextPageUrl() }}">
    @endif


    <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Strona główna",
            "item": "https://bialkalodowisko.pl"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Aktualności",
            "item": "https://bialkalodowisko.pl/aktualnosci"  
          }]
        }
    </script>
    @endslot

    <section
        class=" sm:py-32 w-full bg-center bg-fixed bg-cover bg-blend-multiply bg-primary-600 flex justify-center items-end text-white px-6 sm:px-12 xl:px-0"
        style="background-image: url({{asset('assets/cta.webp')}})  ">

        <div
            class="flex flex-col justify-center items-center mx-auto text-center  max-w-screen-xl gap-16 2xl:gap-32 pb-20">

            <div
                class="flex flex-col justify-center items-center gap-6 sm:gap-12 mt-32 lg:mt-24 xl:mt-36 2xl:mt-0 px-10 sm:px-0">

                <div class="flex flex-col justify-center items-center pt-12">
                    <x-breadcrumbs>
                        <x-breadcrumbs-item href="{{route('blog.index')}}" title="Aktualności" />
                    </x-breadcrumbs>
                    <h1 class="text-5xl sm:text-6xl 2xl:text-8xl font-heading " style="line-height: 1.2">Aktualności
                    </h1>

                </div>


            </div>



        </div>

    </section>

    <x-section id="aktualnosci">


        <div class="max-w-screen-lg mx-auto pt-12 md:pt-24 pb-12 space-y-12">


            <x-heading>Najświeższe wieści z lodowiska</x-heading>

            @foreach($posts as $post)

            <x-post-card :post="$post" />

            @endforeach

            {{ $posts->links('vendor.pagination.tailwind') }}
        </div>
    </x-section>




</x-layouts.app>