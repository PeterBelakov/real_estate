<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/main.css"> </link>
        <link rel="stylesheet" type="text/css" href="styles/login.css"> </link>
        <script src="script/main.js"></script>
    </head>

    <body>
        <header class="header">
            <div class="header-elements wrapper">
                <div class="header-element logo-container">
                </div>
                <div class="header-element">
                    <a href="{{ url('/index') }}" id="header-sales-btn" class="header-main-btn">Начало</a>
                </div>
                <div class="header-element">
                    <a href="{{ url('/search') }}" id="header-sales-btn" class="header-main-btn">Продажби</a>
                </div>
                <div class="header-element">
                    <a href="{{ url('/search') }}" id="header-rent-btn" class="header-main-btn">Под наем</a>
                </div>
                <div class="header-element btns-container" id="post-offer">
                    <a href="{{ url('/adv') }}" class="main-btn header-btn">Публикувай обява</a>
                </div>
                <!-- Authentication Links -->
                @if (Auth::guest())
                <div class="header-element " id="login-register">
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
        <!--Header end-->
        <main class="login-wrapper">
            <div id="login-logo-container"></div>
            <div class="background">
                <div class="blueGradient">

                </div>
                <div class="popUp">
                    <div>
                        <img src="images/transperant-logo.png"/>
                    </div>
                    <div class="login-form-container">
                        <form action="{{ url('/login') }}" role="form" method="POST" class="login-form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input id="email" type="email" name="email" class="login-form-text" placeholder="Имейл" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="login-form-text" name="password" placeholder="Парола">
                                    <div id="remember-forgotten-password" class="checkbox-container">
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif 
                                        <input type="submit" class="login-form-btn main-btn" value="Вход">
                                        <input type="checkbox" class="login-register-checkbox" id="remember-password">
                                        <label for="remember-password" class="label" name="remember" id="remember-password-label">Запомни ме</label>
                                        <a href="{{ url('/password/reset') }}" class="link" id="#forgotten-password">Забравен парола</a>
                                    </div>
                                    </form>
                                    <div>
                                        <span class="label">Нямаш профил?</span>
                                        <a href="/register" class="link"> Регистрирай се!</a>
                                    </div>
                                </div>
                            </div>    
                    </div>
                </div>  
        </main>
    </body>                                     





</html>