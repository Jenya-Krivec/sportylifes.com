<div class="relative">
    <div class="flex items-center text-white bg-green-600 rounded-full cursor-pointer transition-all duration-500 absolute -bottom-3 -left-4 hidden add-after" data-id="{{$id}}" title="Add component after Caption">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>
            <path d="M12 18l-4-4h8l-4 4z"/>
        </svg>
    </div>
    @foreach($values as $lang => $value)
        <div data-name="{{$id.'-'.$lang}}" class="@if($lang !== 'en') hidden @endif">
            <input name="{{$id.'-h2-'.$lang}}" class="text-lg px-10 pl-16 sm:text-2xl font-bold mt-4 w-full border-l-8 border-green-600" type="text" value="{{json_decode($value, true)[0]}}">
        </div>
    @endforeach
    <select class="absolute top-1 -right-11 border-2 border-green-600 text-xs rounded language" data-id="{{$id}}" title="Change language for Caption">
        <option value="en" selected>En</option>
        <option value="es">Es</option>
        <option value="fr">Fr</option>
        <option value="pt">Pt</option>
    </select>
    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" title="Delete Caption">X</div>
</div>

