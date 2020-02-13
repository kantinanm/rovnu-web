@extends('layouts.default')
@section('title')
    NU eSports Tournament : งานเฉลิมฉลองครบรอบ 25 ปี คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร
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
        @if (session('info'))
        <div class="container">

            <div class="ui breadcrumb">
                <a class="section">หน้าแรก</a>
                <div class="divider"> / </div>
                <div class="active section">ยืนยันข้อมูล และ Activate account ผ่าน email</div>
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
                                <div class="description">สำรองที่นั่งในการแข่งขัน</div>
                            </div>
                        </div>
                        <div class="active step">
                            <i class="ion-information-circled" style="font-size: 32px;"></i>&nbsp;&nbsp;
                            <div class="content">
                                <div class="title"><span class="markFont">กรอกข้อมูลสมาชิกในทีม</span></div>
                                <div class="description">ยืนยันข้อมูล และ Activate account ผ่าน email</div>
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
        @endif

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Login</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                @if (session('info'))
                                    <div class="alert alert-info">
                                        {{ session('info') }}
                                    </div>
                                @endif

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="username" class="col-md-4 control-label">NU-NET Account</label>

                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
            var minPasswordLength = 6;
            $(".ui.form")
                .form({
                    fields: {
                        teamname: {
                            identifier: "teamname",
                            rules: [
                                {type: 'empty', prompt: 'ระบุชื่อทีมที่ใช้ในการแข่งขัน 3 พยางค์ หากตั้งเกิน ทีมงานขอสงวนสิทธิในการเปลี่ยนแปลงชื่อโดยไม่แจ้งให้ทราบล่วงหน้า'}
                            ]
                        }
                        ,
                        teamslug: {
                            identifier: "teamslug",
                            rules: [
                                {type: 'empty', prompt: 'พูดอะไรสักเล็กน้อย'}
                            ]
                        }
                        ,
                        managername: {
                            identifier: "managername",
                            rules: [
                                {type: 'empty', prompt: 'ระบุชื่อ-นามสกุลจริง กรณีได้รับรางวัล หากชื่อไม่ตรงกับบัตรประชาชน ทีมงานขอสงวนสิทธิให้ทีมอื่น'}
                            ]
                        },
                        mobilephone: {
                            identifier: 'mobilephone',
                            rules: [
                                {
                                    type: 'regExp[/[0]{1}[0-9]{9,}/]',
                                    prompt: 'หมายเลขโทรศัพท์ 10 หลัก ตัวอย่าง 085xxyyyyy'
                                }
                            ]},
                        email: {
                            identifier: 'email',
                            rules: [
                                {
                                    type: 'email',
                                    prompt: 'โปรดระบุ e-mail ที่สามารถติดต่อได้'
                                }
                            ]
                        },
                        password: {
                            identifier: 'password',
                            rules: [
                                {
                                    type: 'length[' + minPasswordLength + ']',
                                    prompt: 'รหัสผ่านต้องมีความยาวอย่างน้อย '+minPasswordLength+' ตัวอักษร'
                                }
                            ]
                        },
                        passwordConfirm: {
                            identifier: 'password-confirm',
                            rules: [
                                {
                                    type: 'match[password]',
                                    prompt: 'โปรดระบุรหัสผ่านให้เหมือนกัน'
                                }
                            ]
                        },

                    },

                    inline: true,
                    onSuccess: function() {
                        //alert("All valid");
                        return true;
                    }
                });
        });
    </script>

    <script>

    </script>
@endsection