@extends('layouts.app_1')
@section('content')
@include('layouts.under_header')

          
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
                        <input class="main-btn" id="profileInputButton" type="button" value="Редактирай"/>
                        
                    </form>
                </div>
            </div>
        </main>
        <!--end of page content-->


        
    </body>

</html>
@endsection