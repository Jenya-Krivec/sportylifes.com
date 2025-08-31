<div class="border-green-600 border-t-2 mb-4" id="quick-info">
    @if($bookmaker['payments'])
        <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">
            <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                <span class="text-base text-gray-500">@lang('review.Payment Methods'):</span>
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
                <span class="text-base text-gray-500">@lang('review.Currency'):</span>
            </div>
            <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                @foreach($bookmaker['currencies'] as $currency)
                    <p class="px-1 text-gray-500" title="{{$currency['key']}}">{{$currency['name_'.app()->getLocale()]}}@if($currency != end($bookmaker['currencies'])),@endif</p>
                @endforeach
            </div>
        </div>
    @endif
    @if($bookmaker['sports'])
        <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">
            <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                <span class="text-base text-gray-500">@lang('review.Sports'):</span>
            </div>
            <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                @foreach($bookmaker['sports'] as $sport)
                    <img class="w-8 h-8 p-1" src="{{asset('img/sport_icon/'.$sport['icon'].'.png').'?v='.filemtime('img/sport_icon/'.$sport['icon'].'.png')}}" alt="{{$sport['name_'.app()->getLocale()]}} icon" title="{{$sport['name_'.app()->getLocale()]}}" width="66" height="66">
                @endforeach
            </div>
        </div>
    @endif
    @if($bookmaker['licensed'])
        <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">
            <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                <span class="text-base text-gray-500">@lang('review.Licensed/Regulated by'):</span>
            </div>
            <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                <p class="p-1 text-gray-500">{{$bookmaker['licensed']}}</p>
            </div>
        </div>
    @endif
    @if($bookmaker['supports'])
        <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">
            <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                <span class="text-base text-gray-500">@lang('review.Customer Support'):</span>
            </div>
            <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                @foreach($bookmaker['supports'] as $support)
                    <p class="px-1 text-gray-500">{{$support['name_'.app()->getLocale()]}}@if($support != end($bookmaker['supports'])),@endif</p>
                @endforeach
            </div>
        </div>
    @endif
    <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 mx-auto" style="max-width: 1200px">
        <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 justify-center">
            <span class="text-base text-gray-500">@lang('review.Live Streaming'):</span>
        </div>
        <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
            @if($bookmaker['streaming'])
                <div class="flex-row flex justify-center items-center text-green-600 border-2 border-green-600 w-6 h-6 ml-5 rounded-sm">&check;</div>
            @else
                <div class="flex-row flex justify-center items-center cursor-default text-gray-500 border-2 border-gray-500 bg-red-200 w-6 h-6 ml-5 rounded-sm">X</div>
            @endif
        </div>
        <div class="hidden sm:flex sm:justify-end items-center flex-shrink-0 justify-center">
            <span class="text-base text-gray-500">@lang('review.Tested Betting Sites'):</span>
        </div>
        <div class="relative flex-row hidden sm:flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
            @if($bookmaker['tested'])
                <div class="flex-row flex justify-center items-center text-green-600 border-2 border-green-600 w-6 h-6 ml-5 rounded-sm">&check;</div>
            @else
                <div class="flex-row flex justify-center items-center cursor-default text-gray-500 border-2 border-gray-500 bg-red-200 w-6 h-6 ml-5 rounded-sm">X</div>
            @endif
        </div>
    </div>
    <div class="w-full flex sm:hidden justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 mx-auto" style="max-width: 1200px">
        <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 justify-center">
            <span class="text-sm text-gray-500">@lang('review.Tested Betting Sites'):</span>
        </div>
        <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
            @if($bookmaker['tested'])
                <div class="flex-row flex justify-center items-center text-green-600 border-2 border-green-600 w-6 h-6 ml-5 rounded-sm">&check;</div>
            @else
                <div class="flex-row flex justify-center items-center cursor-default text-gray-500 border-2 border-gray-500 bg-red-200 w-6 h-6 ml-5 rounded-sm">X</div>
            @endif
        </div>
    </div>
    @if($bookmaker['restrictions'])
        <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">
            <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                <span class="text-base text-gray-500">@lang('review.Responsible Gambling'):</span>
            </div>
            <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                @foreach($bookmaker['restrictions'] as $restriction)
                    <p class="px-1 text-gray-500">{{$restriction['name_'.app()->getLocale()]}}@if($restriction != end($bookmaker['restrictions'])),@endif</p>
                @endforeach
            </div>
        </div>
    @endif
</div>
