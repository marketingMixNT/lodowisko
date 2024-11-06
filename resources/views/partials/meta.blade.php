

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