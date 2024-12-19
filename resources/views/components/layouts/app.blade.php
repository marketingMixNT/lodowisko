@props(['title', 'description', 'seo' => false, 'noFollow' => false])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth scroll-p-12">

<head>
    @include('partials.meta')
    @include('partials.fonts')
    @include('partials.favicon')

    @include('partials.seo')
    {{ $seo ?? '' }}

    <script async src="https://app.cookieasy.pl/plugin/sko4skle4uupruu.js"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-text bg-bgPrimary text-fontDark overflow-x-hidden">
    @include('partials.gtm')

    <x-header />
    <x-mobile-menu />


    {{ $slot }}

    <x-footer />
    <x-mobile-buttons />

</body>

</html>