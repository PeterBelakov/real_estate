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
                         @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                        <form role="form" action="{{ url('/register') }}" class="login-form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" class="login-form-text" name="name" placeholder="Потребителско име" value="{{ old('name') }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Имейл">                   
                            <input type="password" class="login-form-text" name="password" placeholder="Парола">
                            <input type="password" class="login-form-text" name="password_confirmation" placeholder="Повтори паролата">
                            <div class="checkbox-container">
                                <input type="checkbox" class="login-register-checkbox" id="if-proffesional">
                                <label for="if-proffesional" class="label" id="if-proffesional">Аз съм наемодател или професионален брокер</label>
                            </div>
                            <div id="client-type-container">
                                <label for="" class="label">Допълнителна информация:</label>
                                <select name="" id="client-type-select">    
                                    <option value="ind" class="client-type-option"> Частно лице</option>
                                    <option value="corp" class="client-type-option">Компания</option>
                                    <option value="oth" class="client-type-option">Друго</option>
                                </select>
                            </div>
                            <input type="submit" class="login-form-btn" value="Вход">
                            <div id="remember-forgotten-password" class="checkbox-container">
                                <input type="checkbox" class="login-register-checkbox" id="remember-password">
                                <label for="remember-password" class="label" id="remember-password-label">Запомни ме</label>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>                     

</html>