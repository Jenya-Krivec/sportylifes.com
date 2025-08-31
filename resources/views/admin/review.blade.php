@extends('admin.app')

@section('title', Auth::user()->name.' '.Auth::user()->surname)

@section('information')
    <p>To add a new element to the page:</p>
    <p>1. Click the + button on the left</p>
    <p>2. Select an element from the list that appears on the left</p>
    <p>3. Choose the location where you want to add it</p>
    <p>4. Fill in all fields in English, Spanish, French, and Portuguese (on the right side of the element, there is a language switch menu)</p>
    <p>5. Click the ✓ button on the right to save all your edits</p>
    <br>
    <p>Image upload is done in two steps:</p>
    <p>1.Upload a .webp image for the desktop version of the website (recommended aspect ratio – 900x450)</p>
    <p>2. Upload a .webp image for the mobile version of the website (recommended aspect ratio – 360x360)</p>
    <p>Once uploaded successfully, the image will be displayed.</p>
    <p>Attention! Files for the desktop and mobile versions of the website must have the same file extension.</p>
    <br>
    <p>To delete an element, click the X button located on the right next to each element.</p>
    <p>In some elements, such as the Pros & Cons table, there are + buttons at the bottom that allow you to add new rows to the table.</p>
    <p>If you need to delete a row in the table, simply leave it empty for all languages.</p>
@endsection

