<div class="relative border-b-2 border-gray-200">
    <div class="flex items-center text-white bg-green-600 rounded-full cursor-pointer transition-all duration-500 absolute -bottom-3 -left-4 hidden add-after" data-id="{{$id}}" title="Add component after Quick info">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>
            <path d="M12 18l-4-4h8l-4 4z"/>
        </svg>
    </div>
    <div data-name="{{$id.'-en'}}" id="quick-info">
        <input hidden="hidden" name="{{$id.'-quick_info-en'}}" value="1">
        @if($bookmaker['payments'])
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                    <span class="text-base text-gray-500">Payment Methods:</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    @foreach($bookmaker['payments'] as $payment)
                        <img class="w-8 h-8 p-1" src="{{ asset('img/payment_icon/'.$payment['icon'].'.png').'?v='.filemtime('img/payment_icon/'.$payment['icon'].'.png')}}" alt="{{$payment['name']}} icon" title="{{$payment['name']}}" width="66" height="66">
                    @endforeach
                </div>
            </div>
        @endif
        @if($bookmaker['currencies'])
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                    <span class="text-base text-gray-500">Currency:</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    @foreach($bookmaker['currencies'] as $currency)
                        <p class="px-1 text-gray-500" title="{{$currency['key']}}">{{$currency['name_en']}}</p>
                    @endforeach
                </div>
            </div>
        @endif
        @if($bookmaker['sports'])
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                    <span class="text-base text-gray-500">Sports:</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    @foreach($bookmaker['sports'] as $sport)
                        <img class="w-8 h-8 p-1" src="{{asset('img/sport_icon/'.$sport['icon'].'.png').'?v='.filemtime('img/sport_icon/'.$sport['icon'].'.png')}}" alt="{{$sport['name_en']}} icon" title="{{$sport['name_en']}}" width="66" height="66">
                    @endforeach
                </div>
            </div>
        @endif
        @if($bookmaker['licensed'])
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                    <span class="text-base text-gray-500">Licensed/Regulated by:</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    <p class="p-1 text-gray-500">{{$bookmaker['licensed']}}</p>
                </div>
            </div>
        @endif
        @if($bookmaker['supports'])
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                    <span class="text-base text-gray-500">Customer Support:</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    @foreach($bookmaker['supports'] as $support)
                        <p class="px-1 text-gray-500">{{$support['name_en']}}</p>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="w-full flex justify-center items-center p-2 py-4 bg-white @if($bookmaker['restrictions']) border-green-600 border-b-2 @endif mx-auto" style="max-width: 1200px">
            <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 justify-center">
                <span class="text-base text-gray-500">Live Streaming:</span>
            </div>
            <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                @if($bookmaker['streaming'])
                    <div class="flex-row flex justify-center items-center text-green-600 border-2 border-green-600 w-6 h-6 ml-5 rounded-sm">&check;</div>
                @else
                    <div class="flex-row flex justify-center items-center cursor-default text-gray-500 border-2 border-gray-500 bg-red-200 w-6 h-6 ml-5 rounded-sm">X</div>
                @endif
            </div>
            <div class="hidden sm:flex sm:justify-end items-center flex-shrink-0 justify-center">
                <span class="text-base text-gray-500">Tested Betting Sites:</span>
            </div>
            <div class="relative flex-row hidden sm:flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                @if($bookmaker['tested'])
                    <div class="flex-row flex justify-center items-center text-green-600 border-2 border-green-600 w-6 h-6 ml-5 rounded-sm">&check;</div>
                @else
                    <div class="flex-row flex justify-center items-center cursor-default text-gray-500 border-2 border-gray-500 bg-red-200 w-6 h-6 ml-5 rounded-sm">X</div>
                @endif
            </div>
        </div>
        @if($bookmaker['restrictions'])
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white flex-col sm:flex-row mx-auto" style="max-width: 1200px">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                    <span class="text-base text-gray-500">Responsible Gambling:</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    @foreach($bookmaker['restrictions'] as $restriction)
                        <p class="px-1 text-gray-500">{{$restriction['name_en']}}</p>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" title="Delete Quick info">X</div>
</div>
