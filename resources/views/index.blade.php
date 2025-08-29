@extends('app')

@section('title', trans('index.title').' '.date('Y'))

@section('description', trans('index.description'))

@section('keywords', trans('index.keywords'))

@section('content')
    <main class="font-serif">
        <div class="xl:px-20 sm:py-5 px-3 py-2 m-auto pt-24 sm:pt-24">
            <div class="relative">
                <h1 class="text-lg sm:text-2xl ml-10 sm:ml-14 pl-1 font-bold border-l-8 border-green-600">@lang('index.Bookmakers')</h1>
            </div>
            <div class="text-justify my-4">
                <p class="text-base text-gray-700 text-justify indent-10 sm:indent-14 mb-4 font-sans">@lang('index.paragraph1')</p>
            </div>
            <div class="text-justify my-4">
                <p class="text-base text-gray-700 text-justify indent-10 sm:indent-14 mb-4 font-sans">@lang('index.paragraph2')</p>
            </div>
            <div class="text-justify my-4">
                <p class="text-base text-gray-700 text-justify indent-10 sm:indent-14 mb-4 font-sans">@lang('index.paragraph3')</p>
            </div>
        </div>
        <hr class="border-t-2 border-gray-200">
        <div class="xl:px-20 m-auto bg-gray-100">
            <div class="p-2 bg-white mx-auto" style="max-width: 1200px">
                @foreach($bookmakers as $bookmaker)
                    @include('inc.component_bookmaker', ['bookmaker' => $bookmaker, 'iteration' => $loop->iteration, 'authorized' => false])
                @endforeach
            </div>
            <div class="bg-white xl:px-10 mx-auto" style="max-width: 1200px">
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 ml-8 sm:ml-16 pl-1 font-bold border-l-8 border-green-600">@lang('index.paragraph4')</h2>
                </div>
                <div class="text-justify mt-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-6 sm:indent-14 mb-4 font-sans">@lang('index.paragraph5')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 ml-8 sm:ml-16 pl-1 font-bold border-l-8 border-green-600">@lang('index.paragraph6')</h2>
                </div>
                <div class="text-justify mt-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-6 sm:indent-14 mb-4 font-sans">@lang('index.paragraph7')</p>
                </div>
                <div class="text-justify mt-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-6 sm:indent-14 mb-4 font-sans">@lang('index.paragraph8')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 ml-8 sm:ml-16 pl-1 font-bold border-l-8 border-green-600">@lang('index.paragraph9')</h2>
                </div>
                <div class="text-justify mt-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-6 sm:indent-14 mb-4 font-sans">@lang('index.paragraph10')</p>
                </div>
                <div class="text-justify mt-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-6 sm:indent-14 mb-4 font-sans">@lang('index.paragraph11')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 ml-8 sm:ml-16 pl-1 font-bold border-l-8 border-green-600">@lang('index.paragraph12')</h2>
                </div>
                <div class="text-justify mt-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-6 sm:indent-14 mb-4 font-sans">@lang('index.paragraph13')</p>
                </div>
                <div class="text-justify mt-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-6 sm:indent-14 mb-4 font-sans">@lang('index.paragraph14')</p>
                </div>
            </div>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/index/rate.js').'?v='.filemtime('js/index/rate.js') }}"></script>
@endsection
