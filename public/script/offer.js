
// Attach hide-show functions ____________________________________________________________________________________________________________
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

// End of show-hide functions attach ____________________________________________________________________________________________________________


// Attach galery btns functions ____________________________________________________________________________________________________________
function galerySlide (galery,directionRight) {
    return function (event) {
       let windowWidth = window.innerWidth,
       galeryWidth = galery.offsetWidth,
       leftPosition,
       pixelsToMove = 0;
       console.log(galery);

       if (parseInt(galery.style.left)) {
            leftPosition = parseInt(galery.style.left)
        } else {
                leftPosition = 0;
        }

        //if right
        if (directionRight) {
            if (((galeryWidth - windowWidth) + leftPosition) < windowWidth && ((galeryWidth - windowWidth) + leftPosition) > 0) {
                leftPosition = leftPosition-(galeryWidth-windowWidth);
            } else if (((galeryWidth - windowWidth) + leftPosition) > windowWidth){
                leftPosition = leftPosition-(windowWidth);
            }
        } else {
            if (galeryWidth < windowWidth) {

            } else {
                if (-(leftPosition) <= windowWidth) {
                    leftPosition = 0;
                } else if ((galeryWidth - windowWidth) > windowWidth) {
                    leftPosition = leftPosition + windowWidth;
                }
            }
        }


       galery.style.left = leftPosition + 'px';

       event.preventDefault();
    }
}

function attachBtnFunctions () {
    var galery = document.getElementById("galery"),
    slideRightBtn = document.getElementById("galery-btn-right"),
    slideLeftBtn = document.getElementById('galery-btn-left');

    slideRightBtn.addEventListener('click', galerySlide(galery,true), false);
    slideLeftBtn.addEventListener('click', galerySlide(galery, false), false);
}

// End of galery btns functions attach______________________________________________________________________________________________________________________________________________

// Set galery initial position______________________________________________________________________________________________________________________________________________________
function setGaleryInitialPosition (galery) {
    var galeryWidth = parseInt(galery.style.width),
    windowWidth = window.innerWidth;

    if (galeryWidth < windowWidth) {
        galery.style.left = parseInt((windowWidth - galeryWidth) / 2) + 'px';
    }
}

// Set galery width_________________________________________________________________________________________________________________________________________________________________

function  setGaleryWidth(galery) {
    var videos = galery.getElementsByTagName('video'),
    imgs = galery.getElementsByTagName('img'),
    i,k,
    galeryWidth = 0,
    videosLength, imgsK;

    for (i = 0, videosLength = videos.length; i < videosLength; i += 1) {
        galeryWidth += 500;
    };

    if (imgs.Length % 2 > 0) {
        imgsK = (imgs.Length % 2) + 1;
    } else {
        imgsK = imgs.length / 2;
    }

    for (k = 0; k < imgsK; k+=1) {
        galeryWidth += 250;
    };

    galery.style.width = galeryWidth + 'px';

}