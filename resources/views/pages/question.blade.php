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
@endsection
@include('includes.header_v2')
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

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">
                    <div class="feature-wiget">
                        <div class="content">
                            <h4><i class="ion-android-hangout"></i> <span class="markFont">ของรางวัลจากทาง Garena ในรอบ 4 ทีมสุดท้ายได้รับครบทุกคนในทีมเลยหรือเปล่า ?</span></h4>
                            <p>ตอบ : ภายใน 1 ทีม จะสามารถรับรางวัลได้แค่ 5 ไอดีเท่านั้น คือผู้เล่นตัวจริง ไม่รวมผู้เล่นสำรองค่ะ</p>
                        </div>
                    </div>
                    <div class="feature-wiget">
                        <div class="content">
                            <h4><i class="ion-android-hangout"></i> <span class="markFont">สมัครแล้วไม่มี E-mail เข้ามา ?</span></h4>
                            <p>ตอบ : อาจมีปัญหาทาง internet หรือเกิดเหตุขัดข้องกับ server กรุณารอสักครู่ ทั้งนี้สามารถแจ้งความผิดพลาดได้ทาง <a href="https://www.facebook.com/ecpenu-124356001077081/" target="_blank"><i class="facebook square icon"></i>Official Page</a> เราจะทำการตรวจสอบให้ค่ะ</p>
                        </div>
                    </div>
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
                            <p>ตอบ : ถ้ากดยืนยันทีมแล้วจะไม่สามารถแก้ไขข้อมูลเองได้เนื่องจากป้องกันการเปลี่ยนตัวผู้เล่นภายหลัง หากกรอกข้อมูลผิดสามารถแจ้งมาทาง <a href="https://www.facebook.com/ecpenu-124356001077081/" target="_blank"><i class="facebook square icon"></i>Official Page</a> แล้วบอกส่วนที่จะแก้ เราจะทำการแก้ไขให้ค่ะ</p>
                        </div>
                    </div>
                    <div class="feature-wiget">
                        <div class="content">
                            <h4><i class="ion-android-hangout"></i> <span class="markFont">ไม่สามารถเข้าสู่ระบบได้ ?</span></h4>
                            <p>ตอบ : ให้เช็ค E-mail กด Activate account ก่อน จากนั้นคลิก <a href="http://www.ecpe.nu.ac.th/rov/login" target="_blank">ที่นี่</a> เพื่อ login เข้าสู่ระบบ (สามารถดูวิดีโอตัวอย่างการสมัครได้ <a href="https://www.youtube.com/watch?v=BXBurSbShYk" target="_blank"><i class="youtube icon"></i>ที่นี่</a> หรือดาวน์โหลดคู่มือการสมัครได้ <a href="https://drive.google.com/file/d/1YBJceh4bLu6Bx21p9rfJ3YOAkHwqwPEf/view" target="_blank">ที่นี่</a> )
                                หากยังไม่ได้สามารถแจ้งความผิดพลาดได้ทาง <a href="https://www.facebook.com/ecpenu-124356001077081/" target="_blank"><i class="facebook square icon"></i>Official Page</a> เราจะทำการตรวจสอบให้ค่ะ</p>
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
                            <h4><i class="ion-android-hangout"></i> <span class="markFont">อยู่ในระหว่างเตรียมเข้ามหาวิทยาลัยสามารถสมัครได้ไหม ?</span></h4>
                            <p>ตอบ : สมัครในนามของโรงเรียนเก่าได้ แต่สมาชิกในทีมต้องมาจากสถาบันเดียวกัน</p>
                        </div>
                    </div>
                    <div class="feature-wiget">
                        <div class="content">
                            <h4><i class="ion-android-hangout"></i> <span class="markFont">เริ่มแข่งรอบคัดเลือกเมื่อไหร่ ?</span></h4>
                            <p>ตอบ : วันที่ 1 กรกฎาคม 2561 (ถ้ามีการเปลี่ยนแปลงจะแจ้งให้ทราบค่ะ)</p>
                        </div>
                    </div>
                    <div class="feature-wiget">
                        <div class="content">
                            <h4><i class="ion-android-hangout"></i> <span class="markFont">หากผ่านเข้ารอบ 4 ทีมสุดท้ายแต่ไม่สามารถมาแข่งในวันที่ 17 สิงหาคมได้ จะโดนปรับแพ้เลยไหม ?</span></h4>
                            <p>ตอบ : ต้องดูสาเหตุที่ไม่สามารถมาร่วมแข่งได้เป็นกรณีไป คือ
                                <ul>
                                    <li><p>ติดเรียนเพราะไม่ใช่วันหยุด เราจะออกหนังสือขออนุญาตกับทางโรงเรียนให้</p></li>
                            <li><p>ติดธุระส่วนตัวสามารถให้ผู้เล่นสำรองในทีมแข่งแทนผู้เล่นตัวจริงได้ แต่หากไม่มาทั้งทีมจะโดนปรับแพ้</p></li>
                            </ul>
                            </p>
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
