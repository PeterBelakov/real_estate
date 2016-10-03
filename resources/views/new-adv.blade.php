
@extends('layouts.app_1')

@section('content')
       @include('layouts.under_header') 
      @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif       
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
                       <!-- <form class="post-adv-form" method="post" role="form" action="{{ url('/create') }}">
                           -->
                       {!! Form::open(array('url'=>'/create','method'=>'POST', 'files'=>true)) !!}    
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="post-form-line adv-type">
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <label for="adv-type-sell" class="radio-label">Продажба</label>
                                        <input type="radio" name="adv-type" id="adv-type-sell" class="post-form-element radio-btn adv-type-radio-btn" value="1">
                                    </li>
                                </ul>
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <label for="adv-type-rent" class="radio-label">Наем</label>
                                        <input type="radio" name="adv-type" id="adv-type-rent" class="post-form-element radio-btn adv-type-radio-btn" value="2">
                                    </li>
                                </ul>
                            </div>
                            <div class="post-form-line">
                                <label class="form-element-label" for="property_type">Вид на имота</label>
                                <select class="post-form-element" name="property_type">
                                    <option value="0" class="property-type-option" selected="selected"></option>
                                    <option value="1" class="property-type-option">Апартамент</option>
                                    <option value="2" class="property-type-option">Къща</option>
                                    <option value="3" class="property-type-option">Парцел</option>
                                </select>
                            </div>
                            <div class="post-form-line">
                                <label class="form-element-label" for="property-place" >Местоположение</label>
                                <select class="post-form-element" name="location">
                                    <option value="0" class="property-place-option" selected="selected"></option>
                                    <option value="1" class="property-place-option">София</option>
                                    <option value="2" class="property-place-option">Благоевград</option>
                                    <option value="3" class="property-place-option">Пловдив</option>
                                </select>
                            </div>
                            <div class="post-form-line">
                                <label class="form-element-label" for="property-region">Район</label>
                                <select class="post-form-element" name="region">
                                    <option value="0" class="property-region-option" selected="selected"></option>
                                    <option value="1" class="property-region-option">Център</option>
                                    <option value="2" class="property-region-option">Широк център</option>
                                    <option value="3" class="property-region-option">Крайни квартали</option>
                                </select>
                            </div>
                            <div class="post-form-line">
                                <div class="property-price-element">
                                    <label for="adv-price" class="form-element-label property-price-label">Цена</label>
                                    <a href="#" id="price-btn"></a>
                                </div>
                                <div class="property-price-element">
                                    <input type="text"," name="price" id="adv-price" class="post-form-element post-form-input-text"> 
                                    <span>EUR</span>
                                </div>
                            </div>
                            <div class="post-form-line">
                                <div class="post-form-line-element property-main-features-element">
                                    <label for="adv-area" class="form-element-label">Квадратура</label>
                                    <input type="text"," name="quadrature" id="adv-area" class="post-form-element post-form-input-text">
                                </div>
                                <div class="post-form-line-element property-main-features-element">
                                    <label class="form-element-label" for="property-floor">Етаж</label>
                                    <select class="post-form-element" name="floor" id="property-floor">
                                        <option value="0" class="property-floor-option" selected="selected"></option>
                                        <option value="1" class="property-floor-option">Партер</option>
                                        <option value="2" class="property-floor-option">1</option>
                                        <option value="3" class="property-floor-option">2</option>
                                    </select>
                                </div>
                                <div class="post-form-line-element property-main-features-element">
                                    <label class="form-element-label" for="property-floors">Етажност</label>
                                    <select class="post-form-element" name="floors" id="property-floors">
                                        <option value="0" class="property-floors-option" selected="selected"></option>
                                        <option value="1" class="property-floor-option">2</option>
                                        <option value="2" class="property-floors-option">3</option>
                                        <option value="3" class="property-floors-option">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="post-form-line">
                                <label for="adv-construction-type" class="form-element-label">Вид строителство</label>
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <label for="adv-construction-type-brick" class="radio-label">Тухла</label>
                                        <input type="radio" name="adv-construction" id="adv-construction-type-brick" class="post-form-element radio-btn adv-construction-type-radio-btn" value="1">
                                    </li>
                                    <li>
                                        <label for="adv-construction-type-panel" class="radio-label">Панел</label>
                                        <input type="radio" name="adv-construction" id="adv-construction-type-panel" class="post-form-element radio-btn adv-construction-type-radio-btn" value="2">
                                    </li>
                                    <li>
                                        <label for="adv-construction-type-epk" class="radio-label">ЕПК</label>
                                        <input type="radio" name="adv-construction" id="adv-construction-type-epk" class="post-form-element radio-btn adv-construction-type-radio-btn" value="3">
                                    </li>
                                </ul>
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <label for="adv-construction-type-pk" class="radio-label">ПК</label>
                                        <input type="radio"," name="adv-construction" id="adv-construction-type-pk" class="post-form-element radio-btn adv-construction-type-radio-btn" value="4">
                                    </li>
                                    <li>
                                        <label for="adv-construction-type-wooden-beams" class="radio-label">Гредоред</label>
                                        <input type="radio"," name="adv-construction" id="adv-construction-type-wooden-beams" class="post-form-element radio-btn adv-construction-type-radio-btn" value="5">
                                    </li>
                                </ul>
                            </div>
                            <div class="post-form-line construction-year-container">
                                <label for="adv-construction-date" class="form-element-label">Година на строителсво: </label>
                                <input type="text"," name="date_of_construction" id="adv-construction-date" class="post-form-element post-form-input-text"> 
                                <span>4 цифри</span>
                           </div>
                            <div class="post-form-line">
                                <label for="adv-feature" class="form-element-label">Особености</label>
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <span class="post-form-input-element-info">В строеж</span><input type="checkbox"," name="under_construction" class="post-form-element" value="1">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">С преход</span><input type="checkbox"," name="with_transition" class="post-form-element" value="1">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Асансьор</span><input type="checkbox"," name="elevator" class="post-form-element" value="1">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">ТЕЦ</span><input type="checkbox"," name="central" class="post-form-element" value="1">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Интернет връзка</span><input type="checkbox"," name="internet" class="post-form-element" value="1">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">С действащ бизнес</span><input type="checkbox"," name="operating_business" class="post-form-element" value="1">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Обзаведен</span><input type="checkbox"," name="furnished" class="post-form-element" value="1">
                                    </li>
                                </ul>
                                <ul class="adv-feature-type-column">
                                    <li>
                                        <span class="post-form-input-element-info">С паркинг</span><input type="checkbox"," name="parking" class="post-form-element" value="1">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">С гараж</span><input type="checkbox"," name="garage" class="post-form-element" value="1">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Ипотекиран</span><input type="checkbox"," name="mortgaged class="post-form-element value="1">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Контрол на достъпа</span><input type="checkbox"," name="access_control" class="post-form-element" value="1">
                                    </li>   
                                    <li>
                                        <span class="post-form-input-element-info">Видео наблюдение</span><input type="checkbox"," name="cctv" class="post-form-element" value="1">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Охрана</span><input type="checkbox"," name="security" class="post-form-element" value="1">
                                    </li>
                                    <li>
                                        <span class="post-form-input-element-info">Саниран</span><input type="checkbox"," name="renovated" class="post-form-element" value="1">
                                    </li>
                                </ul>
                            </div>
                            <div class="adv-feature-type-column">

                            </div>
                            <div class="post-form-line ">
                                <div class="adv-feature-type-column attach-form-container">
                                    <label for="video-path" class="form-element-label">Видео:</label>
                                  <!--{!! Form::file('video', array('class' => 'video')) !!}-->
                                  <input name="video" class="post-form-element post-form-input-text" type ="file" accept="video/*">
                                   <!--<input type="file"," name="video" id="video-path" class="post-form-element post-form-input-text">-->
                                </div>
                                <div class="adv-feature-type-column attach-form-container">
                                    <input type="button" class="post-form-element post-form-button form-button attach-btn" value="Прикачи">
                                </div>
                            </div>
                            <div class="post-form-line ">
                                <div class="adv-feature-type-column attach-form-container">
                                    <label for="video-path" class="form-element-label">Снимка:</label>
                                    {!! Form::file('photo[]', array('multiple'=>true)) !!}
                                     <!--<input type="file"," name="photo" id="video-path" class="post-form-element post-form-input-text">-->
                                </div>
                                <div class="adv-feature-type-column attach-form-container">
                                    <input type="button" class="post-form-element post-form-button form-button attach-btn" value="Прикачи">
                                </div>
                            </div>
                            <div class="post-form-line ">
                                <label for="video-path" class="form-element-label">Описание на имота:</label>
                                <textarea name="property_discription" class="adv-description"></textarea>
                            </div>
                            <div class="post-form-line">
                                
                                
                                {!! Form::submit('Submit', array('class'=>'post-form-element post-form-button form-button')) !!}
                              <!--  <input type='submit' class="post-form-element post-form-button form-button" value="Запази">
                            --></div>
                       
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </main>
        <!--end of page content-->
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

@endsection