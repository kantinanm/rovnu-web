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
@endsection
@include('includes.header')
@section('content')
    <section id="introduction" class="gradient-violat padding-top-90 home-slider">
        <div id="home-slider" class="empty-carousel"></div>
    </section>

    <section id="rewards" class="newsletter">
        <div class="container">

            <div class="ui breadcrumb">
                <a class="section">หน้าแรก</a>
                <div class="divider"> / </div>
                <div class="active section">คำถามที่พบบ่อย</div>
            </div>
            <div class="ui segment">
                <div class="row padding-top-bottom-20">
                    <div class="col-md-12">


                        <div class="feature-wiget">
                            <div class="content">
                                <h4><i class="ion-android-hangout"></i> <span class="markFont">ตอนเพิ่มสมาชิกในทีมถ้าไม่มี Garena id หรือสมัครผ่าน Facebook ต้องทำยังไง ?</span></h4>
                                <p>ตอบ : ให้กรอก OpenID แทน วิธีดู OpenID ทำได้ดังรูป</p>
                                <div class="ui card">
                                    <div class="image">
                                        <img src="{{ URL::asset('images/openid.jpg') }}"  style="width:450px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-wiget">
                            <div class="content">
                                <h4><i class="ion-android-hangout"></i> <span class="markFont">กดยืนยันทีมไปแล้วแก้ไขข้อมูลไม่ได้ ?</span></h4>
                                <p>ตอบ : ถ้ากดยืนยันทีมแล้วจะไม่สามารถแก้ไขข้อมูลเองได้เนื่องจากป้องกันการเปลี่ยนตัวผู้เล่นภายหลัง หากกรอกข้อมูลผิดสามารถแจ้งมาทาง <a href="https://www.facebook.com/%E0%B8%AD%E0%B8%B5%E0%B8%AA%E0%B8%9B%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%95-%E0%B8%81%E0%B8%B5%E0%B8%AC%E0%B8%B2%E0%B8%9A%E0%B8%B8%E0%B8%84%E0%B8%A5%E0%B8%B2%E0%B8%81%E0%B8%A3-%E0%B8%A1%E0%B8%99%E0%B9%80%E0%B8%A3%E0%B8%A8%E0%B8%A7%E0%B8%A3-104781621097309/" target="_blank"><i class="facebook square icon"></i>Official Page</a> แล้วบอกส่วนที่จะแก้ เราจะทำการแก้ไขให้ค่ะ</p>
                            </div>
                        </div>
                        <div class="feature-wiget">
                            <div class="content">
                                <h4><i class="ion-android-hangout"></i> <span class="markFont">สมัครแล้วไม่มี E-mail เข้ามา ?</span></h4>
                                <p>ตอบ : อาจมีปัญหาทาง internet หรือเกิดเหตุขัดข้องกับ server กรุณารอสักครู่ ทั้งนี้สามารถแจ้งความผิดพลาดได้ทาง <a href="https://www.facebook.com/%E0%B8%AD%E0%B8%B5%E0%B8%AA%E0%B8%9B%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%95-%E0%B8%81%E0%B8%B5%E0%B8%AC%E0%B8%B2%E0%B8%9A%E0%B8%B8%E0%B8%84%E0%B8%A5%E0%B8%B2%E0%B8%81%E0%B8%A3-%E0%B8%A1%E0%B8%99%E0%B9%80%E0%B8%A3%E0%B8%A8%E0%B8%A7%E0%B8%A3-104781621097309/" target="_blank"><i class="facebook square icon"></i>Official Page</a> เราจะทำการตรวจสอบให้ค่ะ</p>
                            </div>
                        </div>
                        <div class="feature-wiget">
                            <div class="content">
                                <h4><i class="ion-android-hangout"></i> <span class="markFont">ไม่สามารถเข้าสู่ระบบได้ ?</span></h4>
                                <p>ตอบ : ให้เช็ค E-mail กด Activate account ก่อน จากนั้นคลิก <a href="https://esport.nu.ac.th/login" target="_blank">Login</a> เพื่อเข้าสู่ระบบ (สามารถดูวิดีโอตัวอย่างการสมัครได้ <a href="https://www.youtube.com/watch?v=BXBurSbShYk" target="_blank"><i class="youtube icon"></i>ที่นี่</a> หรือดาวน์โหลดคู่มือการสมัครได้ <a href="https://drive.google.com/file/d/1YBJceh4bLu6Bx21p9rfJ3YOAkHwqwPEf/view" target="_blank">ที่นี่</a> )
                                    หากยังไม่ได้สามารถแจ้งความผิดพลาดได้ทาง <a href="https://www.facebook.com/%E0%B8%AD%E0%B8%B5%E0%B8%AA%E0%B8%9B%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%95-%E0%B8%81%E0%B8%B5%E0%B8%AC%E0%B8%B2%E0%B8%9A%E0%B8%B8%E0%B8%84%E0%B8%A5%E0%B8%B2%E0%B8%81%E0%B8%A3-%E0%B8%A1%E0%B8%99%E0%B9%80%E0%B8%A3%E0%B8%A8%E0%B8%A7%E0%B8%A3-104781621097309/" target="_blank"><i class="facebook square icon"></i>Official Page</a> เราจะทำการตรวจสอบให้ค่ะ</p>
                            </div>
                        </div>
                        <div class="feature-wiget">
                            <div class="content">
                                <h4><i class="ion-android-hangout"></i> <span class="markFont">เคยสมัคร E-Sports ในรายการอื่นมาแล้ว สามารถสมัครได้ไหม ?</span></h4>
                                <p>ตอบ : สามารถสมัครได้ค่ะ</p>
                            </div>
                        </div>

                        <div class="feature-wiget">
                            <div class="content">
                                <h4><i class="ion-android-hangout"></i> <span class="markFont">เริ่มแข่งรอบคัดเลือกเมื่อไหร่ ?</span></h4>
                                <p>ตอบ : 18-19 กุมภาพันธ์ 2563 (ถ้ามีการเปลี่ยนแปลงจะแจ้งให้ทราบค่ะ)</p>
                            </div>
                        </div>

                        <div class="feature-wiget">
                            <div class="content">
                                <h4><i class="ion-android-hangout"></i> <span class="markFont">เริ่มแข่งรอบชิงชนะเลิศเมื่อไร ?</span></h4>
                                <p>ตอบ : 21 กุมภาพันธ์ 2563 </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

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
