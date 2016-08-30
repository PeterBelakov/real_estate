<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/Organization" class=" zsg-theme-modernized null yui3-js-enabled" lang="en"
      xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" id="yui_3_18_1_1_1470498727451_1293">

    <head>
        <title>COPAXX: Real Estate</title><meta name="Copyright" content="COPAXX">  
            <meta charset="utf-8">
                <link href="styles/top-nav-wide.css" rel="stylesheet" type="text/css"></link>
                <link href="styles/main.css" rel="stylesheet" type="text/css"></link>
                <link href="styles/hdp.css" rel="stylesheet" type="text/css"></link>
                <script async defer src="https://maps.googleapis.com/maps/api/js?v=3.0&key=AIzaSyCWEuer5sk-6jm9KQCV_wCcJUrhViN9yKU&callback=initMap"></script>
                <script src="../script/main.js"></script>
                </head>

                <body id="home" class="home-page hide-top-nav-gleam  tengage wide">

                    <!--Header start-->
                    <header class="header">
                        <div class="header-elements wrapper">
                            <div class="header-element logo-container">
                            </div>
                            <div class="header-element">
                                <a href="{{ url('/search') }}">Продажби</a>
                            </div>
                            <div class="header-element">
                                <a href="{{ url('/search') }}">Под наем</a>
                            </div>
                            <div class="header-element post-offer">
                                <a href="{{ url('/adv') }}" class="btn">Публикувай обява</a>
                            </div>
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <div class="header-element login-register">
                                <a href="{{ url('/login') }}">Вход</a>
                                <span>/</span>
                                <a href="{{ url('/register') }}">Регистрация</a>
                            </div>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                            @endif
                        </div>
                    </header>

                    @yield('content')

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

                </body>
                </html>

