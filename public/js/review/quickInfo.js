'use strict';
class QuickInfo{
    /**
     * Class constructor.
     * @constructor
     */
    constructor(){
        this.images = document.querySelectorAll('#quick-info > div > div > img');
    }
    /**
     * Adds event listeners to the language dropdown button.
     */
    addEventListeners(){
        /**
         * Shows the dropdown menu.
         */
        for (let key = 0; key < this.images.length; key++){
            this.images[key].addEventListener('click', this.showTooltip.bind(this));
        }
    }
    showTooltip(event){
        const element = event.target;
        const title = element.getAttribute('title');
        const parent = element.parentNode;
        this.deleteTooltip(parent);
        const rect = element.getBoundingClientRect();
        const parentRect = parent.getBoundingClientRect();
        const relativeX = rect.x - parentRect.x;
        const relativeY = rect.y - parentRect.y;
        const tooltip = document.createElement('div');
        tooltip.classList.add('absolute', 'bg-white', 'px-2', 'py-1', 'rounded-md', 'shadow-lg', 'z-10');
        tooltip.style.top = relativeY - 30 + 'px';
        tooltip.style.left = relativeX + 'px';
        tooltip.textContent = title;
        event.target.parentElement.appendChild(tooltip);
        setTimeout(this.deleteTooltip.bind(this, parent), 1000);

    }
    deleteTooltip(parent){
        const tooltip = parent.querySelectorAll('div');
        for (let key = 0; key < tooltip.length; key++){
            tooltip[key].remove();
        }
    }
}
new QuickInfo().addEventListeners();
