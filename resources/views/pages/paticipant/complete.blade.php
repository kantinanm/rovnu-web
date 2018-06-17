@extends('layouts.default')
@section('title')
    :: ตรวจสอบข้อมูล ::
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
@include('includes.header_v2')
@section('content')

    <section id="introduction" class="gradient-violat padding-top-90 home-slider">
        <div id="home-slider" class="empty-carousel">

        </div>
    </section>

    <section id="formUI" class="newsletter">
        <div class="container">

            <div class="ui breadcrumb">
                <a class="section">หน้าแรก</a>
                <div class="divider"> / </div>
                <div class="active section">ลงทะเบียนเข้าร่วมงาน</div>
            </div>
            </div>
        </div>

        <div class="container">

            <div class="ui segment">
                <div class="ui icon green message">
                    <i class="handshake outline icon"></i>
                    <div class="content">
                        <div class="header">
                            <span class="markFont"> คุณได้ลงทะเบียนสำเร็จ </span>
                        </div>
                        <p>
                        <ul class="list">
                          <li>กรุณาเก็บ QR code ไว้เพื่อใช้ในการแสดงตัวเข้าร่วมงาน NU eSports ROV Tournament และโครงการฝึกอบรมฯอุตสาหกรรมเกมและการแข่งขันกีฬา E-sport วันที่ 17 สิงหาคม 2561 ณ คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร</li>
                            <li>โปรด Save <i class="download icon"></i> ลงใน <i class="mobile alternate icon"></i> โทรศัพท์มือถือของท่าน หรือเครื่องคอมพิวเตอร์ <i class="laptop icon"></i> และยื่นให้ทีมงาน <i class="id badge outline icon"></i> ทำการ SCAN ในวันงาน เพื่อสิทธิในการร่วมลุ้นของรางวัลภายในงาน</li>
                            <li><a href="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->merge( '/public/images/qrcode_cop.png')->color(0,51,170)->generate($token)) !!} " class="btn btn-primary" download="my-qrcode">Download</a></li>
                        </ul>
                      </p>
                        <p>
                            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->merge( '/public/images/qrcode_cop.png')->color(0,51,170)->generate($token)) !!} ">
                        </P>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.home.modal')

    </section>
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

        });
    </script>

    <script>

    </script>
@endsection
