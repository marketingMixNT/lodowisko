

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<meta name="keywords" content="lodowisko Białka Tatrzańska, lodowisko w górach, jazda na łyżwach Białka Tatrzańska, atrakcje zimowe Białka Tatrzańska, lodowisko Tatry, lodowisko dla dzieci Białka Tatrzańska, wypożyczalnia łyżew Białka, lodowisko otwarte, łyżwy Białka Tatrzańska,, ferie zimowe Białka Tatrzańska, lodowisko blisko Zakopanego, atrakcje na ferie, rodzinne lodowisko Białka Tatrzańska">


<meta name="author" content="Biała Owca Lodowisko">

@if ($noFollow)
<meta name="robots" content="noindex, nofollow">
@else
<meta name="robots" content="index, follow">
@endif

<link rel="canonical" href="{{ url()->current() }}" />

<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="https://lodowiskobialka.pl">
<meta property="og:type" content="website">
<meta property="og:image" content="{{asset('assets/o-nas-1.webp')}}">

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NGO",
      "name": "Lodowisko Biała Owca",
      "url": "https://bialkalodowisko.pl/",
      "logo": "https://bialkalodowisko.pl/assets/logo-dark.webp",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "kontakt@lodowiskobialka.pl",
        "contactType": "customer service",
        "areaServed": "PL",
        "availableLanguage": "Polish"
      }
    }
    </script>

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Lodowisko Biała Owca",
      "image": "https://bialkalodowisko.pl/assets/o-nas-1.webp",
      "@id": "",
      "url": "https://bialkalodowisko.pl",
      "telephone": "+48 734 775 817",
      "priceRange": "20-25 PLN",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Środkowa 161",
        "addressLocality": "Białka Tatrzańska",
        "postalCode": "34-405",
        "addressCountry": "PL"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 49.3858903,
        "longitude": 20.1058989
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Sunday",
          "Saturday",
          "Friday",
          "Thursday",
          "Wednesday",
          "Tuesday",
          "Monday"
        ],
        "opens": "10:00",
        "closes": "21:00"
      } 
    }
    </script>

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

<script async src="https://app.cookieasy.pl/plugin/sko4skle4uupruu.js"></script>