@section('content')
    <main class="pt-16 bg-gray-100 font-serif">
        <div>
            @if($errors->any())
                <ul class="list-disc pl-5 my-4">
                    @foreach($errors->all() as $error)
                        <li class="text-base text-red-700">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
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
                    <h1 class="md:text-2xl lg:text-4xl font-bold text-center mt-2">{{trans('review.Review', ['bookmaker' => $bookmaker['name']])}}</h1>
                </div>
                <div class="flex flex-col text-white justify-around w-full self-stretch rounded-md p-2 mr-2 mt-1 font-sans">
                    <div class="text-sm lg:text-base">{{$bookmaker['warning_'.app()->getLocale()]}}</div>
                </div>
                <div class="flex flex-col justify-around flex-shrink-0 self-stretch rounded-md p-2 mx-1 md:mx-auto">
                    <div class="flex justify-center items-center">
                        <span data-url="{{$bookmaker['url']}}" class="h-10 w-36 bg-white text-sm text-black rounded-md hover:bg-yellow-400 flex justify-center items-center cursor-pointer transition-all duration-500 shadow-gray-400">@lang('review.Claim') &#8594;</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-around flex-shrink-0 self-stretch rounded-md p-2 sm:border-2 border-green-600">
                <p class="text-center">@lang('review.Contents')</p>
                <?php $index = 1; ?>
                @foreach($review as $component)
                    @if($component['component'] === 'h2')
                        <span data-href="{{json_decode($component['value_'.app()->getLocale()], true)[0]}}" class="text-green-600 cursor-pointer anchor text-base sm:text-xs md:text-base">{{$index++.'. '.json_decode($component['value_'.app()->getLocale()], true)[0]}}</span>
                    @endif
                @endforeach
            </div>
        </div>
        <!--Navigation -->
        <div class="w-full flex justify-center items-center text-blue-700 py-4 text-sm sm:text-base text-center bg-gray-100 relative">
            <div class="text-xs sm:text-lg border-2 border-green-600 rounded-md bg-gray-100 text-black flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">
                <p>{{trans('review.Review', ['bookmaker' => ''])}}</p>
            </div>
            <a href="{{route('promocode', $bookmaker['key'])}}" class="bg-green-600 text-xs sm:text-lg border-2 border-green-600 text-white rounded-md hover:bg-gray-100 hover:text-black flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">{{trans('review.Promotions and Bonuses', ['bookmaker' => ''])}}</a>
            <a href="{{route('mobileapp', $bookmaker['key'])}}" class="bg-green-600 text-xs sm:text-lg border-2 border-green-600 text-white rounded-md hover:bg-gray-100 hover:text-black flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">@lang('review.Mobile App')</a>
            <button class="flex items-center text-white bg-green-600 rounded-full cursor-pointer absolute -bottom-8 hidden add-after" data-id="0" title="add component after" style="left:8.5rem;">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>
                    <path d="M12 18l-4-4h8l-4 4z"/>
                </svg>
            </button>
        </div>
        <!--Reviews-->
        <form method="POST" action="{{route('admin.storeReview', ['key' => $bookmaker['key']])}}" enctype="multipart/form-data" class="w-full bg-gray-100 px-0 lg:px-28 form">
            <div class="px-2 sm:px-10 py-4 bg-white">
                @csrf
                @foreach($review as $component)
                    @include('admin/inc/edit_'.$component['component'], ['id' => $component['id'], 'key' => $component['key'], 'values' => ['en' => $component['value_en'], 'es' => $component['value_es'], 'fr' => $component['value_fr'], 'pt' => $component['value_pt']]])
                @endforeach
            </div>
            <div class="w-full bg-gray-100 px-0 mt-4">
                <div class="px-2 sm:px-10 py-4 bg-white">
                    <span data-url="{{$bookmaker['url']}}" class="bg-green-600 text-xs sm:text-lg border-2 border-green-600 text-white rounded-md hover:bg-white hover:text-black flex justify-center items-center cursor-pointer transition-all w-44 duration-500 my-2 mx-auto px-16 py-2">@lang('review.Claim')</span>
                </div>
            </div>
            <input id="save-btn" class="flex justify-center items-center bg-green-600 rounded-full cursor-pointer transition-all duration-500 text-white h-10 w-10 text-xl fixed bottom-1/2 right-1 hover:bg-white hover:text-black border-2 border-green-600" title="Save all" type="submit" value="&#x2713;">
        </form>
        <div id="add-section-btn" class="flex justify-center items-center bg-green-600 rounded-full cursor-pointer transition-all duration-500 text-white h-10 w-10 text-xl fixed bottom-1/2 left-1 hover:bg-white hover:text-black border-2 border-green-600" title="Add Component">+</div>
        <div id="add-section" class="fixed border-2 border-green-600 bg-white rounded-md flex justify-center items-center -left-52 p-2 flex-col bottom-1/2 transition-all duration-500 z-40" style="transform: translateY(50%);">
            <button id="close-add-section-btn" class="text-white bg-green-600 text-xs rounded-full cursor-pointer transition-all duration-500 h-5 w-5 absolute -top-2 -right-2 pb-1 hover:bg-white hover:text-black border-2 border-green-600" title="Close">x</button>
            <script>
                const bookmakerName = '{{$bookmaker['name']}}';
                const bookmakerPhone = '{{$bookmaker['phone']}}';
                const bookmakerEmail = '{{$bookmaker['email']}}';
                const sports = {en: [], es: [], fr: [], pt: []};
                const sports2 = [];
                const payments = [];
                const payments2 = [];
                const bookmakers = [];
                const currencies = [];
                const licensed = '{{$bookmaker['licensed']}}';
                const supports = [];
                const streaming = '{{$bookmaker['streaming']}}';
                const tested = '{{$bookmaker['tested']}}';
                const restrictions = [];
                @foreach(['en', 'es', 'fr', 'pt'] as $lang)
                    @foreach($bookmaker['sports'] as $sport)
                        sports['{{$lang}}'].push('{{$sport['name_'.$lang]}}');
                    @endforeach
                @endforeach
                @foreach($bookmaker['sports'] as $key => $sport)
                    sports2[{{$key}}] = {
                        'icon': '{{$sport['icon']}}',
                        'name_en': '{{$sport['name_en']}}'
                    }
                @endforeach
                @for($i = 0; $i < count($bookmaker['payments']); $i++)
                    @if($i < 16)
                        payments.push('{{$bookmaker['payments'][$i]['name']}}');
                    @endif
                @endfor
                @foreach($bookmaker['payments'] as $key => $payment)
                    payments2[{{$key}}] = {
                        'icon': '{{$payment['icon']}}',
                        'name': '{{$payment['name']}}'
                    }
                @endforeach
                @foreach($bookmaker['currencies'] as $key => $currency)
                    currencies[{{$key}}] = {
                        'key': '{{$currency['key']}}',
                        'name_en': '{{$currency['name_en']}}'
                    }
                @endforeach
                @foreach($bookmaker['supports'] as $support)
                    supports.push('{{$support['name_en']}}');
                @endforeach
                @foreach($bookmaker['restrictions'] as $restriction)
                    restrictions.push('{{$restriction['name_en']}}');
                @endforeach
                @foreach($bookmaker['bookmakers'] as $bookmaker)
                    bookmakers.push('{{$bookmaker['name']}}');
                @endforeach
            </script>
            <button class="w-full text-white border-2 border-green-600 bg-green-600 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Caption">Add Caption</button>
            <button class="w-full text-white border-2 border-green-600 bg-green-600 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Subtitle">Add Subtitle</button>
            <button class="w-full text-white border-2 border-green-600 bg-green-600 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Paragraph">Add Paragraph</button>
            <button class="w-full text-white border-2 border-green-600 bg-green-600 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Picture">Add Picture</button>
            <button class="w-full text-white border-2 border-green-600 bg-green-600 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="List">Add List</button>
            <button class="w-full text-white border-2 border-green-600 bg-green-600 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="ProsCons">Add Pros & Cons</button>
            <button class="w-full text-white border-2 border-green-600 bg-green-600 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Sports">Add Sports</button>
            <button class="w-full text-white border-2 border-green-600 bg-green-600 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Payments">Add Payments</button>
            <button class="w-full text-white border-2 border-green-600 bg-green-600 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Support">Add Support</button>
            <button class="w-full text-white border-2 border-green-600 bg-green-600 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Comparison">Add Comparison</button>
            <button class="w-full text-white border-2 border-green-600 bg-green-600 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Info">Add Quick info</button>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/review/rate.js').'?v='.filemtime('js/review/rate.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/review/quickInfo.js').'?v='.filemtime('js/review/quickInfo.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/textarea.js').'?v='.filemtime('js/admin/review/textarea.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/delete.js').'?v='.filemtime('js/admin/review/delete.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/language.js').'?v='.filemtime('js/admin/review/language.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/caption.js').'?v='.filemtime('js/admin/review/caption.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/subtitle.js').'?v='.filemtime('js/admin/review/subtitle.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/paragraph.js').'?v='.filemtime('js/admin/review/paragraph.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/picture.js').'?v='.filemtime('js/admin/review/picture.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/list.js').'?v='.filemtime('js/admin/review/list.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/prosCons.js').'?v='.filemtime('js/admin/review/prosCons.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/sports.js').'?v='.filemtime('js/admin/review/sports.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/payments.js').'?v='.filemtime('js/admin/review/payments.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/support.js').'?v='.filemtime('js/admin/review/support.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/comparison.js').'?v='.filemtime('js/admin/review/comparison.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/info.js').'?v='.filemtime('js/admin/review/info.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/review/addSection.js').'?v='.filemtime('js/admin/review/addSection.js') }}"></script>
@endsection
