@extends('layouts.default')

@section('content')
<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive center-block" width="1024" src="img/banner/banner1.jpg" alt="Chania" >
                 <div class="carousel-caption">
                    Message 1
                </div>
            </div>
            <div class="item">
                <img class="img-responsive center-block" width="1024" src="img/banner/banner1.jpg" alt="Chania" >
                <div class="carousel-caption">
                    Message 2
                </div>
            </div>
            <div class="item">
                <img class="img-responsive center-block" width="1024" src="img/banner/banner1.jpg" alt="Chania" >
                <div class="carousel-caption">
                    Message 3!
                </div>
            </div>
        </div>
    </div>
</div>
{{--finish Banner--}}
<br>
{{--start Category--}}
<div class="row">
    <div class="col-md-3 red">Lastest Category</div>
    <div class="col-md-9 green">KH PRODUCT</div>
</div>
{{--End Category--}}
<br>
<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive center-block" width="1024" src="img/banner/banner1.jpg" alt="Chania" >
                <div class="carousel-caption">
                    Message 1
                </div>
            </div>
            <div class="item">
                <img class="img-responsive center-block" width="1024" src="img/banner/banner1.jpg" alt="Chania" >
                <div class="carousel-caption">
                    Message 2
                </div>
            </div>
            <div class="item">
                <img class="img-responsive center-block" width="1024" src="img/banner/banner1.jpg" alt="Chania" >
                <div class="carousel-caption">
                    Message 3
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-3 red">
                <h3> <b><U>CONTACT US</b></u> </h3><br>
                <p>
                    <b>KHCYCLE BIKE STUDIO</b>
                    ??? 29 ????????????????? ???????????? ?????????? ???????? 10240
                    ???.: 0-2510-1906
                <h4>Email: Sales@khcycle.com</h4>
                <h4>www.khcycle.co.th</h4>
                </p>

            </div>
            <div class="col-md-9 green">
                {{--{!! HTML::image('img/contact/contact.jpg','Detail Contact',array('class'=>'img-responsive')) !!}--}}
                <img class="img-responsive" src="img/contact/contact.jpg" alt="Detail Contact" >
            </div>
        </div>
    </div>
</div>

@endsection