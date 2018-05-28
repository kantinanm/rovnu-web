@extends('layouts.default')
@section('title')
    :: ส่งหลักฐานทีม ::
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
                <div class="active section">ส่งหลักฐานทีม</div>
            </div>

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">

                    <div class="ui steps">
                        <div class="active step">
                            <i class="camera icon" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">ส่งหลักฐานทีม</span></div>
                                <div class="description">ลิงค์ Video แนะนำทีม </div>
                            </div>
                        </div>
                        <div class="disabled step">
                            <i class="certificate icon" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">ประกาศผลการสมัคร</span></div>
                                <div class="description">ภายใน 7 วัน ที่ส่งหลักฐาน </div>
                            </div>
                        </div>
                    </div>

                    <div class="ui pointing menu">
                        <div class="item">
                            Home
                        </div>
                        <div class="item active">
                            <span class="markFont">ส่งหลักฐานทีม</span>
                        </div>
                        <div class="item">
                            <a href="{{ route('team-info-get') }}"><span class="markFont">ตรวจสอบผล</span></a>
                        </div>
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

            <div class="container">
                <div class="ui icon green message">
                    <i class="chess knight icon"></i>
                    <div class="content">
                        <div class="header">
                            <span class="markFont"> ทีม :{{Auth::user()->teamname}}</span>
                            <br/><span class="markFont"></span>
                        </div>
                        <p>"{{Auth::user()->slug}}"</p>
                        <p><strong> สถาบันการศึกษา :</strong> {{Auth::user()->institution}}</p>
                        <p><strong>ข้อมูลผู้ติดต่อของทีม </strong>{{Auth::user()->name}} , {{Auth::user()->mobilephone}}</p>
                    </div>
                </div>
            </div>
            @if($overNotificationDate==false)
            <div class="ui segment">
                <div class="ui icon yellow message">
                    <i class="video icon"></i>
                    <div class="content">
                        <div class="header">
                            <span class="markFont"> เราต้องการหลักฐานสำหรับการตรวจสอบการมีตัวตนของสมาชิกทุกคนในทีมคุณ </span>
                        </div>
                        <p>
                        <ul class="list">
                            <li>ลิงค์ Video แนะนำทีม</li>
                        </ul>
                        </p>
                        <p>คุณสามารถจัดทำ Clip Video การแนะนำทีม โดยสามารถ<a href="{{$clip_video_url}}" target="_blank">ดูตัวอย่างการจัดทำได้ที่นี่ </a></p>
                    </div>
                </div>


                <div class="panel panel-default">

                    <div class="panel-body">

                        <form class="ui form" method="POST" id="frmSubmitVideo" name="frmSubmitVideo" action="{{ route('team-video-post-update') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <label>ลิงค์ Video แนะนำทีม</label>
                                <input type="text" name="video_link" id="video_link"  value="{{Auth::user()->video_link}}" placeholder="Youtube , Vimeo , Facebook or other public access platform" />
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        ยืนยันข้อมูล
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ui error message"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            @else

                <div class="ui segment">
                    <div class="ui icon yellow message">
                        <i class="hourglass end icon"></i>
                        <div class="content">
                            <div class="header">
                                <span class="markFont"> หมดเวลาการส่งหลักฐาน </span>
                            </div>
                            <p>
                            <ul class="list">
                                <li>คุณสามารถตรวจสอบผลการสมัครได้ที่นี่ <a href="{{ route('team-info-get') }}">ตรวจสอบผลการสมัคร</a>   </li>

                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

            @endif

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
            $(".ui.form")
                .form({
                    fields: {
                        video_link: {
                            identifier: "video_link",
                            rules: [
                                {type: 'empty', prompt: 'ระบุ ลิงค์ Youtube , Vimeo , Facebook หรือแพตฟอร์มวีดิโอที่สามารถเข้าถึงได้'}
                            ]
                        }
                    },

                    inline: true
                });
        });
    </script>

    <script>

    </script>
@endsection