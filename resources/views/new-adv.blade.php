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
        <main class="main-add-adv">
            <div class="content-wrapper wrapper add-adv-content-wrapper">
                <div class="post-adv-steps-container">
                    <ul>
                        <li class="post-adv-step step-passed"><h2 class="post-adv-step-info">Публикуване на обява</h2></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                        <li class="post-adv-step"></li>
                    </ul>
                </div>
                <div class="post-adv-container">
                    <div class="post-adv-map" id="map">

                    </div>
                    <div class="post-adv-form-container">
                        <form class="post-adv-form">
                            <div class="post-form-line adv-type">
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <label for="adv-type-sell" class="radio-label">Продажба</label>
                                        <input type="radio"," name="adv-type" id="adv-type-sell" class="post-form-element radio-btn adv-type-radio-btn" value="rent">
                                    </li>
                                </ul>
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <label for="adv-type-rent" class="radio-label">Наем</label>
                                        <input type="radio"," name="adv-type" id="adv-type-rent" class="post-form-element radio-btn adv-type-radio-btn" value="sale">
                                    </li>
                                </ul>
                            </div>
                            <div class="post-form-line">
                                <label class="form-element-label" for="property-type">Вид на имота</label>
                                <select class="post-form-element" name="property-type">
                                    <option value="empty" class="property-type-option" selected="selected"></option>
                                    <option value="flat" class="property-type-option">Апартамент</option>
                                    <option value="house" class="property-type-option">Къща</option>
                                    <option value="parcel" class="property-type-option">Парцел</option>
                                </select>
                            </div>
                            <div class="post-form-line">
                                <label class="form-element-label" for="property-place">Местоположение</label>
                                <select class="post-form-element" name="property-place">
                                    <option value="empty" class="property-place-option" selected="selected"></option>
                                    <option value="sofia" class="property-place-option">София</option>
                                    <option value="blagoevgrad" class="property-place-option">Благоевград</option>
                                    <option value="plovdiv" class="property-place-option">Пловдив</option>
                                </select>
                            </div>
                            <div class="post-form-line">
                                <label class="form-element-label" for="property-region">Район</label>
                                <select class="post-form-element" name="property-region">
                                    <option value="empty" class="property-region-option" selected="selected"></option>
                                    <option value="center" class="property-region-option">Център</option>
                                    <option value="wide-center" class="property-region-option">Широк център</option>
                                    <option value="suburbs" class="property-region-option">Крайни квартали</option>
                                </select>
                            </div>
                            <div class="post-form-line">
                                <div class="property-price-element">
                                    <label for="adv-price" class="form-element-label property-price-label">Цена</label>
                                    <a href="#" id="price-btn"></a>
                                </div>
                                <div class="property-price-element">
                                    <input type="text"," name="adv-price" id="adv-price" class="post-form-element post-form-input-text"> 
                                    <span>EUR</span>
                                </div>
                            </div>
                            <div class="post-form-line">
                                <div class="post-form-line-element property-main-features-element">
                                    <label for="adv-area" class="form-element-label">Квадратура</label>
                                    <input type="text"," name="adv-area" id="adv-area" class="post-form-element post-form-input-text">
                                </div>
                                <div class="post-form-line-element property-main-features-element">
                                    <label class="form-element-label" for="property-floor">Етаж</label>
                                    <select class="post-form-element" name="property-floor" id="property-floor">
                                        <option value="empty" class="property-floor-option" selected="selected"></option>
                                        <option value="ground-floor" class="property-floor-option">Партер</option>
                                        <option value="1" class="property-floor-option">1</option>
                                        <option value="2" class="property-floor-option">2</option>
                                    </select>
                                </div>
                                <div class="post-form-line-element property-main-features-element">
                                    <label class="form-element-label" for="property-floors">Етажност</label>
                                    <select class="post-form-element" name="property-floors" id="property-floors">
                                        <option value="empty" class="property-floors-option" selected="selected"></option>
                                        <option value="ground-floor" class="property-floor-option">2</option>
                                        <option value="1" class="property-floors-option">3</option>
                                        <option value="2" class="property-floors-option">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="post-form-line">
                                <label for="adv-construction-type" class="form-element-label">Вид строителство</label>
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <label for="adv-construction-type-brick" class="radio-label">Тухла</label>
                                        <input type="radio" name="adv-construction-type" id="adv-construction-type-brick" class="post-form-element radio-btn adv-construction-type-radio-btn" value="brick">
                                    </li>
                                    <li>
                                        <label for="adv-construction-type-panel" class="radio-label">Панел</label>
                                        <input type="radio" name="adv-construction-type" id="adv-construction-type-panel" class="post-form-element radio-btn adv-construction-type-radio-btn" value="panel">
                                    </li>
                                    <li>
                                        <label for="adv-construction-type-epk" class="radio-label">ЕПК</label>
                                        <input type="radio" name="adv-construction-type" id="adv-construction-type-epk" class="post-form-element radio-btn adv-construction-type-radio-btn" value="epk">
                                    </li>
                                </ul>
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <label for="adv-construction-type-pk" class="radio-label">ПК</label>
                                        <input type="radio"," name="adv-construction-type" id="adv-construction-type-pk" class="post-form-element radio-btn adv-construction-type-radio-btn" value="pk">
                                    </li>
                                    <li>
                                        <label for="adv-construction-type-wooden-beams" class="radio-label">Гредоред</label>
                                        <input type="radio"," name="adv-construction-type" id="adv-construction-type-wooden-beams" class="post-form-element radio-btn adv-construction-type-radio-btn" value="wooden-beams">
                                    </li>
                                </ul>
                            </div>
                            <div class="post-form-line construction-year-container">
                                <label for="adv-construction-date" class="form-element-label">Година на строителсво: </label>
                                <input type="text"," name="adv-construction-date" id="adv-construction-date" class="post-form-element post-form-input-text"> 
                                <span>4 цифри</span>
                           </div>
                            <div class="post-form-line">
                                <label for="adv-feature" class="form-element-label">Особености</label>
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <span class="post-form-input-element-info">В строеж</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="in-construction">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">С преход</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="with-transition">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Асансьор</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="elevator">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">ТЕЦ</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="central-heating">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Интернет връзка</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="internet">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">С действащ бизнес</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="business">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Обзаведен</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="furnished">
                                    </li>
                                </ul>
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <span class="post-form-input-element-info">С паркинг</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="parking">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">С гараж</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="garage">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Ипотекиран</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="mortgage">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Контрол на достъпа</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="access-control">
                                    </li>   
                                    <li>
                                        <span class="post-form-input-element-info">Видео наблюдение</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="video-monitoring">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Охрана</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="security">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Саниран</span><input type="checkbox"," name="adv-feature" class="post-form-element" value="renovated">
                                    </li>
                                </ul>
                            </div>
                            <div class="adv-feature-type-column">

                            </div>
                            <div class="post-form-line ">
                                <div class="adv-feature-type-column attach-form-container">
                                    <label for="video-path" class="form-element-label">Видео:</label>
                                    <input type="text"," name="video-path" id="video-path" class="post-form-element post-form-input-text">
                                </div>
                                <div class="adv-feature-type-column attach-form-container">
                                    <input type="button" class="post-form-element post-form-button form-button attach-btn" value="Прикачи">
                                </div>
                            </div>
                            <div class="post-form-line ">
                                <div class="adv-feature-type-column attach-form-container">
                                    <label for="video-path" class="form-element-label">Снимка:</label>
                                    <input type="text"," name="video-path" id="video-path" class="post-form-element post-form-input-text">
                                </div>
                                <div class="adv-feature-type-column attach-form-container">
                                    <input type="button" class="post-form-element post-form-button form-button attach-btn" value="Прикачи">
                                </div>
                            </div>
                            <div class="post-form-line ">
                                <label for="video-path" class="form-element-label">Описание на имота:</label>
                                <textarea class="adv-description"></textarea>
                            </div>
                            <div class="post-form-line">
                                <input type="button" class="post-form-element post-form-button form-button" value="Запази">
                            </div>
                        </form>
                    </div>
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


        <!--Google Maps API-->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWEuer5sk-6jm9KQCV_wCcJUrhViN9yKU&callback=initMap"> </script>
        <script>
        function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
      }
    </script>
    </body>
</html>