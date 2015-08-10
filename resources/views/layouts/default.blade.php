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
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        {{--{!! Html::style('css/bootstrap.min.css') !!}--}}
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
        <a class="navbar-brand" rel="home" href="home" title="KHCYCLE SHOP"><img src="img/logo/khcycle_logo.png"></a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">

        <ul class="nav navbar-nav">
            <li><a href="home">HOME</a></li>
            <li><a href="product.html">PRODUCT</a></li>
            <li><a href="article.html">NEWS/ARTICLE</a></li>
            <li><a href="contact">CONTACT</a></li>
            <li><a href="member.html">MEMBER</a></li>
            <li><a target="_blank" href="http://www.thaimtb.co.th/forum/index.php">WEBBOARD</a></li>
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
@yield('content')
{{--End Contact Us--}}


{{--Script Javascript--}}
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
        {{--{!! Html::script('js/jquery.js') !!}--}}
        {{--{!! Html::script('js/bootstrap.min.js') !!}--}}
{{--end Javascript--}}
</body>
</html>