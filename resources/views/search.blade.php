@extends('layouts.app_1')
@section('content')
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
@endsection