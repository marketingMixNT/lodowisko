<x-layouts.app title="Aktualności – Lodowisko Biała Owca w Białce Tatrzańskiej" description="Dowiedz się o najnowszych wydarzeniach i aktualnościach z naszego lodowiska w Białce Tatrzańskiej. Sprawdź godziny otwarcia, ceny, zniżki i więcej!






">


    <section
        class=" sm:py-32 w-full bg-center bg-fixed bg-cover bg-blend-multiply bg-primary-600 flex justify-center items-end text-white px-6 sm:px-12 xl:px-0"
        style="background-image: url({{asset('assets/cta.webp')}})  ">

        <div
            class="flex flex-col justify-center items-center mx-auto text-center  max-w-screen-xl gap-16 2xl:gap-32 pb-20">

            <div class="flex flex-col gap-6 sm:gap-12 mt-32 lg:mt-24 xl:mt-36 2xl:mt-0 px-10 sm:px-0">

                <h1 class="text-5xl sm:text-6xl 2xl:text-8xl font-heading pt-12" style="line-height: 1.2">Aktualności
                </h1>

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