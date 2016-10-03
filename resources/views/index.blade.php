@extends('layouts.app_1')
@section('content')
<!--page content-->
<main class="main-home">
    <!--Big picture section-->
    <section id="big-picture" class="">
        <h1 id="big-picture-title">Lorem ipsum dolor sit amet, consectetur.</h1>
        <div class="big-picture-wrapper">
            <div class="big-picture-element">
                <div id="big-picture-btn-container">
                    <a href="/search" class="bic-picture-btn">Продажби</a>
                    <a href="/search" class="bic-picture-btn">Наеми</a>
                </div>
            </div>
            <div class="big-picture-element big-picture-element-form-container">
                <form>
                    <input type="text" id="big-picture-search-text" placeholder="Въведи град, квартал" >
                    <input type="button" id="big-picture-search-btn">
                </form>
            </div>
        </div>
    </section>
    <!--End of Big picture-->
    <!--Small pictures-->
    <div class="content-wrapper wrapper">
        <div class="small-pictures-container ">
            <div class="small-pictures-container-element">
                <a href="#" class="small-picture-btn">Инструкции за работа с картата</a>
            </div>
            <div class="small-pictures-container-element">
                <a href="#" class="small-picture-btn">Нашата мисия</a>
            </div>
        </div>
        <div class="small-pictures-container">
            <!--<div class="small-pictures-container-element">
                <a href="#" class="small-picture-btn">Съвети</a>
            </div>-->
            <div class="small-pictures-container-element">
                <span class="small-picture-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptatibus cupiditate quibusdam dolore perferendis omnis cum commodi, dolorum quas ea, error obcaecati ratione eaque et placeat veritatis a voluptatem enim voluptatum, sint dignissimos fuga. Minus deleniti eos necessitatibus culpa quo veritatis in totam ex, quam voluptatibus eligendi, dolores perferendis non. Quos ut, alias itaque. Fuga nam deserunt commodi sint debitis odit itaque earum quasi nihil quidem, repellendus, placeat assumenda, numquam velit dignissimos, porro aut facere.   </span>
            </div>
            <div class="small-pictures-container-element">
                <span class="small-picture-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptatibus cupiditate quibusdam dolore perferendis omnis cum commodi, dolorum quas ea, error obcaecati ratione eaque et placeat veritatis a voluptatem enim voluptatum, sint dignissimos fuga. Minus deleniti eos necessitatibus culpa quo veritatis in totam ex, quam voluptatibus eligendi, dolores perferendis non. Quos ut, alias itaque. Fuga nam deserunt commodi sint debitis odit itaque earum quasi nihil quidem, repellendus, placeat assumenda, numquam velit dignissimos, porro aut facere.   </span>
            </div>
        </div>
        <div class="small-pictures-container ">
            <div class="small-pictures-container-element center-positioned">
                <a href="#" class="small-picture-btn">Съвети</a>
            </div>
        </div>
    </div>
    <!--End of small pictures-->
</main>
<!--end of page content-->


</body>
</html>
@endsection