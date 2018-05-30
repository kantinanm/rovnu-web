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

    <section id="rewards">
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
            <div class="col-md-12" style="margin-top: 20px;">
                <div class="ui one column grid">
                    <div class="column">
                        <div class="ui raised segment">
                            <a class="ui red ribbon label">รางวัลในการแข่งขันรอบสุดท้าย</a>
                            <div class="feature-wiget">
                                <div class="icon-wraper">
                                    <i class="ion-trophy"></i>
                                </div>
                                <div class="content">
                                    <h4 class="bottom-line"><span class="markFont">รางวัลสำหรับทีมที่เข้ามาถึงรอบ 4 ทีมสุดท้าย</span></h4>
                                    <ul>
                                        <li><p><i class="trophy icon yellow"></i> อันดับ 1 ได้รับเงินรางวัลจำนวน 5,000 บาท, คูปองในเกม 500 คูปองต่อคน, สกินฮีโร่คนละ 1 สกินต่อคน</p></li>
                                        <li><p><i class="trophy icon grey"></i> อันดับ 2 ได้รับเงินรางวัลจำนวน 3,000 บาท, คูปองในเกม 300 คูปองต่อคน, สกินฮีโร่คนละ 1 สกินต่อคน</p></li>
                                        <li><p><i class="trophy icon brown"></i> อันดับ 3 - 4 ได้รับเงินรางวัลจำนวน 1,000 บาท, คูปองในเกม 100 คูปองต่อคน</p></li>
                                    </ul>
                                    <p>หมายเหตุ ภายใน 1 ทีม จะสามารถรับรางวัลได้แค่ 5 ไอดีเท่านั้น คือผู้เล่นตัวจริงไม่รวมผู้เล่นสำรอง คูปองและสกินสนับสนุนโดย Garena Thailand</p>
                                </div>
                            </div>
                            <div class="ui five column grid">
                                <div class="column">
                                    <div class="ui fluid card">
                                        <div class="image">
                                            <img src="{{ URL::asset('images/money_reward.png') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="ui fluid card">
                                        <div class="image">
                                            <img src="{{ URL::asset('images/coupon.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 20px;">
                <div class="ui one column grid">
                    <div class="column">
                        <div class="ui raised segment">
                            <a class="ui red ribbon label">กิจกรรมแจกของรางวัล</a>
                            <div class="feature-wiget">
                                <div class="icon-wraper">
                                    <i class="ion-android-share-alt"></i>
                                </div>
                                <div class="content">
                                    <h4 class="bottom-line"><span class="markFont">ร่วมสนุกกับกิจกรรมแจกของรางวัล</span></h4>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;เพียงคุณกด Like Official Page และกดแชร์ Post กิจกรรมเป็นแบบสาธารณะ ก็มีสิทธิ์ลุ้นรับของรางวัลจากเรามากมาย อย่ารอช้าเข้าไปกด Like + Follow Official Page ของเรากันเล้ยย</p>
                                </div>
                            </div>
                            <div class="ui two column grid">
                                <div class="column">
                                    <div class="ui fluid card">
                                        <div class="content">
                                            <div class="header">กิจกรรม like & share ครั้งที่ 1 </div>
                                        </div>
                                        <div class="image">
                                            <img src="{{ URL::asset('images/rewards_activity1.jpg') }}">
                                        </div>
                                        <div class="content">
                                            <div class="header">
                                                <i class="check icon green"></i>แจกแล้ว
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="ui fluid card">
                                        <div class="content">
                                            <div class="header">กิจกรรม like & share ครั้งที่ 2 </div>
                                        </div>
                                        <div class="image">
                                            <img src="{{ URL::asset('images/rewards_activity2.jpg') }}">
                                        </div>
                                        <div class="content">
                                            <div class="header">
                                                <i class="facebook square icon"></i>&nbsp;&nbsp;ร่วมสนุกผ่านเพจ ecpe.nu
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 20px;">
                <div class="ui one column grid">
                    <div class="column">
                        <div class="ui raised segment">
                            <a class="ui red ribbon label">รางวัลภายในงาน</a>
                            <div class="feature-wiget">
                                <div class="icon-wraper">
                                    <i class="ion-ribbon-a"></i>
                                </div>
                                <div class="content">
                                    <h4 class="bottom-line"><span class="markFont">ของรางวัลภายในงาน</span></h4>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;เพียงเข้ามาร่วมชมการแข่งขันสดๆ รอบ 4 ทีมสุดท้ายในวันงาน ก็มีสิทธิ์ได้รางวัลจาก Garena Thailand เช่นกัน โดยเราจะสุ่มผู้โชคดีได้รับ skin ในเกม จำนวน 10 รางวัล และเสื้อยืด RoV สุดเท่ห์อีก 5 รางวัล นอกจากนี้ยังได้ถ่ายรูปคู่กับคอสเพลย์สาว แสนสวยอีกด้วย</p>
                                </div>
                            </div>
                            <div class="ui two column grid">
                                <div class="column">
                                    <div class="ui fluid card">
                                        <div class="image">
                                            <img src="{{ URL::asset('images/rewards.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="ui fluid card">
                                        <div class="image">
                                            <img src="{{ URL::asset('images/selfie.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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