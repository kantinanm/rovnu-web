@extends('layouts.default')
@section('title')
    :: ตรวจสอบผลการสมัคร ::
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
        <div id="home-slider" class="empty-carousel">

        </div>
    </section>

    <section id="formUI" class="newsletter">
        <div class="container">

            <div class="ui breadcrumb">
                <a class="section">หน้าแรก</a>
                <div class="divider"> / </div>
                <div class="active section">ตรวจสอบผลการสมัคร</div>
            </div>

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">

                    <div class="ui steps">
                        @if($by_pass_submit_video==false)
                        <div class="disabled step">
                            <i class="camera icon" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">ส่งหลักฐานทีม</span></div>
                                <div class="description">ลิงค์ Video แนะนำทีม </div>
                            </div>
                        </div>
                        @endif
                        <div class="active step">
                            <i class="certificate icon" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">ประกาศผลการสมัคร</span></div>
                                <div class="description">ภายใน 3 วัน @if($by_pass_submit_video==true) ที่กดยืนยันการส่งข้อมูลทีม @else ที่ส่งหลักฐาน @endif </div>
                            </div>
                        </div>
                    </div>

                    <div class="ui pointing menu">
                        <div class="item">
                            Home
                        </div>
                        @if($by_pass_submit_video==false)
                        <div class="item">
                            <span class="markFont">ส่งหลักฐานทีม</span>
                        </div>
                        @endif
                        <div class="item active">
                            <span class="markFont">ตรวจสอบผล</span>
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
                        <p>เบอร์ที่ติดต่อได้ : {{Auth::user()->mobilephone}}</p>
                        <p><strong> กลุ่ม :</strong> {{Auth::user()->color}}</p>
                        <p><strong>ข้อมูลผู้ติดต่อของทีม </strong>{{Auth::user()->name}} , {{Auth::user()->office}}</p>
                    </div>
                </div>
            </div>

            <div class="ui segment">
                @if($by_pass_submit_video==true)
                    @if(($day_diff>=7)&(Auth::user()->register_completed==1))
                        <div class="ui icon green message">
                            <i class="handshake outline icon"></i>
                            <div class="content">
                                <div class="header">
                                    <span class="markFont"> ยินดีด้วย </span>
                                </div>
                                <p>
                                <ul class="list">
                                    <li>ทีมของคุณผ่านเข้าสู่การคัดเลือกสำหรับการร่วมแข่งขันใน Tournament นี้ </li>
                                    <li>เราตรวจสอบแล้ว ทีมของคุณสมบัติครบถ้วนตามที่ได้ระบุไว้ในกติกาการแข่งขัน </li>
                                </ul>
                                </p>
                                <p> ติดตามข่าวการจับฉลากแบ่งสาย ผ่านทาง facebook Like <i class="thumbs up icon"></i> + Follow <i class="rss icon"></i> <a href="https://www.facebook.com/ecpenu-124356001077081/"> ecpe.nu  </a>และช่องทางเว็บไซต์ </p>
                            </div>
                        </div>
                    @elseif(Auth::user()->register_completed==1)
                        <div class="ui icon green message">
                            <i class="handshake outline icon"></i>
                            <div class="content">
                                <div class="header">
                                    <span class="markFont"> เราได้รับข้อมูลของทีมคุณแล้ว </span>
                                </div>
                                <p>
                                <ul class="list">
                                    <li>เราจะรีบตรวจสอบหลักฐานของทีมคุณ และแจ้งให้คุณทราบ</li>
                                    <li>เราขอบคุณทุกท่านที่เข้ามามีส่วนร่วมในการแข่งขันรายการนี้ หวังเป็นอย่างยิ่งว่า ทีมนี้จะได้ของรางวัลในภายในงานแล้วเจอกัน  </li>
                                </ul>
                                </p>
                                @if($by_pass_submit_video==false)
                                <p>Video ทีมของคุณก็มีสิทธิถูกเลือก เป็นทีม Popolar Vote พร้อมรับรางวัลจากกิจกรรมย่อยภายในการจัดกิจกรรมการแข่งขันครั้งนี้  </p>
                                @endif
                            </div>
                        </div>
                    @elseif(Auth::user()->register_completed==0)
                        <div class="ui icon red message">
                            <i class="ban icon"></i>
                            <div class="content">
                                <div class="header">
                                    <span class="markFont"> เสียใจด้วย </span>
                                </div>
                                <p>
                                <ul class="list">
                                    <li>ทีมของคุณไม่ได้กดยืนยันการส่งรายชื่อผู้เล่นในทีม  ที่ระบุไว้ในคู่มือการสมัคร </li>
                                    <li>ไม่เป็นไร โอกาสหน้ายังมี สำหรับ ROV Tournament ปีหน้า ทางเราขอขอบคุณทีมของคุณที่เข้ามาร่วมในกิจกรรมของปีนี้ </li>
                                </ul>
                                </p>
                                <p>ฝากกด Like <i class="thumbs up icon"></i> + Follow <i class="rss icon"></i> Page <a href="https://www.facebook.com/ecpenu-124356001077081/"> ecpe.nu </a> เพื่อติดตามข่าวสารกิจกรรมดีๆที่จะจัดขึ้นในปีหน้า  </p>
                            </div>
                        </div>
                    @endif
                @else

                @if ((Auth::user()->verified==0)&(Auth::user()->register_completed==1))
                    @if((Auth::user()->video_link=="")&(!$overNotificationDate))
                    <div class="ui icon yellow message">
                        <i class="paper plane outline icon"></i>
                        <div class="content">
                            <div class="header">
                                <span class="markFont"> ทีมของคุณยังไม่ได้ส่งหลักฐานการสมัคร </span>
                            </div>
                            <p>
                            <ul class="list">
                                <li>ลิงค์ Video แนะนำทีม</li>
                                <li><a href="{{ route('team-video-form') }}">คลิ๊กที่นี่ </a>เพื่อส่งหลักฐาน  </li>
                            </ul>
                            </p>
                            <p>เราต้องการหลักฐานสำหรับการตรวจสอบการมีตัวตนของสมาชิกทุกคนในทีมคุณ </p>
                            <p>คุณสามารถจัดทำ Clip Video การแนะนำทีม โดยสามารถ<a href="{{$clip_video_url}}" target="_blank">ดูตัวอย่างการจัดทำได้ที่นี่ </a></p>
                        </div>
                    </div>
                     @elseif((Auth::user()->video_link=="")&($overNotificationDate))
                    <div class="ui icon red message">
                        <i class="ban icon"></i>
                        <div class="content">
                            <div class="header">
                                <span class="markFont"> เสียใจด้วย </span>
                            </div>
                            <p>
                            <ul class="list">
                                <li>ทีมของคุณขาดคุณสมบัติบางส่วน ที่ระบุไว้ในกติกา </li>
                                <li>ไม่เป็นไร โอกาสหน้ายังมี สำหรับ ROV Tournament ปีหน้า ทางเราขอขอบคุณทีมของคุณที่เข้ามาร่วมในกิจกรรมของปีนี้ </li>
                            </ul>
                            </p>
                            <p>ฝากกด Like <i class="thumbs up icon"></i> + Follow <i class="rss icon"></i> Page <a href="https://www.facebook.com/ecpenu-124356001077081/"> ecpe.nu </a> เพื่อติดตามข่าวสารกิจกรรมดีๆที่จะจัดขึ้นในปีหน้า  </p>
                        </div>
                    </div>
                    @endif
                @endif

                @if ((Auth::user()->verified==0)&(Auth::user()->register_completed==2))
                    @if($overNotificationDate)
                        <div class="ui icon red message">
                            <i class="ban icon"></i>
                            <div class="content">
                                <div class="header">
                                    <span class="markFont"> เสียใจด้วย </span>
                                </div>
                                <p>
                                <ul class="list">
                                    <li>ทีมของคุณขาดคุณสมบัติบางส่วน ที่ระบุไว้ในกติกา </li>
                                    <li>ไม่เป็นไร โอกาสหน้ายังมี สำหรับ ROV Tournament ปีหน้า ทางเราขอขอบคุณทีมของคุณที่เข้ามาร่วมในกิจกรรมของปีนี้ </li>
                                </ul>
                                </p>
                                <p>ฝากกด Like <i class="thumbs up icon"></i> + Follow <i class="rss icon"></i> Page <a href="https://www.facebook.com/ecpenu-124356001077081/"> ecpe.nu </a> เพื่อติดตามข่าวสารกิจกรรมดีๆที่จะจัดขึ้นในปีหน้า  </p>
                            </div>
                        </div>
                    @else

                            @if(($day_diff>=7)&($allowShowTeamAcceptedStepVideo==true))

                                <div class="ui icon green message">
                                    <i class="handshake outline icon"></i>
                                    <div class="content">
                                        <div class="header">
                                            <span class="markFont"> ยินดีด้วย </span>
                                        </div>
                                        <p>
                                        <ul class="list">
                                            <li>ทีมของคุณผ่านเข้าสู่การคัดเลือกสำหรับการร่วมแข่งขันใน Tournament นี้ </li>
                                            <li>เราตรวจสอบแล้ว ทีมของคุณสมบัติครบถ้วนตามที่ได้ระบุไว้ในกติกาการแข่งขัน </li>
                                        </ul>
                                        </p>
                                        <p> ติดตามข่าวการจับฉลากแบ่งสาย ผ่านทาง facebook Like <i class="thumbs up icon"></i> + Follow <i class="rss icon"></i> <a href="https://www.facebook.com/ecpenu-124356001077081/"> ecpe.nu  </a>และช่องทางเว็บไซต์ </p>
                                    </div>
                                </div>
                            @else

                                <div class="ui icon green message">
                                    <i class="handshake outline icon"></i>
                                    <div class="content">
                                        <div class="header">
                                            <span class="markFont"> เราได้รับข้อมูลของทีมคุณแล้ว </span>
                                        </div>
                                        <p>
                                        <ul class="list">
                                            <li>เราจะรีบตรวจสอบหลักฐานของทีมคุณ และแจ้งให้คุณทราบ</li>
                                            <li>เราขอบคุณทุกท่านที่เข้ามามีส่วนร่วมในการแข่งขันรายการนี้ หวังเป็นอย่างยิ่งว่า ทีมนี้จะได้ของรางวัลในภายในงานแล้วเจอกัน  </li>
                                        </ul>
                                        </p>
                                        <p>Video ทีมของคุณก็มีสิทธิถูกเลือก เป็นทีม Popolar Vote พร้อมรับรางวัลจากกิจกรรมย่อยภายในการจัดกิจกรรมการแข่งขันครั้งนี้  </p>
                                    </div>
                                </div>

                            @endif
                    @endif

                @endif

                @if ((Auth::user()->verified==1)&(Auth::user()->register_completed==2))

                    <div class="ui icon green message">
                        <i class="handshake outline icon"></i>
                        <div class="content">
                            <div class="header">
                                <span class="markFont"> ยินดีด้วย </span>
                            </div>
                            <p>
                            <ul class="list">
                                <li>ทีมของคุณผ่านเข้าสู่การคัดเลือกสำหรับการร่วมแข่งขันใน Tournament นี้ </li>
                                <li>เราตรวจสอบแล้ว ทีมของคุณสมบัติครบถ้วนตามที่ได้ระบุไว้ในกติกาการแข่งขัน </li>
                            </ul>
                            </p>
                            <p> ติดตามข่าวการจับฉลากแบ่งสาย ผ่านทาง facebook Like <i class="thumbs up icon"></i> + Follow <i class="rss icon"></i> <a href="https://www.facebook.com/ecpenu-124356001077081/"> ecpe.nu  </a>และช่องทางเว็บไซต์ </p>
                        </div>
                    </div>

                @endif

                @endif

            </div>
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