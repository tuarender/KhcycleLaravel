@extends('layouts.default')


@section('content')
    {{--banner header--}}

    {{--end banner header--}}

    {{--Contact--}}
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-3 red">
                    <h3> <b><U>CONTACT US</b></u> </h3><br>
                    <p>
                        <b>KHCYCLE BIKE STUDIO</b>
                        เทส 29 ????????????????? ???????????? ?????????? ???????? 10240
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
    {{--end contact--}}
@endsection