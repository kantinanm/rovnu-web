@extends('layouts.default')
@section('title')
    NU eSports ROV Tournament : งานเฉลิมฉลองครบรอบ 25 ปี คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร
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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modal-video.min.css') }}">
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
                <div class="active section">ของรางวัล</div>
            </div>

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">

                </div>
            </div>
        </div>


        <div class="container">
            <div class="ui one column grid">
                <div class="column">
                    <div class="ui raised segment">
                        <a class="ui green ribbon label">รางวัลในการแข่งขันรอบสุดท้าย</a>

                        <div class="ui three doubling cards" id="cardContainerGroupA" name="cardContainerGroupA">

                            <div class="card">
                                <div class="blurring dimmable image">
                                    <div class="ui inverted dimmer">
                                        <div class="content">
                                            <div class="center">
                                                <div class="ui primary button" data-toggle="modal" data-target="#exampleModalCenter">ส่งทีมเข้าร่วมแข่งขัน</div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ URL::asset('images/reward/money_reward.png') }}">
                                </div>
                                <div class="content">
                                    <a class="header"><span class="markFont"></span></a>
                                    <div class="meta">
                                        <span class="date">เงินรางวัล <i class="cog icon red"></i>จาก คณะวิศวกรรมศาสตร์</span>
                                    </div>
                                </div>
                                <div class="extra content">


                                    <p><i class="trophy icon yellow"></i>อันดับ 1 ได้รับเงินรางวัล 5,000 บาท</p>
                                    <p><i class="trophy icon grey"></i>อันดับ 2 ได้รับเงินรางวัล 3,000 บาท</p>
                                    <p><i class="trophy icon brown"></i>อันดับ 3 ได้รับเงินรางวัล 1,000 บาท</p>
                                    <p><i class="trophy icon brown"></i>อันดับ 4 ได้รับเงินรางวัล 1,000 บาท</p>

                                </div>
                            </div>


                            <div class="card">
                                <div class="blurring dimmable image">
                                    <div class="ui inverted dimmer">
                                        <div class="content">
                                            <div class="center">
                                                <div class="ui primary button" data-toggle="modal" data-target="#exampleModalCenter">ส่งทีมเข้าร่วมแข่งขัน</div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ URL::asset('images/coupon.png') }}">
                                </div>
                                <div class="content">
                                    <!--<a class="header"><span class="markFont"></span></a>-->
                                    <div class="meta">
                                        <span class="date"> คูปองในเกมและ สกินฮีโร่ จาก Garena Thailand</span>
                                    </div>
                                </div>
                                <div class="extra content">


                                    <p><i class="trophy icon yellow"></i>อันดับ 1 ได้รับ 500 คูปอง/คน +สกิน</p>
                                    <p><i class="trophy icon grey"></i>อันดับ 2 ได้รับ 300 คูปอง/คน +สกิน</p>
                                    <p><i class="trophy icon brown"></i>อันดับ 3 ได้รับ 100 คูปอง/คน</p>
                                    <p><i class="trophy icon brown"></i>อันดับ 4 ได้รับ 100 คูปอง/คน</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui one column grid">
                <div class="column">
                    <div class="ui raised segment">
                        <a class="ui teal ribbon label">ของรางวัลระหว่างประชาสัมพันธ์โครงการ</a>
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <a href="https://www.logitechg.com/th-th/product/g402-hyperion-fury-fps-gaming-mouse" target="_blank" class="ui small image" data-tooltip="กิจกรรม like & share ครั้งที่ 1  จากเพจ ecpe.nu" data-inverted="">
                                    <img src="{{ URL::asset('images/reward/g402_mouse.png') }}" >
                                    Mouse แบบความเร็วสูง ยี่ห้อ logitech G402
                                </a>
                                <i class="check icon green"></i> แจกแล้ว
                            </div> <!--col-md-2-->
                            <div class="col-md-2 text-center">
                                <a href="https://goo.gl/pt4yL7" target="_blank" class="ui small image" data-tooltip="กิจกรรม like & share ครั้งที่ 1  จากเพจ ecpe.nu" data-inverted="">
                                    <img src="{{ URL::asset('images/reward/bnk48_300.jpg') }}" >
                                    รูป PunBNK48 และ MobileBNK48
                                </a>
                                <i class="check icon green"></i> แจกแล้ว
                            </div> <!--col-md-2-->
                            <div class="col-md-2 text-center">
                                <a href="https://www.logitechg.com/th-th/product/g231-prodigy-gaming-headset" target="_blank" class="ui small image" data-tooltip="กิจกรรม like & share ครั้งที่ 2 จากเพจ ecpe.nu" data-inverted="">
                                    <img src="{{ URL::asset('images/reward/g213_headset.png') }}" >
                                    ชุดหูฟังสำหรับเล่นเกม ยี่ห้อ logitech G231
                                </a>
                                <i class="hourglass start icon brown"></i> ร่วมสนุกผ่าน ecpe.nu
                            </div> <!--col-md-2-->


                        </div> <!--end row2-->
                    </div>
                </div>
            </div>

            <div class="ui one column grid">
                <div class="column">
                    <div class="ui raised segment">
                        <a class="ui teal ribbon label">ของรางวัลภายในงาน</a>
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <a href="#" target="_blank" class="ui small image" data-tooltip="*สำหรับผู้เข้าร่วมงานที่ลงทะเบียนและมาร่วมงานในวันที่ 17 สิงหาคม 2561" data-inverted="">
                                    <img src="{{ URL::asset('images/T-Shirt_front.png') }}" >

                                </a>
                                เสื้อยืด ROV 5 รางวัล
                            </div> <!--col-md-2-->
                            <div class="col-md-2 text-center">
                                <a href="#" target="_blank" class="ui small image" data-tooltip="*สำหรับผู้เข้าร่วมงานที่ลงทะเบียนและมาร่วมงานในวันที่ 17 สิงหาคม 2561" data-inverted="">
                                    <img src="{{ URL::asset('images/reward/hqdefault.jpg') }}" >

                                </a>
                                สกินอีโร่ 10 รางวัล
                            </div> <!--col-md-2-->



                        </div> <!--end row2-->
                    </div>
                </div>
            </div>

        </div>
    </section>
    @include('includes.home.modal')
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
    <script src="{{ URL::asset('js/modal-video/jquery-modal-video.min.js') }}"></script>

    <script>

    </script>

    <script>

    </script>
@endsection