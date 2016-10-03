function getCoordinates(polygon) {
    var coordinates = [],
    rawCoordinates, length, i;

    rawCoordinates = polygon.getPath().getArray();
    
    for (i = 0, length = rawCoordinates.length; i < length; i += 1 ) {
        coordinates[i] = {
            longitude: rawCoordinates[i].lng(),
            latitude: rawCoordinates[i].lat()
            }
        }

    return coordinates;

}

function addEventListenersToCommentBtns (commentsBtns) {
    var i, len = commentsBtns.length;

    for (i = 0; i< len; i += 1) {
        commentsBtns[i].addEventListener('click', function (event) {
            var parentChildren = event.target.parentNode.children,
            commentContainer;

            commentContainer = parentChildren[parentChildren.length - 1];

            if (commentContainer.style.maxHeight != '' && commentContainer.style.maxHeight != '0px') {
                commentContainer.style.maxHeight = '0px';
            } else {
                commentContainer.style.maxHeight = '400px';
            }

            event.preventDefault();


        }, false);
    }
}

window.onload = function () {
    var html = document.getElementsByTagName('html')[0],

    //Get search page elements
    body = document.getElementById('search-page'),
    mainContainer = document.getElementById('main-search'),
    windowHeight = window.innerHeight,
    rightPageElementsContainer = document.getElementById('search-page-right-elements-container'),
    drawnObject,
    coordinatesArray = [],

    // Logo container
    homeLink = document.getElementsByClassName('logo-container')[0];
    
    //Offer page variables
    addititionalInfo = document.getElementById('additional-info'),
    galeryRightBtn = document.getElementById('galery-btn-right'),
    galeryLeftBtn = document.getElementById('galery-btn-left'),
    galery = document.getElementById('galery'),
    
    // Login/Register page
    loginLogoContainer = document.getElementById('login-logo-container'),
    
    // Get my offers page elements
    commentBtns = document.getElementsByClassName('comment-btn');

    console.log(windowHeight);

    // Search page js
    if (mainContainer) {
    html.style.height = windowHeight + 'px';

    mainContainer.style.height = (windowHeight - 100) + 'px';

    rightPageElementsContainer.style.minHeight = (windowHeight - 100 - 50) + 'px';

    initMap();

    //add start drawing btn to map
    // var drawBtn = document.createElement('DIV');
    // drawBtn.style.width = '40px';
    // drawBtn.style.height = '40px';
    // drawBtn.className += ' NavBar_Button';
    // drawBtn.style.background = 'url("images/pencil.jpg") center no-repeat';
    // drawBtn.style.backgroundSize = '100% 100%';
    // var mapNavigation = document.getElementById('MicrosoftNav');
    // console.log(mapNavigation);
    // mapNavigation.appendChile(drawBtn);

    // html.addEventListener('resize', function () {
    //     mainContainer.style.height = (window.innerHeight - 150) + 'px';

    //     initMap();

    //     console.log('listener executed');

    // });
    } 

    // Make logo link to home page

    if (homeLink){
            homeLink.addEventListener('click', function () {
            window.location.href = 'index.html';
            
        });
    }

    // Offer page JS code

    if (galery) {

        setGaleryWidth(galery);

        setGaleryInitialPosition(galery);

        if (addititionalInfo) {
            attachHideShow(addititionalInfo);
        }

        if (galeryRightBtn && galeryLeftBtn) {
        attachBtnFunctions(galery); 
        }
    }

    // Login/Register page
    if (loginLogoContainer) {
        loginLogoContainer.addEventListener('click', function() {
            window.location.href = 'index.html';
        }, false);
    }

    //My offers page script

    if (commentBtns) {
        addEventListenersToCommentBtns(commentBtns);
    }


};