<!Doctype html>
<html>
    <head>
        <meta http-equiv="content-Type" content="text/html; charset=tis-620">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>KHCYCLE</title>
        {{--CSS FILE--}}
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        {!! Html::style('css/bootstrap.min.css') !!}
        {{--end CSS FILE--}}
    </head>
<body>

{{--Header--}}
<div class="navbar navbar-inverse navbar-static-top" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" rel="home" href="/" title="KHCYCLE SHOP"><img src="img/logo/khcycle_logo.png"></a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">

        <ul class="nav navbar-nav">
            <li><a href="index.html">HOME</a></li>
            <li><a href="product.html">PRODUCT</a></li>
            <li><a href="article.html">NEWS/ARTICLE</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="member.html">MEMBER</a></li>
            <li><a href="webboard.html">WEBBOARD</a></li>
        </ul>

        <div class="col-sm-3 col-md-3 pull-right">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--//finish Header--}}
{{--START BANNER--}}
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
                {!! Html::image('img/banner/banner1.jpg', 'Chania', array('class' => 'img-responsive center-block','width'=>'1024')) !!}
                <div class="carousel-caption">
                   Message 1
                </div>
            </div>
            <div class="item">
                {!! Html::image('img/banner/banner1.jpg', 'Chania', array('class' => 'img-responsive center-block','width'=>'1024')) !!}
                <div class="carousel-caption">
                   Message 2
                </div>
            </div>
            <div class="item">
                {!! Html::image('img/banner/banner1.jpg', 'Chania', array('class' => 'img-responsive center-block','width'=>'1024')) !!}
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
                {!! Html::image('img/banner/banner1.jpg', 'Chania', array('class' => 'img-responsive center-block','width'=>'1024')) !!}
                <div class="carousel-caption">
                    Message 1
                </div>
            </div>
            <div class="item">
                {!! Html::image('img/banner/banner1.jpg', 'Chania', array('class' => 'img-responsive center-block','width'=>'1024')) !!}
                <div class="carousel-caption">
                    Message 2
                </div>
            </div>
            <div class="item">
                {!! Html::image('img/banner/banner1.jpg', 'Chania', array('class' => 'img-responsive center-block','width'=>'1024')) !!}
                <div class="carousel-caption">
                    Message 3
                </div>
            </div>
        </div>
    </div>
</div>
{{--finish Article--}}
{{--start Contact Us--}}
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-3 red">
               <h3> <b><U>CONTACT US</b></u> </h3><br>
                <p>
                    <b>KHCYCLE BIKE STUDIO</b>
                    ?????? 29 ????????????????? ???????????? ?????????? ??????? 10240
                    ???.: 0-2510-1906
                    <h4>Email: Sales@khcycle.com</h4>
                    <h4>www.khcycle.co.th</h4>
                </p>

            </div>
            <div class="col-md-9 green">{!! HTML::image('img/contact/contact.jpg') !!}</div>
        </div>
    </div>
</div>

{{--End Contact Us--}}


{{--Script Javascript--}}
        {!! Html::script('js/jquery.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
{{--end Javascript--}}
</body>
</html>