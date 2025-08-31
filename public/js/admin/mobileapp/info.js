'use strict';
class Info {
    constructor() {
        this.payments = payments2;
        this.currencies = currencies;
        this.sports = sports2;
        this.licensed = licensed;
        this.supports = supports;
        this.streaming = streaming;
        this.tested = tested;
        this.restrictions = restrictions;
    }
    add(id) {
        let row = '' +
            '<div class="relative border-b-2 border-gray-200">\n' +
            '    <div class="flex items-center text-white bg-green-600 rounded-full cursor-pointer transition-all duration-500 absolute -bottom-3 -left-4 hidden add-after" onclick="new AddSection().addComponent({target: this})" data-id="'+(id+1)+'" title="Add component after Quick info">\n' +
            '        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">\n' +
            '            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>\n' +
            '            <path d="M12 18l-4-4h8l-4 4z"/>\n' +
            '        </svg>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-en" id="quick-info">\n' +
            '        <input hidden="hidden" name="'+(id+1)+'-quick_info-en" value="1">\n';
            if(this.payments.length) {
                row += '' +
                '    <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">\n' +
                '        <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">\n' +
                '            <span class="text-base text-gray-500">Payment Methods:</span>\n' +
                '        </div>\n' +
                '        <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">\n';
                for (let i = 0; i < this.payments.length; i++) {
                    row += '' +
                    '       <img class="w-8 h-8 p-1" src="../../img/payment_icon/'+this.payments[i]['icon']+'.png" alt="'+this.payments[i]['name']+' icon" title="'+this.payments[i]['name']+'" width="66" height="66">\n';
                }
                row += '' +
                '        </div>\n' +
                '   </div>\n';
            }
            if(this.currencies.length) {
                row += '' +
                '    <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">\n' +
                '        <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">\n' +
                '             <span class="text-base text-gray-500">Currency:</span>\n' +
                '        </div>\n' +
                '        <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">\n';
                for (let i = 0; i < this.currencies.length; i++) {
                    row += '' +
                    '        <p class="px-1 text-gray-500" title="'+this.currencies[i]['key']+'">'+this.currencies[i]['name_en']+'</p>\n';
                }
                row += '' +
                '         </div>\n' +
                '    </div>\n';
            }
            if(this.sports.length) {
                row += '' +
                '     <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">\n' +
                '         <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">\n' +
                '              <span class="text-base text-gray-500">Sports:</span>\n' +
                '         </div>\n' +
                '         <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">\n';
                for (let i = 0; i < this.sports.length; i++) {
                    row += '' +
                    '        <img class="w-8 h-8 p-1" src="../../img/sport_icon/'+this.sports[i]['icon']+'.png" alt="'+this.sports[i]['name_en']+' icon" title="'+this.sports[i]['name_en']+'" width="66" height="66">\n';
                }
                row += '' +
                '          </div>\n' +
                '     </div>\n';
            }
            if(this.licensed) {
                row += '' +
                '     <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">\n' +
                '         <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">\n' +
                '              <span class="text-base text-gray-500">Licensed/Regulated by:</span>\n' +
                '         </div>\n' +
                '         <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">\n' +
                '              <p class="p-1 text-gray-500">'+this.licensed+'</p>\n' +
                '         </div>\n' +
                '    </div>\n';
            }
            if(this.supports.length) {
                row += '' +
                '    <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-green-600 border-b-2 flex-col sm:flex-row mx-auto" style="max-width: 1200px">\n' +
                '        <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">\n' +
                '             <span class="text-base text-gray-500">Customer Support:</span>\n' +
                '        </div>\n' +
                '        <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">\n';
                this.supports.forEach(support => {
                    row += '' +
                    '         <p class="px-1 text-gray-500">'+support+'</p>\n';
                })
                row += '' +
                '        </div>\n' +
                '   </div>\n';
            }
            row += '' +
            '        <div class="w-full flex justify-center items-center p-2 py-4 bg-white @if($bookmaker[\'restrictions\']) border-green-600 border-b-2 @endif mx-auto" style="max-width: 1200px">\n' +
            '            <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 justify-center">\n' +
            '                <span class="text-base text-gray-500">Live Streaming:</span>\n' +
            '            </div>\n' +
            '            <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">\n';
            if(this.streaming){
                row += '' +
            '                <div class="flex-row flex justify-center items-center text-green-600 border-2 border-green-600 w-6 h-6 ml-5 rounded-sm">&check;</div>\n';
            } else {
                row += '' +
            '                <div class="flex-row flex justify-center items-center cursor-default text-gray-500 border-2 border-gray-500 bg-red-200 w-6 h-6 ml-5 rounded-sm">X</div>\n';
            }
            row += '' +
            '            </div>\n' +
            '            <div class="hidden sm:flex sm:justify-end items-center flex-shrink-0 justify-center">\n' +
            '                <span class="text-base text-gray-500">Tested Betting Sites:</span>\n' +
            '            </div>\n' +
            '            <div class="relative flex-row hidden sm:flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">\n';
            if(this.tested) {
                row += '' +
                '            <div class="flex-row flex justify-center items-center text-green-600 border-2 border-green-600 w-6 h-6 ml-5 rounded-sm">&check;</div>\n';
            }else {
                row += '' +
                '            <div class="flex-row flex justify-center items-center cursor-default text-gray-500 border-2 border-gray-500 bg-red-200 w-6 h-6 ml-5 rounded-sm">X</div>\n';
            }
            row += '' +
            '            </div>\n' +
            '        </div>\n';
            if(this.restrictions.length) {
                row += '' +
                '    <div class="w-full flex justify-center items-center p-2 py-4 bg-white flex-col sm:flex-row mx-auto" style="max-width: 1200px">\n' +
                '        <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">\n' +
                '             <span class="text-base text-gray-500">Responsible Gambling:</span>\n' +
                '        </div>\n' +
                '    <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">\n';
                this.restrictions.forEach(restriction => {
                    row += '' +
                        ' <p class="px-1 text-gray-500">'+restriction+'</p>\n';
                })
                row += '' +
                '        </div>\n' +
                '    </div>\n';
            }
            row += '' +
            '    </div>\n' +
            '    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" title="Delete Quick info">X</div>\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > div > input[name="_token"]') : document.querySelector('[data-name="' + id + '-en"]').parentElement;
        element.insertAdjacentHTML('afterend', row);
    }
}
