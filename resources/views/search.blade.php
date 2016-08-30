<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="styles/main.css" rel="stylesheet" type="text/css"></link>
    <script async defer src="https://maps.googleapis.com/maps/api/js?v=3.0&key=AIzaSyCWEuer5sk-6jm9KQCV_wCcJUrhViN9yKU&callback=initMap"> </script>
    <script src="./script/main.js"> </script>
    <script src="./script/search-page.js"> </script>
</head>

<body id="search-page">
    <!--Header start-->
        <header class="header">
            <div class="header-elements wrapper">
                <div class="header-element logo-container">
                </div>
                <div class="header-element">
                    <a href="search.html">Продажби</a>
                    </div>
                <div class="header-element">
                    <a href="search.html">Под наем</a>
                    </div>
                <div class="header-element post-offer">
                    <a href="new-adv.html" class="btn">Публикувай обява</a>
                </div>
                <div class="header-element login-register">
                    <a href="login.html">Вход</a>
                    <span>/</span>
                    <a href="register.html">Регистрация</a>
                </div>
            </div>
        </header>
    <!--Header end-->
<!--Blue section under the header-->
        <section class="blue-section">
            <div class="blue-section-container wrapper">
                <form action="" class="search-form">
                    <input type="text" class="search-form-input" placeholder="Населено място">
                    <input type="text" class="search-form-input" placeholder="Район">
                    <input type="text" class="search-form-input" placeholder="Вид имот">
                </form>
            </div>
        </section>

    <!--End of Blue section under header-->

    <!--page content-->
        <main id="main-search">
            <div class="search-page-wrapper">
                <div class="search-page-left-wrapper" id="map-container">
                    <div id="search-map"></div>
                </div>
                <div class="search-page-right-wrapper">
                    <div id="search-page-right-elements-container">
                        <div class="search-page-right-element" id="search-right-navigation">
                            <a href="#" class="search-right-navigation-btn">Най-евтини</a>
                            <a href="#" class="search-right-navigation-btn">Нови оферти</a>
                            <a href="#" class="search-right-navigation-btn">Ново строителство</a>
                        </div>
                        <div class="search-page-right-element" id="search-right-content">
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, dolorum.
                            </div>
                            <div>
                                <a href="#">Lorem</a>
                            </div>
                        </div>
                        <div class="search-page-right-element" id="search-right-map"></div>
                    </div>
                    <!--Footer starts here-->
                    <footer class="footer">
                        <div class="footer-container wrapper">
                            <div class="footer-center">
                                <div class="footer-element follow-us">
                                    <span>Follow us:</span>
                                    <div class="social-media-icon facebook-icon"></div>
                                    <div class="social-media-icon twitter-icon"></div>
                                </div>
                            </div>
                        </div>
                    </footer>
                <!--footer ends here-->
                </div>
            </div>
        </main>
        <!--end of page content-->

    
    <!--Google maps-->
        <script>
        function initMap() {
        var mapDiv = document.getElementById('search-map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
      }
    </script>


</body>

</html>