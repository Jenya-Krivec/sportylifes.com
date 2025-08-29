<div class="flex flex-col justify-between w-full p-2 mb-2 border-b-2 border-gray-200">
    @if($authorized)
    <a href="{{route('admin.editBookmaker', $bookmaker['key'])}}" title="edit" class="absolute z-20 bottom-0 right-0 text-xs bg-gray-300 rounded-br-md rounded-tl-md w-5 h-5 flex justify-center items-center">&#x270F;</a>
    @endif
    <div class="flex justify-between flex-col sm:flex-row relative">
        <div class="flex justify-between self-stretch rounded-md flex-row sm:flex-col lg:flex-row" style="background-color: {{$bookmaker['logo_color']}}">
            <div class="flex justify-center items-center">
                <div class="flex justify-center items-center mx-2">
                    <p class="text-base text-white font-bold">{{$iteration}}</p>
                </div>
                <div class="flex justify-center items-center w-20 sm:w-40 h-20 lg:h-40">
                    <a href="{{$bookmaker['url']}}" target="_blank" class="flex rounded-sm">
                        <img src="{{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }}" class="h-10" alt="{{$bookmaker['name']}} logo" width="100" height="100">
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-around flex-shrink-0 self-stretch w-52 p-2 mx-1 md:mx-auto mb-4 lg:mb-0 text-white">
                <div class="flex justify-between items-center">
                    <p class="text-xs xl:text-base">@lang('index.Rate it')!</p>
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
        <div class="flex justify-between z-10 w-full mt-1 sm:mt-0 sm:ml-1 md:ml-4">
            <div class="flex flex-col justify-around w-full self-stretch rounded-md p-2 font-sans bg-green-600 text-white box">
                <div class="text-xs sm:text-base mb-2 z-10">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</div>
                <div class="text-xs sm:text-base z-10">{{$bookmaker['bonus_label_2_'.app()->getLocale()]}}</div>
                <div class="ball scale-50 sm:scale-100 {{['football', 'basketball', 'volleyball', 'handball'][array_rand([0, 1, 2, 3])]}}" style="">
                    <div class="pentagon p1"></div>
                    <div class="pentagon p2"></div>
                    <div class="pentagon p3"></div>
                    <div class="pentagon p4"></div>
                    <div class="pentagon p5"></div>
                    <div class="pentagon p6"></div>
                    <div class="pentagon p7"></div>
                    <div class="pentagon p8"></div>
                </div>
            </div>
            <div class="flex flex-col justify-around flex-shrink-0 self-stretch sm:w-36 rounded-md p-2 ml-1 md:ml-4 border-2 border-green-600">
                <div class="text-xs sm:text-sm text-center">@lang('index.Promo code'):</div>
                <div class="flex bg-green-600 w-min pr-2 mx-auto text-white rounded-md border-2 border-white border-dashed">
                    <p class="p-1 font-bold text-sm sm:text-md">{{$bookmaker['promo_code']}}</p>
                    <span data-url="{{$bookmaker['url']}}" class="cope-promo-code" aria-label="Get promo code"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-between w-full pt-4">
        @foreach($bookmaker['review'] as $review)
            @if($loop->last)
                <p class="text-xs md:text-base text-gray-700 text-justify indent-10 sm:indent-14 mb-4">{{json_decode($review['value_'.app()->getLocale()], true)[0].'..'}}</p>
            @else
                <p class="text-xs md:text-base text-gray-700 text-justify indent-10 sm:indent-14 mb-4">{{json_decode($review['value_'.app()->getLocale()], true)[0]}}</p>
            @endif
        @endforeach
        <a href="{{route('review', $bookmaker['key'])}}" class="text-green-700 text-center">@lang('index.Read more')</a>
    </div>
</div>
