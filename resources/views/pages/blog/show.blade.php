<x-layouts.app title="{{$post->getMetaTitle()}}"
    description="{{$post->getMetaDesc()}}">


    <section
    class=" sm:py-28 w-full bg-center bg-fixed bg-cover bg-blend-multiply bg-primary-600 flex justify-center items-end text-white px-6 sm:px-12 xl:px-0"
    style="background-image: url({{asset('assets/cta.webp')}})  ">

    <div class="flex flex-col justify-center items-center mx-auto text-center  max-w-screen-xl gap-16 2xl:gap-32 ">

        <div class="flex flex-col gap-6 sm:gap-12 mt-32 lg:mt-24 xl:mt-36 2xl:mt-0 px-10 sm:px-0">

            <h1 class="text-5xl sm:text-6xl 2xl:text-8xl font-heading pt-12" style="line-height: 1.2">{{$post->title}}</h1>
            <span class="text-sm">{{ $post->getPublishedDate() }}</span>
            
        </div>

       

    </div>

</section>

<x-section id="article">

    <article class="prose prose-p:text-lg max-w-screen-lg mx-auto py-24">

        <img src="{{asset( 'storage/' . $post->thumbnail_mobile)  }}" alt="miniaturka posta - {{$post->title}}" class='md:hidden w-full aspect-video object-cover rounded-lg pb-6' />
        <img src="{{asset( 'storage/' . $post->thumbnail)  }}" alt="miniaturka posta - {{$post->title}}" class='hidden md:block w-full aspect-video object-cover rounded-lg pb-6' />

        {!! $post->content !!}

    </article>
   
</x-section>




</x-layouts.app>