@extends('layouts.default')
@section('title')
    :: กรอกข้อมูลสมาชิกในทีม ::
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
                <div class="active section">ภาพรวม</div>
            </div>

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">


                    <div class="ui pointing menu">
                        <a class="item active">
                            <span class="markFont">ภาพรวม</span>
                        </a>
                        <a class="item">
                            <span class="markFont">จัดการทีม</span>
                        </a>
                        <a class="item">
                            <span class="markFont">สายการแข่งขัน</span>
                        </a>
                        <a class="item">
                            <span class="markFont">เจรจานัดหมายการแข่งขัน</span>
                        </a>
                        <a class="item">
                            <span class="markFont">ตารางการแข่งขัน</span>
                        </a>
                        <div class="right menu">
                            <a class="ui item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="icon power off"></i>
                                <span class="markFont">ออกจากระบบ</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container">

            <div class="ui segment">
                <div class="ui icon green message">
                    <i class="gamepad icon"></i>
                    <div class="content">
                        <div class="header">
                            <span class="markFont"> ข้อมูลสถิติของการแข่งขัน </span>
                        </div>
                        <p>
                        <div class="ui statistics">
                            <div class="brown statistic">
                                <div class="value">
                                    22
                                </div>
                                <div class="label">
                                    <span class="markFont">  ทีม </span>
                                </div>
                            </div>
                            <div class="teal statistic">
                                <div class="value">
                                    157
                                </div>
                                <div class="label">
                                    <span class="markFont"> ผู้เข้าแข่งขัน </span>
                                </div>
                            </div>
                            <div class="yellow statistic">
                                <div class="value">
                                    22
                                </div>
                                <div class="label">
                                    <span class="markFont"> ผู้ลงทะเบียนมาร่วมงาน </span>
                                </div>
                            </div>
                            <div class="pink statistic">
                                <div class="value">
                                    12
                                </div>
                                <div class="label">
                                    <span class="markFont"> คณะ </span>
                                </div>
                            </div>
                            <div class="grey statistic">
                                <div class="value">
                                    10
                                </div>
                                <div class="label">
                                    <span class="markFont"> โรงเรียน </span>
                                </div>
                            </div>
                        </div>
                        </p>
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