@extends('app')

@section('title', trans('mobileapp.title', ['bookmaker' => $bookmaker['name']]))

@section('description',  trans('mobileapp.description', ['bookmaker' => $bookmaker['name']]))

@section('keywords', trans('mobileapp.keywords', ['bookmaker' => $bookmaker['name']]))

@section('content')
    <main class="pt-16 bg-gray-100 font-serif">
        <!-- Banner -->
        <div class="flex justify-between flex-col sm:flex-row relative sm:p-2 sm:py-8 mb-2 border-b-2 border-green-600 bg-white">
            <div class="flex justify-center">
                <div class="flex flex-col justify-around flex-shrink-0 self-stretch w-full sm:w-auto sm:rounded-md p-2" style="background-color: {{$bookmaker['logo_color']}}">
                    <div class="flex justify-center items-center">
                        <a href="{{$bookmaker['url']}}" target="_blank" class="flex rounded-sm">
                            <img src="{{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }}" class="h-10" alt="{{$bookmaker['name']}} logo" width="100" height="100">
                        </a>
                    </div>
                    <div class="flex justify-between items-center text-white">
                        <div class="flex items-center mx-3">
                            <div class="text-2xl sm:text-4xl text-center" data-rate-value-id="{{$bookmaker['id']}}">{{$bookmaker['rating']}}</div>
                            <p class="pt-3">/5</p>
                        </div>
                        <p class="rate-count text-xs xl:text-base" data-rate-count-id="{{$bookmaker['id']}}">{{$bookmaker['rating_count']}}</p>
                    </div>
                    <div class="rate flex mx-auto justify-between w-40" data-rate-id="{{$bookmaker['id']}}">
                        <input name="rate" value="1" type="checkbox" aria-label="One star">
                        <input name="rate" value="2" type="checkbox" aria-label="Two stars">
                        <input name="rate" value="3" type="checkbox" aria-label="Three stars">
                        <input name="rate" value="4" type="checkbox" aria-label="Four stars">
                        <input name="rate" value="5" type="checkbox" aria-label="Five stars">
                    </div>
                </div>
            </div>
            <div class="flex justify-between flex-col bg-green-600 sm:rounded-md sm:mx-2">
                <div class="text-white mx-4">
                    <h1 class="md:text-2xl lg:text-4xl font-bold text-center mt-2">@lang('mobileapp.Mobile App')</h1>
                </div>
                <div class="flex flex-col text-white justify-around w-full self-stretch rounded-md p-2 mr-2 mt-1 font-sans">
                    <div class="text-sm lg:text-base">{{$bookmaker['warning_'.app()->getLocale()]}}</div>
                </div>
                <div class="flex flex-col justify-around flex-shrink-0 self-stretch rounded-md p-2 mx-1 md:mx-auto">
                    <div class="flex flex-row sm:flex-col lg:flex-row justify-center items-center">
                        <span data-url="{{$bookmaker['url']}}" class="m-2 h-10 w-24 md:w-36 bg-white text-xs md:text-sm text-black rounded-md hover:bg-yellow-400 flex justify-center items-center cursor-pointer transition-all duration-500 shadow-gray-400">
                            <span data-url="{{$bookmaker['url']}}">@lang('mobileapp.Download')</span>
                            <img data-url="{{$bookmaker['url']}}" src="{{asset('img/mobileapp/android.png'.'?v='.filemtime('img/mobileapp/android.png'))}}" alt="android" width="32" height="32" class="w-4 ml-1">
                        </span>
                        <span data-url="{{$bookmaker['url']}}" class="m-2 h-10 w-24 md:w-36 bg-white text-xs md:text-sm text-black rounded-md hover:bg-yellow-400 flex justify-center items-center cursor-pointer transition-all duration-500 shadow-gray-400">
                            <span data-url="{{$bookmaker['url']}}">@lang('mobileapp.Download')</span>
                            <img data-url="{{$bookmaker['url']}}" src="{{asset('img/mobileapp/ios.png'.'?v='.filemtime('img/mobileapp/ios.png'))}}" alt="android" width="32" height="32" class="w-4 ml-1">
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-around flex-shrink-0 self-stretch rounded-md p-2 sm:border-2 border-green-600">
                <p class="text-center">@lang('mobileapp.Contents')</p>
                <?php $index = 1; ?>
                @foreach($page as $component)
                    @if($component['component'] === 'h2')
                        <span data-href="{{json_decode($component['value_'.app()->getLocale()], true)[0]}}" class="text-green-600 cursor-pointer anchor text-base sm:text-xs md:text-base">{{$index++.'. '.json_decode($component['value_'.app()->getLocale()], true)[0]}}</span>
                    @endif
                @endforeach
            </div>
        </div>
        <!--Navigation -->
        <div class="w-full flex justify-center items-center text-blue-700 pt-4 text-sm sm:text-base text-center bg-gray-100">
            <a href="{{route('review', $bookmaker['key'])}}" class="bg-green-600 text-xs sm:text-lg border-2 border-green-600 text-white hover:text-black rounded-md hover:bg-gray-100 flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">{{trans('mobileapp.Review', ['bookmaker' => ''])}}</a>
            <a href="{{route('promocode', $bookmaker['key'])}}" class="bg-green-600 text-xs sm:text-lg border-2 border-green-600 text-white hover:text-black rounded-md hover:bg-gray-100 flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">{{trans('mobileapp.Promotions and Bonuses', ['bookmaker' => ''])}}</a>
            <div class="text-xs sm:text-lg border-2 border-green-600 rounded-md bg-gray-100 text-black flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">
                <p>{{trans('mobileapp.Mobile App', ['bookmaker' => ''])}}</p>
            </div>
        </div>
        <!--Review-->
        <div class="w-full bg-gray-100 px-0 my-4 lg:px-28">
            <div class="px-2 sm:px-10 py-4 bg-white mx-auto" style="max-width: 1200px">
                @foreach($page as $component)
                    @include('inc/component_'.$component['component'], ['key' => $component['key'], 'values' => json_decode($component['value_'.app()->getLocale()], true)])
                @endforeach
            </div>
        </div>
        <div class="w-full bg-gray-100 px-0 mt-4 lg:px-28">
            <div class="px-2 sm:px-10 py-4 bg-white flex justify-center mx-auto" style="max-width: 1200px">
                <span data-url="{{$bookmaker['url']}}" class="bg-green-600 text-xs sm:text-lg border-2 border-green-600 text-black rounded-md hover:bg-white flex justify-center items-center cursor-pointer transition-all duration-500 my-2 mx-auto px-4 sm:px-16 py-2">
                    <span data-url="{{$bookmaker['url']}}">@lang('mobileapp.Download')</span>
                    <img data-url="{{$bookmaker['url']}}" src="{{asset('img/mobileapp/android.png'.'?v='.filemtime('img/mobileapp/android.png'))}}" alt="android" width="32" height="32" class="w-4 ml-1">
                </span>
                <span data-url="{{$bookmaker['url']}}" class="bg-green-600 text-xs sm:text-lg border-2 border-green-600 text-black rounded-md hover:bg-white flex justify-center items-center cursor-pointer transition-all duration-500 my-2 mx-auto px-4 sm:px-16 py-2">
                    <span data-url="{{$bookmaker['url']}}">@lang('mobileapp.Download')</span>
                    <img data-url="{{$bookmaker['url']}}" src="{{asset('img/mobileapp/ios.png'.'?v='.filemtime('img/mobileapp/ios.png'))}}" alt="android" width="32" height="32" class="w-4 ml-1">
                </span>
            </div>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/mobileapp/rate.js').'?v='.filemtime('js/mobileapp/rate.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/review/anchor.js').'?v='.filemtime('js/review/anchor.js') }}"></script>
@endsection

