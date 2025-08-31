'use strict';
class Anchor {
    constructor(){
        this.anchor = document.getElementsByClassName('anchor');
    }
    addEventListeners(){
        for (const anchor of this.anchor) {
            anchor.addEventListener('click', this.scroll.bind(this));
        }
    }
    scroll(event) {
        const anchor = event.target;
        const targetId = anchor.getAttribute('data-href');
        const targetElement = document.getElementById(targetId);
        targetElement.scrollIntoView({block: "center", behavior: 'smooth'});
    }
}
new Anchor().addEventListeners();
