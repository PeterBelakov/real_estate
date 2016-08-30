window.onload = function () {
    var html = document.getElementsByTagName('html')[0],
    body = document.getElementById('search-page')
    mainContainer = document.getElementById('main-search'),
    windowHeight = window.innerHeight,
    rightPageElementsContainer = document.getElementById('search-page-right-elements-container'),

    // Logo container
    homeLink = document.getElementsByClassName('logo-container')[0];
    
    //Offer page variables
    addititionalInfo = document.getElementById('additional-info');

    console.log(windowHeight);


    if (mainContainer) {
    html.style.height = windowHeight + 'px';

    mainContainer.style.height = (windowHeight - 100) + 'px';

    rightPageElementsContainer.style.minHeight = (windowHeight - 100 - 50) + 'px';

    initMap();

    html.addEventListener('resize', function () {
        mainContainer.style.height = (window.innerHeight - 150) + 'px';

        initMap();

        console.log('listener executed');

    });
    } 

    // Make logo link to home page
    homeLink.addEventListener('click', function () {
        window.location.href = 'index.html';
        
    });

    // Offer page JS code

    if (addititionalInfo) {
        attachHideShow(addititionalInfo);
    }

};