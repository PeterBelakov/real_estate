<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/main.css"> </link>
        <link rel="stylesheet" type="text/css" href="styles/login.css"> </link>
    </head>

    <body>
        <main class="wrapper">
            <div class="background">
                <div class="blueGradient">

                </div>
                <div class="popUp">
                    <div>
                        <img src="images/logo-login.jpg"/>
                    </div>
                    <div class="login-form-container">
                        <form action="{{ url('/login') }}" role="form" method="POST" class="login-form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                                <div class="col-md-6">
                                    <input id="email"  type="email" name="email" class="login-form-text" placeholder="Имейл"value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Парола">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    <input type="submit" class="login-form-btn" value="Вход">
                                    <div id="remember-forgotten-password" class="checkbox-container">
                                        <input type="checkbox" class="login-register-checkbox" id="remember-password">
                                        <label for="remember-password" class="label" id="remember-password-label">Запомни ме</label>
                                        <a href="#" class="link" id="#forgotten-password">Забравен парола</a>
                                    </div>
                                    </div>
                                    </form>
                                    <div>
                                        <span class="label">Нямаш профил?</span>
                                        <a href="#" class="link"> Регистрирай се!</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </main>
                    </body>

                    </html>