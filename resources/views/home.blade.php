@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Публикуване на обява</div>
                <form class="form-horizontal" role="form" method="post" action="{{ url('/create') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-lg-4">

                        <div class="form-group">
                            <label form="" >Вид на имота:</label>
                            <select class="form-control input-sm" name="property_type">
                                <option value="1">студио</option>
                                <option value="2">двустаен</option>
                                <option value="3">Тристаен</option>
                                <option value="4">Четиристаен</option>
                                <option value="5">Офис</option>
                                <option value="6">Склад</option>
                                <option value="7">Ресторант</option>
                            </select>
                            <div class="form-group">
                                <label form="">Местоположение:</label>
                                <select class="form-control input-sm" name="location"> 
                                    <option value="1">г. София</option>
                                    <option value="2">г. Пловдив</option>
                                    <option value="3">г. Варна</option>
                                    <option value="4">г. Бургас</option>
                                </select>
                                <div class="form-group">   
                                    <label form="" >Цена:</label>
                                    <input type='text' name="price" >
                                    <div class="form-group">
                                        <label form="" >Район:</label>
                                        <input type='text' name="region" >
                                        <div class="form-group">
                                            <label form="" >Квадратура:</label>
                                            <input type='text' name="quadrature" >
                                            <div class="form-group">
                                                <label form="">Етаж:</label>
                                                <select class="form-control input-sm" name="floor"> 
                                                    <option value="1">Етаж 1</option>
                                                    <option value="2">Етаж 2</option>
                                                    <option value="3">Етаж 3</option>
                                                    <option value="4">Етаж 4</option>
                                                </select>
                                                <div class="form-group">
                                                    <label form="">Етажност:</label>
                                                    <select class="form-control input-sm" name="floors"> 
                                                        <option value="1">1-етажна</option>
                                                        <option value="2">2-етажна</option>
                                                        <option value="3">3-етажна</option>
                                                        <option value="4">4-етажна</option>
                                                    </select>
                                                    <label form="">Телефон:</label>   <input type="text"name="phone"/>
                                                </div>
                                                <div class="form-group">
                                                    <label form="">Валидноста на обявата:</label>
                                                    <select class="form-control input-sm" name="validity_of_the_notice"> 
                                                        <option value="1">30-дни</option>
                                                        <option value="2">60-дни</option>
                                                    </select>
                                                    <h4>Вид строителство:</h4>
                                                    <td width="540" valign="top">
                                                        <table width="540" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody><tr>
                                                                    <td valign="top" width="50%">
                                                                        <input type="checkbox" value="1" name="panella">Панел<br>
                                                                        <input type="checkbox" value="1" name="brick">Тухла<br>
                                                                        <input type="checkbox" value="1" name="epk">ЕПК<br>
                                                                    </td><td valign="top" width="50%">
                                                                        <input type="checkbox" value="1" name="pk">ПК<br>
                                                                        <input type="checkbox" value="1" name="beams">Гредоред<br>
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                        </tbody></table><div>
                                                            <label form="">Година на строителство:</label><input type="text"name="date_of_construction"/></div>
                                                        <h4>Особенности:</h4>
                                                    <td width="540" valign="top">
                                                        <table width="540" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody><tr>
                                                                    <td valign="top" width="25%"><input type="checkbox" value="1" name="under_construction">В строеж<br>
                                                                        <input type="checkbox" value="1" name="with_transition">С преход<br>
                                                                        <input type="checkbox" value="1" name="elevator">Асансьор<br>
                                                                        <input type="checkbox" value="1" name="central">ТЕЦ<br>
                                                                    </td><td valign="top" width="25%"><input type="checkbox" value="1" name="parking">С паркинг<br>
                                                                        <input type="checkbox" value="1" name="garage">С гараж<br>
                                                                        <input type="checkbox" value="1" name="mortgaged">Ипотекиран<br>
                                                                    </td><td valign="top" width="25%"><input type="checkbox" value="1" name="internet">Интернет връзка<br>
                                                                        <input type="checkbox" value="1" name="furnished">Обзаведен<br>
                                                                        <input type="checkbox" value="1" name="cctv">Видео наблюдение<br>
                                                                    </td><td valign="top" width="25%"><input type="checkbox" value="1" name="access_control">Контрол на достъп<br>
                                                                        <input type="checkbox" value="1" name="security">Охрана<br>
                                                                        <input type="checkbox" value="1" name="renovated">Саниран<br>
                                                                    </td>
                                                                </tr>                                                                </tr>
                                                            </tbody></table>
                                                        <h4>Описание на имота</h4>
                                                        <textarea name="property_discription" rows="6" wrap="virtual" maxlength="1000" class="h630"></textarea>
                                                        <table width="630" cellspacing="0" cellpadding="0" border="0"></table>
                                                    <tbody><tr>
                                                    <h4>Данни за обратна връзка:</h4>
                                                    <label form="">Мобилен телефон:</label><input type="text"name="gsm"/></div>
                                                <label form="">e-mail:</label><input type="text"name="e_mail"/></div>

                                            <button type='submit'>Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
            </div>
        </div>
    </div>
    @endsection
