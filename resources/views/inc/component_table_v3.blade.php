<table class="w-full border-collapse border-2 border-gray-200 shadow-gray-400 shadow-lg mb-6">
    <tbody>
        <tr class="bg-green-600">
            <th colspan="4" class="text-base px-1 py-2 text-white font-bold">{{$bookmaker['name']}} @lang('review.Sports')</th>
        </tr>
        @foreach($bookmaker['sports'] as $sport)
            @if($loop->index % 4 === 0)
                <tr class="{{ $loop->index % 8 === 0 ? '' : 'bg-gray-100' }}">
            @endif
                <td class="text-xs sm:text-sm px-1 py-2 sm:p-2 w-1/4 border-2 border-gray-200">{{$sport['name_'.app()->getLocale()]}}</td>
            @if($loop->last && $loop->count % 4 !== 0)
                @for($i = 0; $i < 4 - ($loop->index + 1) % 4; $i++)
                    <td class="text-xs sm:text-sm px-1 py-2 sm:p-2 w-1/4 border-2 border-gray-200">&nbsp;</td>
                @endfor
            @endif
            @if(($loop->index + 1) % 4 === 0)
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

