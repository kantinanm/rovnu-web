@extends('layouts.default')
@section('title')
    อีสปอร์ต กีฬาบุคลากร มหาวิทยาลัยนเรศวร
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
@include('includes.header')
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
                <div class="active section">สถานที่จัดงาน</div>
            </div>

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">

                </div>
            </div>
        </div>


        <div class="container">

            <div class="ui segment">
                <div class="ui icon green message">
                    <i class="map outline icon"></i>
                    <div class="content">
                        <div class="header">
                            <span class="markFont">  กองบริการเทคโนโลยีสารสนเทศและการสื่อสาร (CITCOMS) มหาวิทยาลัยนเรศวร </span>
                        </div>
                        <p></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">

                        <img class="ui huge bordered image" src="{{ URL::asset('images/CITCOMS.jpg') }}">
                        <div class="ui segment">

                            <p>กองบริการเทคโนโลยีสารสนเทศและการสื่อสาร (CITCOMS) มหาวิทยาลัยนเรศวร</p>

                        </div>

                        <img class="ui huge bordered image" src="{{ URL::asset('images/place/P1010307-edit.JPG') }}">
                        <div class="ui segment">

                            <p><i class="trophy large icon"></i>ห้อง Main Conference เวทีการแข่งขันในรอบคัดเลือกและรอบชิงชนะเลิศ </p>
                            <p>สามารถจุคนได้ 40-50 ท่าน</p>

                        </div>

                        <img class="ui huge bordered image" src="{{ URL::asset('images/register_onsite.jpg') }}">
                        <div class="ui segment">

                            <p>จุดลงทะเบียนเข้าร่วมงาน</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ui card">
                            <div class="ui move reveal image">
                                <img src="{{ URL::asset('images/t01_reszie.jpg') }}" class="visible content">
                                <img src="{{ URL::asset('images/reward/g213_headset.png') }}" class="hidden content">
                            </div>
                            <div class="content">
                                <a class="header"><span class="markFont">ของรางวัลภายในงาน</span></a>
                                <div class="meta">
                                    <span class="date">สนับสนุนโดย Firecom และ Monkey Mouse</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <p>
                                    <i class="gift icon orange"></i>
                                    หูฟังแบบครอบ ยี่ห้อ Sony 5 รางวัล
                                </p>
                                <p>
                                    <i class="gift icon orange"></i>
                                    กระเป๋าเป้ Targus 2 รางวัล
                                </p>
                                <p>
                                    <i class="gift icon orange"></i>
                                    นาฬิกาข้อมือ Smart Watch 2 รางวัล
                                </p>
                                <p>
                                    <i class="gift icon orange"></i>
                                    หมวก Nubwo รุ่น X-Series 5 รางวัล
                                </p>
                            </div>
                            <div class="extra content">
                                <span style="color: green">*สำหรับผู้เข้าร่วมงานที่ลงทะเบียนและมาร่วมงานในวันที่ 18-21 กุมภาพันธ์ 2563</span>
                            </div>
                        </div>

                        <div class="ui card">
                            <a class="image" href="{{ url('/download/poster.pdf')  }}" target="_blank">
                                <img src="{{ URL::asset('images/poster.jpg') }}">
                            </a>
                            <div class="content">
                                <a class="header" href="{{ url('/download/poster.pdf')  }}" target="_blank"><span class="markFont">โปสเตอร์ประชาสัมพันธ์</span></a>
                                <div class="meta">
                                    <a></a>
                                </div>
                            </div>
                        </div>




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