//----------------Créditos------------------
//https://popper.js.org/
//------------------------------------------

const references = document.querySelectorAll('i[js_type="reference-tooltip"]');
const tooltips = document.querySelectorAll('div[class="tooltip"]');

for(var i = 0; i < references.length; i++) {
    const reference = references[i];
    const tooltip = tooltips[i];

    const popperInstance = Popper.createPopper(reference, tooltip, {
        placement: 'top',
        modifiers: [
            {
            name: 'offset',
            options: {
                offset: [0, 8],
            },
            },
        ],
    });

    function show() {
        tooltip.setAttribute('data-show', '');

        // We need to tell Popper to update the tooltip position
        // after we show the tooltip, otherwise it will be incorrect
        popperInstance.update();
    }

    function hide() {
        tooltip.removeAttribute('data-show');
    }

    const showEvents = ['mouseenter', 'focus'];
    const hideEvents = ['mouseleave', 'blur'];

    showEvents.forEach((event) => {
        reference.addEventListener(event, show);
    });

    hideEvents.forEach((event) => {
        reference.addEventListener(event, hide);
    });
}