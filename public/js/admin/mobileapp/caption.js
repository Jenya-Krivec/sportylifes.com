'use strict';
class Caption {
    constructor() {
    }
    add(id) {
        const row = '' +
            '<div class="relative">\n' +
            '    <div class="flex items-center text-white bg-green-600 rounded-full cursor-pointer transition-all duration-500 absolute -bottom-3 -left-4 add-after hidden" onclick="new AddSection().addComponent({target: this})" data-id="'+(id+1)+'" title="Add component after Caption">\n' +
            '        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">\n' +
            '            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"></path>\n' +
            '            <path d="M12 18l-4-4h8l-4 4z"></path>\n' +
            '        </svg>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-en">\n' +
            '        <input name="'+(id+1)+'-h2-en" class="text-lg px-0 pl-16 sm:text-2xl font-bold mt-4 w-full border-b-2 border-b-gray-200 border-l-8 border-l-green-600" type="text" value="">\n' +
            '    </div>\n' +            '' +
            '    <div data-name="'+(id+1)+'-es" class="hidden">\n' +
            '        <input name="'+(id+1)+'-h2-es" class="text-lg px-0 pl-16 sm:text-2xl font-bold mt-4 w-full border-b-2 border-b-gray-200 border-l-8 border-l-green-600" type="text" value="">\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-fr" class="hidden">\n' +
            '        <input name="'+(id+1)+'-h2-fr" class="text-lg px-0 pl-16 sm:text-2xl font-bold mt-4 w-full border-b-2 border-b-gray-200 border-l-8 border-l-green-600" type="text" value="">\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-pt" class="hidden">\n' +
            '        <input name="'+(id+1)+'-h2-pt" class="text-lg px-0 pl-16 sm:text-2xl font-bold mt-4 w-full border-b-2 border-b-gray-200 border-l-8 border-l-green-600" type="text" value="">\n' +
            '    </div>\n' +
            '    <select class="absolute top-1 -right-11 border-2 border-green-600 text-xs rounded language" data-id="'+(id+1)+'" onChange="new Language().toggle({target: this})" title="Change language for Caption">\n' +
            '       <option value="en" selected="">En</option>\n' +
            '       <option value="es">Es</option>\n' +
            '       <option value="fr">Fr</option>\n' +
            '       <option value="pt">Pt</option>\n' +
            '    </select>\n' +
            '    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" onClick="new Delete().deleteTable({target: this})" title="Delete Caption">X</div>\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > div > input[name="_token"]') : document.querySelector('[data-name="' + id + '-en"]').parentElement;
        element.insertAdjacentHTML('afterend', row);
    }
}
