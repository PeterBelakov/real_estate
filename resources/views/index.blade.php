@extends('layouts.app_1')
@section('content')
                <!--page content-->
        <main class="main-home">
            <!--Big picture section-->
            <section id="big-picture" class="">
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
                <div class="small-pictures-container">
                    <div class="small-pictures-container-element">
                        <a href="#" class="small-picture-btn">Нашата мисия</a>
                    </div>
                    <div class="small-pictures-container-element">
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