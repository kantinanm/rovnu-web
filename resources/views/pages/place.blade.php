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
                            <span class="markFont"> คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร </span>
                        </div>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>หากเดินทางจากกรุงเทพมหานคร</strong> ตามทางหลวงแผ่นดินหมายเลข 117 (นครสวรรค์ - พิษณุโลก) มหาวิทยาลัยนเรศวรจะตั้งอยู่ทางขวามือช่วงกิโลเมตรที่ 117 - 118 <i class="map marker alternate icon"></i> GPS : 16.743780, 100.196493
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับ<strong>การเดินทางจากภายในตัวเมืองพิษณุโลกมาที่มหาวิทยาลัยนเรศวร</strong> นั้น สามารถทำได้โดย รถโดยสารประจำทาง ปอ.12 ซึ่งจะมีจุดจอดอยู่ที่ สถานีรถไฟและสถานีขนส่งพิษณุโลก นอกจากนั้นสามารถเดินทางมาได้โดย
                        </p>
                        <p>
                        <ul>
                            <li>รถแท็กซี่รับจ้าง (อัตราเหมาจ่าย 150 บาทจากตัวเมือง) ,คิงด้อมแท็กซี่ <i class="phone icon"></i> 055-222-222  และ สหกรณ์แท็กซี่ <i class="phone  icon"></i> 055-388-888 </li>
                            <li>รถสามล้อรับจ้าง  </li>
                        </ul>
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับ<strong><a href="{{ URL::asset('images/map/nu-map.jpg') }}">การเดินทางภายในมหาวิทยาลัย</a></strong> จะมี "โครงการขนส่งมวลชนมหาวิทยาลัยนเรศวร (ขสมน.)" ซึ่งเป็นรถประหยัดพลังงานที่ขับเคลื่อนด้วยพลังงานไฟฟ้าบริการรอบมหาวิทยาลัยโดยไม่คิดค่าใช้จ่ายตั้งแต่เวลา 6.30 น. ถึง 21.00 น.
                        </p>
                        <p></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">

                        <img class="ui huge bordered image" src="{{ URL::asset('images/map/map-internal_number.png') }}">
                        <div class="ui segment">

                            <p><i class="car large icon"></i>พื้นที่จอดรถยนต์  </p>
                            <p>สามารถจอดรถได้ <strong>จุดที่ 1</strong> บริเวณข้างอาคาร 20-30 คัน และ<strong>จุดที่ 2</strong> ทางเข้ากลุ่มอาคารปฏิบัติการ 40-50 คัน</p>

                        </div>

                        <img class="ui huge bordered image" src="{{ URL::asset('images/place/state.png') }}">
                        <div class="ui segment">

                            <p><i class="trophy large icon"></i>เวทีการแข่งขันในรอบสุดท้าย และห้องจัดเสวนาโครงการฝึกอบรมเพื่อเสริมสร้างความเข้าใจในอุตสาหกรรมเกมและการแข่งขันกีฬา E-sport </p>
                            <p><strong>จุดที่ 3</strong> อาคารเรียนวิศวกรรมโยธา  ชั้น 7  ห้อง Slope 4 (Main State รองรับ ผู้เข้าร่วมงาน 120 คน) และ ห้อง Slope 3 (ถ่ายทอดสัญญาณ <i class="ion-videocamera large icon"></i> รองรับ ผู้เข้าร่วมงาน 120 คน)</p>

                        </div>

                        <img class="ui huge bordered image" src="{{ URL::asset('images/place/backdrop.png') }}">

                    </div>
                    <div class="col-md-4">
                        <div class="ui card">
                            <div class="ui move reveal image">
                                <img src="{{ URL::asset('images/T-Shirt_front.png') }}" class="visible content">
                                <img src="{{ URL::asset('images/T-Shirt_back.png') }}" class="hidden content">
                            </div>
                            <div class="content">
                                <a class="header"><span class="markFont">ของรางวัลภายในงาน</span></a>
                                <div class="meta">
                                    <span class="date">สนับสนุนโดย Garena Thailand</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <p>
                                    <i class="gift icon orange"></i>
                                    เสื้อ 5 รางวัล *
                                </p>
                                <p>
                                    <i class="chess queen icon purple"></i>
                                    สกินฮีโร่ 10 รางวัล *
                                </p>
                            </div>
                            <div class="extra content">
                                <span style="color: green">*สำหรับผู้เข้าร่วมงานที่ลงทะเบียนและมาร่วมงานในวันที่ 17 สิงหาคม 2561</span>
                            </div>
                        </div>

                        <div class="ui card">
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
                                <p><i class="trophy icon brown"></i>ชมเชย 2 รางวัล รางวัล 1,000 บาท</p>

                            </div>
                        </div>

                        <div class="ui special cards">
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
                                    <a class="header"><span class="markFont">รางวัลในการแข่งขันรอบสุดท้าย</span></a>
                                    <div class="meta">
                                        <span class="date">สนับสนุนโดย Garena Thailand</span>
                                    </div>
                                </div>
                                <div class="extra content">


                                    <p><i class="trophy icon yellow"></i>อันดับ 1 ได้รับ 500 คูปอง/คน +สกิน</p>
                                    <p><i class="trophy icon grey"></i>อันดับ 2 ได้รับ 300 คูปอง/คน +สกิน</p>
                                    <p><i class="trophy icon brown"></i>ชมเชย 2 รางวัล ได้รับ 100 คูปอง/คน</p>
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