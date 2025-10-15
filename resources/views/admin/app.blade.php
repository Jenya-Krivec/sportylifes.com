<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#" xml:lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <meta name="title" content="@yield('title')">
    <meta name="robots" content="all, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta name="robots" content="noindex">
    <title>@yield('title')</title>
    <meta name="theme-color" content="#fbbf24">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico').'?v='.filemtime('img/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/tailwind.css').'?v='.filemtime('css/tailwind.css')}}">
</head>
<body>
<div class="fixed top-0 left-0 w-full h-full bg-white z-30" id="preloader">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-green-600"></div>
    </div>
</div>
<header class="bg-green-600 shadow-sm fixed w-full z-30">
    <nav class="flex items-center py-5 w-full">
        <a href="{{route('index')}}" class="mx-2 sm:mx-10 flex justify-center items-center">
            <img src="{{asset('img/logo/logo.png').'?v='.filemtime('img/logo/logo.png')}}" alt="SPORTBETREVIEWS" class="w-14 logo" width="260" height="100">
            <p class="text-xs text-white text-center font-bold stagger mt-2" aria-label="SPORTBETREVIEWS">
                <span>S</span>
                <span>P</span>
                <span>O</span>
                <span>R</span>
                <span>T</span>
                <span>B</span>
                <span>E</span>
                <span>T</span>
                <span>R</span>
                <span>E</span>
                <span>V</span>
                <span>I</span>
                <span>E</span>
                <span>W</span>
                <span>S</span>
            </p>
        </a>
        @if(Auth::check())
        <!--Menu-->
        <div class="items-center text-white hidden sm:flex">
            <div class="relative">
                <a class="dropdown-item mx-2 hover:bg-green-700 p-2 transition-all duration-500" href="{{route('admin.bookmakers')}}">Bookmakers</a>
                <a class="dropdown-item mx-2 hover:bg-green-700 p-2 transition-all duration-500" href="{{route('admin.payments')}}">Payments</a>
                <a class="dropdown-item mx-2 hover:bg-green-700 p-2 transition-all duration-500" href="{{route('admin.currencies')}}">Currencies</a>
                <a class="dropdown-item mx-2 hover:bg-green-700 p-2 transition-all duration-500" href="{{route('admin.sports')}}">Sports</a>
            </div>
        </div>
         <!--Information-->
        <div class="relative align-self-center ml-auto mr-2">
            <button class="text-white focus:outline-none mr-4 w-8 h-8 rounded-full flex justify-center items-center border-2 border-white cursor-pointer hover:bg-green-700 p-2 transition-all duration-500" title="Information" id="information">?</button>
        </div>
        <div id="information-menu" class="fixed -right-1/2 w-1/2 top-22 transition-all bg-white z-40 p-2 border-2 border-green-600 overflow-y-auto" style="height: calc(100vh - 90px);">
            @yield('information')
        </div>
        <div class="relative align-self-center">
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="flex items-center text-white pl-2 pr-1 py-1 mr-4 cursor-pointer hover:bg-green-700 p-2 transition-all duration-500" title="Logout">
                    <!-- SVG door -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v16a1 1 0 01-1 1H4a1 1 0 01-1-1V4z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h5m-2-2l2 2-2 2" />
                    </svg>
                </button>
            </form>
        </div>
        @endif
    </nav>
</header>
@yield('content')
<div class="fixed inset-0 bg-black opacity-50 z-10 hidden" id="overlay"></div>
<div class="fixed top-0 left-0 right-0 bottom-0 bg-green-600 z-50 flex lg:hidden justify-center items-center flex-col">
    <img src="{{asset('img/logo/logo.png').'?v='.filemtime('img/logo/logo.png')}}" class="w-20 h-15 logo" alt="SPORTBETREVIEWS">
    <p class="text-sm text-white mt-2">To edit, open the website on a desktop</p>
</div>
<footer class="bg-green-600 py-5">
    <p class="text-sm text-white text-center font-bold">&copy; {{ date('Y') }} SPORTBETREVIEWS</p>
</footer>
</body>
<script defer type="text/javascript" src="{{asset('js/preloader.js').'?v='.filemtime('js/preloader.js')}}"></script>
@if(Auth::check())
<script defer type="text/javascript" src="{{asset('js/link.js').'?v='.filemtime('js/link.js')}}"></script>
<script defer type="text/javascript" src="{{asset('js/admin/information.js').'?v='.filemtime('js/admin/information.js')}}"></script>
@endif
</html>

