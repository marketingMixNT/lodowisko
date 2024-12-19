<x-layouts.app title="{{ $post->getMetaTitle() }}" description="{{ $post->getMetaDesc() }}">

    @slot('seo')
    @php
        $excerpt = Str::limit(strip_tags($post->content), 100);
        $schemaData = [
            "@context" => "https://schema.org",
            "@type" => "NewsArticle",
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => url("/aktualnosci/" . $post->slug),
            ],
            "headline" => $post->title,
            "description" => $excerpt,
            "image" => asset('storage/' . $post->thumbnail),
            "author" => [
                "@type" => "Organization",
                "name" => "lodowisko bialka",
                "url" => "https://bialkalodowisko.pl",
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => "lodowisko bialka",
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => asset('assets/logo-dark.webp'),
                ],
            ],
            "datePublished" => $post->created_at->format('Y-m-d'),
        ];

        $breadcrumbData = [
            "@context" => "https://schema.org/",
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Strona główna",
                    "item" => url('/'),
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => "Aktualności",
                    "item" => url('/aktualnosci'),
                ],
                [
                    "@type" => "ListItem",
                    "position" => 3,
                    "name" => $post->title,
                    "item" => url('/aktualnosci/' . $post->slug),
                ],
            ],
        ];
    @endphp

    <script type="application/ld+json">
        {!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <script type="application/ld+json">
        {!! json_encode($breadcrumbData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    @endslot

    <section
        class=" sm:py-28 w-full bg-center bg-fixed bg-cover bg-blend-multiply bg-primary-600 flex justify-center items-end text-white px-6 sm:px-12 xl:px-0"
        style="background-image: url({{ asset('assets/cta.webp') }})  ">

        <div class="flex flex-col justify-center items-center mx-auto text-center  max-w-screen-xl gap-16 2xl:gap-32 ">

            <div class="flex flex-col gap-6 sm:gap-12 mt-24 xl:mt-36 2xl:mt-0 px-10 sm:px-0">

                

                <div class="flex flex-col justify-center items-center py-12">
                    <x-breadcrumbs>
                        <x-breadcrumbs-item href="{{route('blog.index')}}" title="Aktualności"/>
                        <x-breadcrumbs-item href="{{route('blog.show',$post->slug)}}" title="{{$post->title}}"/>
                       
                    </x-breadcrumbs>
                    <h1 class="text-4xl sm:text-6xl 2xl:text-8xl font-heading py-2" style="line-height: 1.2">
                        {{ $post->title }}</h1>
                    <span class="text-sm">{{ $post->getPublishedDate() }}</span>

                </div>


            </div>

        </div>

    </section>

    <x-section id="article">

        <article class="prose prose-p:text-lg max-w-screen-lg mx-auto py-24">

            <img src="{{ asset('storage/' . $post->thumbnail_mobile) }}" alt="miniaturka posta - {{ $post->title }}"
                class='md:hidden w-full aspect-video object-cover rounded-lg pb-6' />
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="miniaturka posta - {{ $post->title }}"
                class='hidden md:block w-full aspect-video object-cover rounded-lg pb-6' />

            {!! $post->content !!}

        </article>

    </x-section>

</x-layouts.app>