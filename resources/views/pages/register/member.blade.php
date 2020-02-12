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
                <div class="active section">กรอกข้อมูลสมาชิกในทีม</div>
            </div>

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">

                    <div class="ui steps">
                        <div class="step disabled">
                            <i class="ion-android-lock" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">นโยบายข้อมูลส่วนบุคคล</span></div>
                                <div class="description">โปรดอ่านและยอมรับเงื่อนไข</div>
                            </div>
                        </div>
                        <div class="disabled step">
                            <i class="ion-compose" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">ลงทะเบียนทีม</span></div>
                                <div class="description">Activate account ผ่าน email</div>
                            </div>
                        </div>
                        <div class="active step">
                            <i class="ion-information-circled" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">กรอกข้อมูลสมาชิกในทีม </span></div>
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

                    <div class="ui pointing menu">
                        <a class="item">
                            Home
                        </a>
                        <div class="item">
                            <span class="markFont">ลงทะเบียนทีม</span>
                        </div>
                        <div class="item active">
                            <span class="markFont">รายชื่อสมาชิก</span>
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
                        <p><strong>ข้อมูลผู้ติดต่อของทีม </strong>{{Auth::user()->name}} , {{Auth::user()->office}} (* อ้างอิงจาก Organization Unit ใน Active Directory)</p>
                    </div>
                </div>
            </div>
            @if (session('info'))

                <div class="alert alert-success">
                    {{ session('info') }}
                </div>

            @endif
            <div class="ui segment">

                <table class="ui compact celled definition table">
                    <thead class="full-width">
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์ที่ติดต่อได้</th>
                        <th>คณะ / กอง /สนง.</th>
                        <th>Garena ID </th>
                        <th>Player Name</th>
                        <th>แก้ไข</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($players as $player)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>
                            {{$player->firstname}} {{$player->lastname}}
                        </td>
                        <td>{{$player->mobilephone}}</td>
                        <td>@if($player->faculty==="อื่นๆ")
                                {{$player->note}}
                            @else
                                {{$player->faculty}}
                            @endif
                        </td>
                        <td>{{$player->rov_id}}</td>
                        <td >
                            {{$player->player_name}}
                        </td>
                        <td >
                            <a href="{{ url('register/players/'.$player->player_id) }}">
                                <button class="ui basic button primary">
                                <i class="icon edit outline"></i>
                                แก้ไข
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach


                    </tbody>
                    <tfoot class="full-width">
                    <tr>
                        <th></th>

                        <th colspan="6">

                            @if($overNotificationDate!=true)
                            @if(count($players)<7)
                            <a href="{{ route('register-players-add') }}"> <button class="ui basic button right floated primary">
                                <i class="icon user"></i>
                                เพิ่มรายชื่อ
                            </button></a>
                            @else
                                <button class="ui basic button right floated primary disabled">
                                    <i class="icon user"></i>
                                    เพิ่มรายชื่อ
                                </button>
                            @endif
                            @if(count($players)>=$num_of_player)
                            <div class="ui left floated small primary labeled icon button" data-toggle="modal" data-target="#exampleModalConfirmTeam">
                                <i class="handshake icon"></i> ยืนยันข้อมูลทีม
                            </div>
                            @else
                                <button class="ui basic button left primary floated disabled">
                                    <i class="icon handshake"></i>
                                    ยืนยันข้อมูลทีม
                                </button>
                                    <div class="ui left pointing orange basic label"  style="">
                                        เพิ่มสมาชิกในทีมขั้นต่ำ {{$num_of_player}} คน แต่ไม่เกิน 7 คน แล้วกดยืนยัน
                                    </div>
                            @endif
                            @endif


                        </th>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>

        <form class="ui form" method="POST" id="frmApprove" name="frmApprove" action="{{ route('register-completed') }}">
        {{ csrf_field() }}
        </form>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalConfirmTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalConfirmTeamTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongConfirmTeamTitle">คุณยืนยันที่จะส่งทีมเข้าแข่งขันตามข้อมูลข้างต้นนี้ </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="ui red message">
                            <div class="header">
                                <span class="markFont"> คุณรับรู้และรับทราบเกี่ยวกับกฏกติกาการแข่งขันและขอยอมรับว่าความข้อมูลที่ได้บันทึกและได้ลงทะเบียนเป็นข้อมูลจริง</span>
                            </div>
                            <ul class="list">
                                <li>หากทีมงานตรวจสอบพบว่ามีข้อมูลบางส่วนเป็นข้อมูลเท็จ ทางเราของสงวนสิทธิในการยกเลิกสิทธิการเข้าร่วมการแข่งขันของทีมนี้และสมาชิกทุกคนภายในทีม</li>
                                <li>ในระหว่างดำเนินการแข่งขัน หากมีข้อโต้แย้งกันระหว่างทีม หรือทีมใดทีมหนึ่งมีข้อพิพาษหรือทำผิดกติกา คำวินิจฉัยของคณะกรรมการจัดการแข่งขันถือเป็นที่สิ้นสุด</li>
                            </ul>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">ย้อนกลับ</button>
                       <button type="button" class="btn btn-primary" onclick="approve()">ยืนยันการลงทะเบียนทีม</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

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

        function approve(){
            $("#frmApprove").submit();
        }
    </script>

    <script>

    </script>
@endsection