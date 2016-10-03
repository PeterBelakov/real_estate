@extends('layouts.app_1')
@section('content')
 @include('layouts.under_header')

          
        <!--page content-->
        <main class="main-profile">
            <div class="content-wrapper wrapper">
                <div class="advertisement">
                    <div class="content-element preview-adv">
                        <div class="preview-adv-info photos-count">
                            <span>13 photos</span>
                        </div>
                        <div class="preview-adv-info adv-type">
                            <div>
                                <div class="status-circle">
                                </div>
                                <span class="adv-type-text">For rent</span>
                            </div>
                        </div>
                        <div class="preview-adv-info adv-prices">
                            <ul class="adv-prices-list">
                                <li class="adv-prices-element">
                                    <span>1</span>
                                    <span>$3512</span>
                                </li>
                                <li class="adv-prices-element">
                                    <span>2</span>
                                    <span>$5312</span>
                                </li>
                            </ul>
                        </div>
                        <div class="preview-adv-info status-address">
                            <div class="update-status">
                                Updated today 
                            </div>
                            <div class="adv-address">
                                &#8226 541 E 20th St, New York, NY
                            </div>
                        </div>
                    </div>
                    <div class="content-element adv-functions">
                        <a href="#" class="form-button adv-button main-btn">Редактирай</a>
                        <a href="offer.html" class="form-button adv-button main-btn">Преглед</a>
                        <a href="#" class="form-button adv-button main-btn">Изтриване</a>
                        <a href="#" class="form-button adv-button main-btn">Деактивиране</a>
                        <a href="#" class="form-button adv-button main-btn comment-btn" data="1">Коментар</a>
                        <div class="comment-container">
                            <form action="">
                                <textarea name="" id="" cols="30" rows="10" class="comment-text"></textarea>
                                <input type="button"," value="Изпрати" class="comment-send-btn main-btn">
                                <input type="hidden"," value="1" class="offer-id">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="advertisement">
                    <div class="content-element preview-adv">
                        <div class="preview-adv-info photos-count">
                            <span>13 photos</span>
                        </div>
                        <div class="preview-adv-info adv-type">
                            <div>
                                <div class="status-circle">
                                </div>
                                <span class="adv-type-text">For rent</span>
                            </div>
                        </div>
                        <div class="preview-adv-info adv-prices">
                            <ul class="adv-prices-list">
                                <li class="adv-prices-element">
                                    <span>1</span>
                                    <span>$3512</span>
                                </li>
                                <li class="adv-prices-element">
                                    <span>2</span>
                                    <span>$5312</span>
                                </li>
                            </ul>
                        </div>
                        <div class="preview-adv-info status-address">
                            <div class="update-status">
                                Updated today 
                            </div>
                            <div class="adv-address">
                                &#8226 541 E 20th St, New York, NY
                            </div>
                        </div>
                    </div>
                    <div class="content-element adv-functions">
                        <a href="#" class="form-button adv-button main-btn">Редактирай</a>
                        <a href="offer.html" class="form-button adv-button main-btn">Преглед</a>
                        <a href="#" class="form-button adv-button main-btn">Изтриване</a>
                        <a href="#" class="form-button adv-button main-btn">Деактивиране</a>
                        <a href="#" class="form-button adv-button main-btn comment-btn" offer-id="2">Коментар</a>
                        <div class="comment-container">
                            <form action="">
                                <textarea name="" id="" cols="30" rows="10" class="comment-text"></textarea>
                                <input type="button"," value="Изпрати" class="comment-send-btn main-btn">
                                <input type="hidden"," value="1" class="offer-id">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--end of page content-->


        
    </body>
</html>
@endsection