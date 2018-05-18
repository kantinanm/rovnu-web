@extends('layouts.default')
@section('title')
    :: นโยบายข้อมูลส่วนบุคคล ::
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
                <div class="active section">ลงทะเบียนเข้าร่วมแข่งขัน</div>
            </div>

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">

                    <div class="ui steps">
                        <div class="active step">
                            <i class="ion-android-lock" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">นโยบายข้อมูลส่วนบุคคล</span></div>
                                <div class="description">โปรดอ่านและยอมรับเงื่อนไข</div>
                            </div>
                        </div>
                        <div class="step disabled">
                            <i class="ion-compose" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">ลงทะเบียนทีม</span></div>
                                <div class="description">สำรองที่นั่งในการแข่งขัน</div>
                            </div>
                        </div>
                        <div class="disabled step">
                            <i class="ion-information-circled" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">กรอกข้อมูลสมาชิกในทีม</span></div>
                                <div class="description">ใส่รายชื่อผู้ในเล่นทีม</div>
                            </div>
                        </div>

                        <div class="disabled step">
                            <i class="ion-checkmark-circled" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">ตรวจสอบข้อมูล</span></div>
                                <div class="description">กับ Garana Thailand </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container padding-top-bottom-20">
            <div class="row">
                <div class="col-md-12">

                    <h2 class="ui header">

                        <div class="content">
                            <span class="markFont">นโยบายข้อมูลส่วนบุคคล</span>
                        </div>
                    </h2>

                    <div class="ui floating message">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลส่วนบุคคลของคุณเป็นสิ่งสำคัญต่อการจัดกิจกรรมในครั้งนี้ เราได้จัดทำคำแถลงเรื่องความเป็นส่วนตัวนี้ขึ้นเพื่อให้คุณทราบถึงวิธีการรวบรวม การใช้งาน การแชร์และการจัดเก็บข้อมูลส่วนบุคคลของคุณ</p>
                        <h4 class="ui header">
                            <span class="markFont">เมื่อคุณสร้างบัญชี</span>
                            <div class="sub header"><span class="markFont">เมื่อคุณสร้างบัญชีในเว็บไซต์ เราขอให้คุณให้ข้อมูลส่วนบุคคลรวมถึงชื่อและที่อยู่อีเมลของคุณ คุณจำเป็นต้องระบุชื่อเต็มของคุณ คุณจะใช้ที่อยู่อีเมลและรหัสผ่านเพื่อเข้าสู่บัญชีของคุณ บัญชีของคุณจะได้รับการป้องกันด้วยรหัสผ่าน เราจะใช้ชื่อของคุณเพื่อช่วยในการยืนยันบัญชีของคุณ เมื่อคุณโทรติดต่อฝ่ายจัดกิจกรรมการแข่งขันครั้งนี้</span></div>
                        </h4>
                        <p></p>
                        <h4 class="ui header">
                            <span class="markFont">เมื่อคุณเพิ่มข้อมูลสมาชิกในทีม </span>
                            <div class="sub header"><span class="markFont">การลงทะเบียนดังกล่าว จะใช้ ชื่อ-นามสกุล จริง รายละเอียดข้อมูลที่ใช้สำหรับการติดต่อ และข้อมูล ID ในเกม จะถูกเก็บไว้เพื่อ
ใช้ในการตรวจสอบกับทาง Garana Thailand เท่านั้น  ทางผู้จัดงานไม่มีนโยบายเปิดเผยข้อมูลส่วนตัว </span></div>
                        </h4>

                        <h4 class="ui header">
                            <span class="markFont">ข้อมูลใดบ้างที่เปิดเผย </span>
                            <div class="sub header"><span class="markFont">ทางผู้จัดงานจำเป็นต้องเปิดเผยข้อมูลบางส่วน เพื่อให้การจัดการแข่งขันเป็นไปด้วยความเรียบร้อย อธิ ชื่อทีมที่ใช้ในการแข่งขัน ข้อความคำโปรย ลิงค์ Video สำหรับแนะนำทีม ตลอดจน เบอร์ติดต่อสำหรับผู้จัดการทีมหรือหัวหน้าทีม </span></div>
                        </h4>

                    </div>




                </div>
            </div>
        </div>

        <div class="container padding-bottom-30">
            <div class="row">
                <div class="col-md-12" style="text-align: center">

                    <div class="ui buttons">
                        <a href="{{ URL::previous() }}"><button class="ui button">ปฏิเสธ</button></a>
                        <div class="or"></div>
                        <a href="{{ url('/register') }}"><button class="ui positive button">ยอมรับ</button></a>
                    </div>
                </div>
            </div>
        </div>

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