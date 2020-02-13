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
    <section id="activity" class="newsletter">
        <div class="container">

            <div class="ui breadcrumb">
                <a class="section">หน้าแรก</a>
                <div class="divider"> / </div>
                <div class="active section">กิจกรรมภายในงาน</div>
            </div>

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">

                </div>
            </div>
        </div>
        <div class="container">
            <table class="ui striped single line table" style="margin-top: 20px;">
                <thead>
                <tr align="center">
                    <th colspan="3">
                        <p>กําหนดการโครงการฝึกอบรมเพื่อเสริมสร้างความเข้าใจในอุตสาหกรรมเกมและการแข่งขันกีฬา E-sport</p>
                        <p>วันที่ 17 สิงหาคม 2561</p>
                        <p>ณ ห้อง Slop CE 4 ชั้น 7 อาคารวิศวกรรมโยธา คณะวิศวกรรมศาสตร์</p>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="2">
                        <div class="ui ribbon label green">ช่วงเช้า</div>
                    </td>
                </tr>
                <tr>
                    <td width="20%">08.30 – 09.00</td>
                    <td width="80%">ลงทะเบียน</td>
                </tr>
                <tr>
                    <td>09.00 – 09.50</td>
                    <td>
                        <b>เสวนาในหัวข้อ “อุตสาหกรรมเกม และ การแข่งขัน E-Sport ในปัจจุบัน”<br>
                            โดย<br></b>
                        <ol>
                            <li>สมาคมกีฬาอีสปอร์ตแห่งประเทศไทย</li>
                            <li>บริษัทเกม Garena</li>
                            <li>อาจารย์ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>09.50 – 10.00</td>
                    <td>พักรับประทานอาหารว่าง</td>
                </tr>
                <tr>
                    <td>10.00 – 11.00</td>
                    <td>
                        <b>เสวนาในหัวข้อ “มหาวิทยาลัย กับ อุตสาหกรรม/ธุรกิจ เกม และ E-Sport”<br>
                            โดย<br></b>
                        <ol>
                            <li>อาจารย์ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร</li>
                            <li>อาจารย์คณะสถาปัตยกรรมศาสตร์ มหาวิทยาลัยนเรศวร</li>
                            <li>บริษัทเกม Garena</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>11.00 – 12.00</td>
                    <td>
                        <b>เสวนาในหัวข้อ “สมดุลการใช้ชีวิต ควบคู่กับกิจกรรมเกม และกีฬา E-sport”<br>
                            โดย<br></b>
                        <ol>
                            <li>อาจารย์ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร</li>
                            <li>แชมป์ RoV</li>
                            <li>แคสเตอร์สาวน่ารัก</li>
                        </ol>
                        <div class="ui ribbon label blue">ลุ้นร่วมเล่นเกมส์กับแชมป์ RoV และแคสเตอร์สาวน่ารัก</div><br>
                        <img src="{{ URL::asset('images/yuki.png') }}"  style="height: 150px;">
                    </td>
                </tr>
                <tr>
                    <td>12.00 – 13.00</td>
                    <td>พักรับประทานอาหารกลางวัน</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="ui ribbon label red">ช่วงบ่าย</div>
                    </td>
                </tr>
                <tr>
                    <td>13.00 – 13.30</td>
                    <td>
                        <ul>
                            <li>ผู้เข้าแข่งขันรายงานตัว</li>
                            <li>ลงทะเบียนเข้าร่วมงาน</li>
                        </ul>
                        <div class="ui ribbon label orange">ถ่ายรูปร่วมกับคอสเพลย์สาว แสนสวย</div><br>
                        <img src="{{ URL::asset('images/cosplay.png') }}"  style="height: 180px;">
                    </td>
                </tr>
                <tr>
                    <td>13.30 – 14.30</td>
                    <td>เริ่มแข่งขันคู่ที่ 1 จํานวน 2 ทีม จํานวน 3 รอบ</td>
                </tr>
                <tr>
                    <td>14.30 – 15.30</td>
                    <td>เริ่มแข่งขันคู่ที่ 2 จํานวน 2 ทีม จํานวน 3 รอบ</td>
                </tr>
                <tr>
                    <td>15.30 – 15.45</td>
                    <td>พักรับประทานอาหารว่าง</td>
                </tr>
                <tr>
                    <td>15.45 – 16.45</td>
                    <td>เริ่มแข่งรอบสุดท้าย จํานวน 2 ทีม จํานวน 3 รอบ<br>
                        <img src="{{ URL::asset('images/vs02.png') }}"  style="height: 180px;">
                    </td>
                </tr>
                <tr>
                    <td>16.45</td>
                    <td><ul>
                            <li>ประกาศผลและมอบรางวัล</li>
                            <li>สุ่มผู้โชคดีได้รับ skin และ เสื้อยืด RoV สุดเท่ห์</li>
                        </ul>
                        <img src="{{ URL::asset('images/rewards.jpg') }}" style="height: 180px;"></td>
                </tr>
                </tbody>
            </table>
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