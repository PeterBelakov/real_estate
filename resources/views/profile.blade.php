<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/main.css"> </link>
        <script src="./script/main.js"></script>
    </head>
    <body>
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
                <div class="blue-section-element">
                    <a href="profile.html">Профил</a>
                </div>
                <div class="blue-section-element">
                    <a href="my-adv.html">Моите обяви</a>
                </div>
                <div class="blue-section-element">
                    <a href="new-adv.html">Нова обява</a>
                </div>
            </div>
        </section>

    <!--End of Blue section under header-->

          
        <!--page content-->
        <main class="main-profile">
            <div class="content-wrapper wrapper">
                <div id="profileHeadContainer">
                    <div class="profileHeadElement">
                        <div class="circleImage" id="userImage"></div>
                    </div>
                    <div class="profileHeadElement">
                        <div class="circleImage" id="agencyImage"></div>
                    </div>
                    <div class="profileHeadElement" id="profileName">
                        <div>
                            <span id="">Иван Иванов</span>
                        </div>
                    </div>
                </div>
                <div id="profileFormContainer">
                    <form>
                        <input class="telephoneNumber profileInput" type="text" placeholder="Телефонен номер"/>
                        <input class="address profileInput" type="text" placeholder="Адрес*"/>
                        <input class="agencyName profileInput" type="text" placeholder="Име на агенцията*"/>
                        <input class="name profileInput" type="text" placeholder="Име"/>
                        <input class="email profileInput" type="text" placeholder="Е-майл"/>
                        <input class="profileButton profileInput form-button" id="profileInputButton" type="button" value="Редактирай"/>
                    </form>
                </div>
            </div>
        </main>
        <!--end of page content-->


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