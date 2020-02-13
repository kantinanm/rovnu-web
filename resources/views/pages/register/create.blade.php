@extends('layouts.default')
@section('title')
    :: ลงทะเบียนทีม ::
@stop
@section('css_script')
    <meta name="csrf_token" content="{{ csrf_token() }}" />
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
                <div class="active section">ลงทะเบียนการร่วมแข่งขัน</div>
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
                        <div class="active step">
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
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(session('status'))
                        {{session('status')}}
                    @endif
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="ui form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <label>ชื่อทีม</label>
                                <input type="text" name="teamname" id="teamname"  value="{{ old('teamname') }}" placeholder="ระบุชื่อทีมที่ใช้ในการแข่งขัน 3 พยางค์ โดยให้มีสังกัดสีของทีมอยู่ด้วย" />
                            </div>

                            <div class="field">
                                <label></label>
                                <input type="hidden" name="teamslug" id="teamslug"  value="{{ old('teamslug') }}" placeholder="พูดอะไรสักเล็กน้อย หรือคำแนะนำทีม เช่น เก่งไม่กลัว กลัวแพ้บาย..." />
                            </div>


                            <div class="two fields">
                                <div class="field">
                                    <label>สี</label>
                                    <select name="team_type" id="team_type">
                                        <option value="pink_level" >สีชมพู (กลุ่มวิทยาศาสตร์สุขภาพ)</option>
                                        <option value="violet_level">สีม่วง (กลุ่มวิทยาศาสตร์และเทคโนโลยี)</option>
                                        <option value="cyan_level">สีฟ้า (กลุ่มมนุษยศาสตร์และสังคมศาสตร์)</option>
                                        <option value="green_level">สีเขียว (กลุ่มสำนักงานอธิการบดี)</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label>เบอร์โทรศัพท์มือถือ ที่ติดต่อได้</label>
                                    <input type="text" name="mobilephone" id="mobilephone"  value="{{ old('mobilephone') }}" />
                                </div>
                            </div>
                            <div class="field">
                                <label></label>
                                <input type="hidden" name="facebook_id" id="facebook_id"  value="{{ old('facebook_id') }}" placeholder="** ใช้สำหรับการดึงเข้ากลุ่มในการนัดเวลาการแข่งขัน" />
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label></label>
                                    <input type="hidden" name="name" id="name"  value="{{ old('name') }}" />
                                </div>
                                <div class="field">
                                    <label></label>
                                    <input type="hidden" name="institution" id="institution"  value="{{ old('institution') }}" />
                                    <input type="hidden" name="color" id="color"  value="{{ old('color') }}" />
                                </div>
                            </div>

                            <div class="field">
                                <label></label>
                                <input type="hidden" name="email" id="email"  value="{{ old('email') }}" />

                            </div>

                            <div class="two fields">
                                <div class="field">
                                    <label>NU-NET Account</label>
                                    <input type="text" name="username" id="username"  value="{{ old('username') }}" />
                                </div>
                                <div class="field">
                                    <label>Password</label>
                                    <input type="password" name="password" id="password"  value="" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        ลงทะเบียน
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


            var minPasswordLength = 6;
            $(".ui.form")
                .form({
                    fields: {
                        teamname: {
                            identifier: "teamname",
                            rules: [
                                {type: 'empty', prompt: 'ระบุชื่อทีมที่ใช้ในการแข่งขัน 3 พยางค์ โดยให้มีสังกัดสีของทีมอยู่ด้วย  และทีมงานขอสงวนสิทธิในการเปลี่ยนแปลงชื่อโดยไม่แจ้งให้ทราบล่วงหน้า'}
                            ]
                        }
                        ,
                        mobilephone: {
                            identifier: 'mobilephone',
                            rules: [
                                {
                                    type: 'regExp[/[0]{1}[0-9]{9,}/]',
                                    prompt: 'หมายเลขโทรศัพท์ 10 หลัก ตัวอย่าง 085xxyyyyy'
                                }
                            ]},
                        username: {
                            identifier: "username",
                            rules: [
                                {type: 'empty', prompt: 'บัญชีผู้ใช้งานในเครือข่าย NU-NET ไม่ต้องมี nu\\'}
                            ]
                        },
                        password: {
                            identifier: "password",
                            rules: [
                                {type: 'empty', prompt: 'รหัสผ่านภายในเครือข่าย NU-NET ในการยืนยันตัวตน  คุณไม่ต้องกังวลว่าว่าเราจะแอบดักจับรหัสผ่าน  '}
                            ]
                        },

                    },

                    inline: true
                });

            $("select#team_type").change(function(){

                console.log($(this).val());

                if($(this).val()=="pink_level"){
                    $('#institution').val('pink');
                    $('#color').val('สีชมพู (กลุ่มวิทยาศาสตร์สุขภาพ)');

                }else if($(this).val()=="violet_level"){
                    $('#institution').val('violet');
                    $('#color').val('สีม่วง (กลุ่มวิทยาศาสตร์และเทคโนโลยี)');

                }else if($(this).val()=="cyan_level"){
                    $('#institution').val('cyan');
                    $('#color').val('สีฟ้า (กลุ่มมนุษยศาสตร์และสังคมศาสตร์)');

                }else if($(this).val()=="green_level"){
                    $('#institution').val('green');
                    $('#color').val('สีเขียว (กลุ่มสำนักงานอธิการบดี)');
                }

                console.log($('#color').val());
                console.log($('#institution').val());

            })
        });
    </script>

    <script>

    </script>
@endsection