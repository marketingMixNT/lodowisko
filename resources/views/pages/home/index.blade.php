<x-layouts.app title="Lodowisko Biała Owca w Białce Tatrzańskiej"
    description="Odkryj lodowisko Biała Owca! Świetna zabawa na łyżwach, wypożyczalnia sprzętu i pyszne jedzenie czekają na Ciebie w Białce Tatrzańskiej.">

    @slot('seo')
  
    
        <script type="application/ld+json">
          {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
              "@type": "Question",
              "name": "Jakie są godziny otwarcia lodowiska?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Lodowisko jest otwarte codziennie od godziny 10:00 do 21:00."
              }
            },{
              "@type": "Question",
              "name": "Ile kosztuje wstęp na lodowisko?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Bilet wstępu kosztuje 25 zł za godzinę dla dorosłych i 20 zł dla dzieci poniżej 16 lat."
              }
            },{
              "@type": "Question",
              "name": "Czy lodowisko oferuje wypożyczalnię sprzętu i jaki jest koszt?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tak, lodowisko posiada wypożyczalnię sprzętu. Koszt wypożyczenia to 20 zł , a w skład zestawu wchodzi równie kask i pingwinek."
              }
            },{
              "@type": "Question",
              "name": "Czy dostępne są zniżki grupowe?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tak, oferujemy zniżki dla grup powyżej 20 osób. Prosimy o kontakt w celu uzyskania szczegółów."
              }
            },{
              "@type": "Question",
              "name": "Czy na terenie lodowiska dostępne są punkty gastronomiczne?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tak, na terenie naszego lodowiska znajduje się punkt gastronomiczny, w której można skosztować gorącej czekolady, aromatycznej kawy oraz przekąsek. To idealne miejsce na chwilę odpoczynku po zabawie na lodzie."
              }
            }]
          }
          </script>
@endslot


    @include('pages.home.partials.hero')
    @include('pages.home.partials.about')
    @include('pages.home.partials.hire')

    @include('pages.home.partials.cta')

    @include('pages.home.partials.gastronomy')
    @include('pages.home.partials.contact')

    @include('pages.home.partials.faq')






</x-layouts.app>