@extends('layouts.default')
@section('title')
    :: กรอกข้อมูลสมาชิกในทีม ::
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
                        <a class="item active" href="{{ route('register-players') }}">
                            <span class="markFont">รายชื่อสมาชิก</span>
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

            <div class="container">
                <div class="ui icon green message">
                    <i class="chess knight icon"></i>
                    <div class="content">
                        <div class="header">
                            <span class="markFont"> ทีม :{{Auth::user()->teamname}}</span>
                        </div>
                        <p>"{{Auth::user()->slug}}"</p>
                        <p><strong> สถาบันการศึกษา :</strong> {{Auth::user()->institution}}</p>
                        <p><strong>ข้อมูลผู้ติดต่อของทีม </strong>{{Auth::user()->name}} , {{Auth::user()->mobilephone}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">เพิ่มรายชื่อสมาชิก</div>

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

                        <form class="ui form" method="POST" action="{{ route('players-add') }}">
                            {{ csrf_field() }}

                            <div class="three fields">
                                <div class="field">
                                    <label>ชื่อ </label>
                                    <input type="text" name="firstname" id="firstname"  value="{{ old('firstname') }}" />
                                </div>
                                <div class="field">
                                    <label>นามสกุล</label>
                                    <input type="text" name="lastname" id="lastname"  value="{{ old('lastname') }}" />
                                </div>
                                <div class="field">
                                    <label>รหัสนักเรียน/รหัสนักศึกษา</label>
                                    <input type="text" name="studentid" id="studentid"  value="{{ old('studentid') }}" />
                                </div>
                            </div>

                            <div class="" id="loadingDiv">
                                <div class="two fields">
                                    <div class="field">
                                        <label>ชื่อตัวละครในเกม ROV </label>
                                        <input type="text" name="player_name" id="player_name" placeholder="ชื่อตัวละครในเกมการแข่งขัน และรับรางวัล" value="{{ old('player_name') }}" />
                                    </div>
                                    <div class="field">
                                        <label>Garena-ID </label>
                                        <div class="ui left icon input">
                                            <input type="text" name="gameid" id="gameid"  value="{{ old('gameid') }}" onchange="checkIdExits()" /><i class="users icon"></i>
                                        </div>
                                        <input type="hidden" name="hidGameId" id="hidGameId" value="" />
                                        <div class="ui pointing red basic label" id="idWarningDiv" style="display: none">
                                            id นี้ถูกใช้ในการแข่งขันแล้ว
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="two fields">

                                <div class="field">
                                    <label>คณะ / ระดับชั้น</label>
                                    <select id="faculty" name="faculty">
                                        @foreach($faculty as $value)
                                            <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="field">
                                    <label>เบอร์โทรศัพท์มือถือ ที่ติดต่อได้</label>
                                    <input type="text" name="mobilephone" id="mobilephone" placeholder="08x..." value="{{ old('mobilephone') }}" />
                                </div>
                            </div>

                            <div class="fields" id="otherFaculty" style="display: none">
                                    <input type="text" name="note" id="note" placeholder="อื่นๆ โปรดระบุ : ใส่ชื่อ คณะ / ระดับชั้น ที่สังกัด" value="{{ old('note') }}" />

                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="ui primary submit button">บันทึก</div>
                                    <!--                                <button type="submit" class="btn btn-success">
                                                                        บันทึก
                                                                    </button>
                                                                    <button type="reset" class="btn btn-warning" onClick="clearState()">
                                                                        Reset
                                                                    </button>-->
                                <!--       <div class="ui clear button" onClick="clearState()">ล้างค่า</div>  -->
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
                        firstname: {
                            identifier: "firstname",
                            rules: [
                                {type: 'empty', prompt: 'ระบุชื่อ'}
                            ]
                        }
                        ,
                        lastname: {
                            identifier: "lastname",
                            rules: [
                                {type: 'empty', prompt: 'ระบุนามสกุล'}
                            ]
                        },

                        studentid: {
                            identifier: "studentid",
                            rules: [
                                {type: 'empty', prompt: 'ระบุรหัสนักเรียน/นักศึกษา'}
                            ]
                        },

                        player_name: {
                            identifier: "player_name",
                            rules: [
                                {type: 'empty', prompt: 'ชื่อตัวละครในเกม โปรดเขียนและสะกดให้ถูกตามจริงที่จะใช้ในการแข่งขัน'}
                            ]
                        },

                        gameid: {
                            identifier: 'gameid',
                            rules: [
                                {
                                    type: 'empty',
                                    prompt: 'โปรดระบุ id ในเกม ROV ที่ใช้ในการแข่งขัน'
                                }
                            ]
                        },
                        hidGameId: {
                            identifier: 'hidGameId',
                            rules: [
                                {
                                    type: 'empty',
                                    prompt: 'โปรดระบุ id ในเกม ROV ที่สามารถใช้ได้'
                                }
                            ]
                        },


                    },

                    inline: true
                });



            $("select#faculty").change(function(){

                if($("#faculty option:selected").val()==="อื่นๆ"){
                    $("#otherFaculty").show();
                }else{
                    $("#otherFaculty").hide();
                }
            });
        });
    </script>

    <script>
        function checkIdExits(){
            $("#idWarningDiv").hide();
            $("#loadingDiv").addClass("ui loading form");

            var id =$("#gameid").val();
            if(id!=""){
                // change css class ui loading form => loadingDiv  eg. $("p:first").addClass("intro");
                // call back route [] to validate gameid
                // waiting for result json
                // update value checked in hidden element tag eg. #hidGameId
                // if not exits disable then textbox
                // update change css class ui loading form => loadingDiv
                // update css class ; eg. $( "p" ).removeClass( "myClass yourClass" )
                // if exits then show warning div idWarningDiv
                // clear value checked in hidden element tag eg. #hidGameId
                // unlock fillable value of gameid   eg .$("#gameid").removeAttr('disabled');



                $.ajax
                ({
                    type: "POST",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                    url: "{{ route('players-check-id') }}",
                    dataType: 'json',
                    contentType : 'application/json; charset=utf-8',
                    //json object to sent to the authentication url
                    data: JSON.stringify({ "rov_id": id, "_token" :"{{ csrf_token() }}" }),
                    success: function (data) {

                        //alert("Thanks!");
                        //console.log(data);
                        if(data.status==1){
                            //ok
                            $("#hidGameId").val($("#gameid").val()); // update checked in hidden element
                            $("#gameid").attr('disabled',true);
                        }else{
                            $("#hidGameId").val(""); // set zero
                            $("#idWarningDiv").show();
                        }
                        clearLoading();
                    }
                })


                //setTimeout(function(){ clearLoading(); }, 3000);
            }

        }

        function clearLoading(){
            //alert("Clear");
            $("#loadingDiv").removeClass("ui loading form");

            // valid
            //$("#hidGameId").val($("#gameid").val()); // update checked in hidden element
            //$("#gameid").attr('disabled',true);

            // invalid
            //$("#idWarningDiv").show();
        }

        function clearState(){
            $("#gameid").removeAttr('disabled');
            $("#hidGameId").val(); // clear hidden game id
            $("#loadingDiv").removeClass("ui loading form");
            $("#idWarningDiv").hide();
        }



    </script>
@endsection