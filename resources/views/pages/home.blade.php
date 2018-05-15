@extends('layouts.default')
@section('title')
    NU eSports Tournament : งานเฉลิมฉลองครบรอบ 25 ปี คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร
@stop
@section('css_script')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">


    <link rel="stylesheet" href="{{ URL::asset('css/stellar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('js/Semantic-UI-CSS/semantic.css') }}">
@endsection
@include('includes.header')
@section('content')
    @include('includes.home.home-slider')
    @include('includes.home.rewards')
    @include('includes.home.rules')
    <section id="cta" class="gradient-violat cta padding-top-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="cta-heading text-white">Beyond The Hero <span class="markFont">: คุณพร้อมหรือยังที่จะเป็นฮีโร่ผู้กล้า </span></h3>
                    <p class="text-white">ฝ่าสมรภูมิรบไปด้วยกัน เปิดรับลงทะเบียนทีมแล้ววันนี้</p>
                    <div class="cta-btn-group">
                        <a class="btn btn-orange border-none btn-rounded-corner" href="#">พร้อม Battle <span class="icon-on-button"><i class="ion-log-in"></i></span></a>
                        <a class="btn btn-white gradient-white border-none btn-rounded-corner" href="#">ไม่ แต่ฉันจะไปร่วมงานแน่<span class="icon-on-button"><i class="ion-person-add"></i></span></a>
                    </div>
                    <p class="text-white">* สำรองที่นั่งในงาน เพื่อลุ้นของรางวัลและร่วมใกล้ชิด Cosplay สาวสวยภายในงาน (จำนวนจำกัด)</p>

                    <div>

                        <span style="display: inline-block; width: 32%;font-size: 60px;"><span class="counter">448</span></span>
                        <span class="counter" style="display: inline-block; width: 32%;font-size: 60px;">64</span>
                        <span class="counter" style="display: inline-block; width: 32%;font-size: 60px;">407</span>
                    </div>
                </div> <!--col-md-12-->
            </div> <!--end row-->
            <div class="row">
                <div class="col-md-12 text-center">

                </div> <!--col-md-12-->
            </div> <!--end row2-->
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="ion-android-contacts" style="font-size: 45px;"></i> ผู้เข้าแข่งขัน
                </div> <!--col-md-4-->
                <div class="col-md-4 text-center">
                    <i class="ion-ios-game-controller-b-outline" style="font-size: 45px;"></i> ทีม
                </div> <!--col-md-4-->
                <div class="col-md-4 text-center">
                    <i class="ion-person-stalker" style="font-size: 45px;"></i> ผู้สนใจเข้าร่วมงาน
                </div> <!--col-md-4-->
            </div> <!--end row3-->
        </div><!--container-->
    </section>
    @include('includes.home.testimonial')
    @include('includes.home.customer-support')
    @include('includes.home.sponsor')
@endsection
@section('js_plugin')
    <div id="scroll-top-div" class="scroll-top-div">
        <div class="scroll-top-icon-container">
            <i class="ion-ios-arrow-thin-up"></i>
        </div>
    </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <!--<script src="js/jquery.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('js/stellar/jquery.stellar.min.js') }}"></script>
    <script src="{{ URL::asset('js/Semantic-UI-CSS/semantic.min.js') }}"></script>

    <script>
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 10,
                time: 1500
            });

            $('#logo25')
                .transition('jiggle')
            ;

        });
    </script>

    <script>
        $(function(){
            $.stellar({
                horizontalScrolling: false,
                verticalScrolling: true,
                responsive: false,
            });
        });
    </script>
@endsection