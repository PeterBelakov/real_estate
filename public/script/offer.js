function hideShowElement (element) {
    return function(event) {
        let maxHeight = element.style.maxHeight;

        if (maxHeight == 0 + 'px' || maxHeight == '') {
            element.style.maxHeight = 700 + 'px';
        } else {
            element.style.maxHeight = 0 + 'px';
        }

        event.preventDefault();
    };
}

function attachHideShow (element) {
    var moreBtn = document.getElementById('show-add-info'),
    lessBtn = document.getElementById('hide-add-info');

    moreBtn.addEventListener('click', hideShowElement(element),false);

    lessBtn.addEventListener('click', hideShowElement(element),false);

}