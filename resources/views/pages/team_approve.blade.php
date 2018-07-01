@extends('layouts.default')
@section('title')
    NU eSports ROV Tournament : งานเฉลิมฉลองครบรอบ 25 ปี คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร
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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modal-video.min.css') }}">
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
                <a class="section" href="{{ route('home') }}">หน้าแรก</a>
                <div class="divider"> / </div>
                <div class="active section">ประกาศรายชื่อทีม</div>
            </div>

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">


                    <div class="ui pointing menu">
                        <a class="item active">
                            <span class="markFont">ทีมที่ผ่านการพิจารณา</span>
                        </a>



                    </div>


                </div>
            </div>
        </div>

        <div class="container">

            <div class="ui segment">
                <div class="" id="loadingDiv">
                    <table class="ui compact celled definition table">
                        <thead class="full-width">
                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อทีม</th>
                            <th>ประเภททีม</th>
                            <th>สถาบัน</th>
                            <th>คำโปรย</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($teamListConfirm as $team)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>
                                <a href="#"  data-toggle="modal" data-target="#exampleModalCenter" onClick="getTeamDetail({{$team->id}})">{{$team->teamname}}</a>
                            </td>
                            <td>
                                @if($team->team_type==="undergraduate")
                                    มหาวิทยาลัย
                                    @else
                                    โรงเรียน
                                @endif
                            </td>
                            <td>
                                {{$team->institution}}
                            </td>
                            <td>
                                {{$team->slug}}
                            </td>

                        </tr>
                        @endforeach


                        </tbody>
                        <tfoot class="full-width">
                        <tr>
                            <th></th>

                            <th colspan="5">

                            </th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">ข้อมูลรายละเอียดทีม</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="" id="loadingTeamDiv">
                        <div class="modal-body">
                            <div class="ui success  message">
                                <div class="content">
                                    <div class="header">
                                        <span class="markFont"><div id="divTeamName"> ยากูซ่า </div><hr/> </span>
                                    </div>
                                    <ul class="list" id="listInfo">
                                    </ul>
                                </div>
                            </div>
                            <div class="ui violet message">
                                <div class="content">
                                    <div class="header">
                                        <span class="markFont"> -- สมาชิกทีม -- </span>
                                    </div>
                                    <div class="ui relaxed divided list" id="divListMember">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="backToMain()">ย้อนกลับ</button>
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
    <script src="{{ URL::asset('js/modal-video/jquery-modal-video.min.js') }}"></script>

    <script>

    </script>

    <script>
        function getTeamDetail(team_id){
            $("#loadingTeamDiv").addClass("ui loading form");
            //setTimeout(function(){ clearloadingTeamDiv(); }, 2000);




            $.ajax
            ({
                type: "POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                url: "{{ route('get-team-detail') }}",
                dataType: 'json',
                contentType : 'application/json; charset=utf-8',
                //json object to sent to the authentication url
                data: JSON.stringify({ "team_id": team_id, "_token" :"{{ csrf_token() }}" }),
                success: function (data) {

                    //alert("Thanks!");
                    console.log(data);
                    if(data.status==1){
                        //ok
                        // binding

                        $("#divTeamName").html(data.teamname);

                       /* for(val of data.detail){
                            console.log(val);
                            li = document.createElement('li');
                            $(li).html(val)
                                .appendTo($("#listInfo"));
                        }*/

                        li = document.createElement('li');
                        $(li).html(data.detail)
                            .appendTo($("#listInfo"));

                        li2 = document.createElement('li');
                        $(li2).html(data.institution)
                            .appendTo($("#listInfo"));

                        for(val of data.member){
                            console.log(val);

                            if(val.verify==true){
                                icon ="<i class='large check circle middle aligned icon'></i>";
                            }else{
                                icon ="<i class='large eye slash outline middle aligned icon'></i>";
                            }

                            item = document.createElement('div');
                            $(item).addClass("item")
                                .html(icon)
                                .appendTo($("#divListMember")) //main div

                            /*					icon  = document.createElement('i');
                             $(icon).addClass("large github middle aligned icon");*/

                            content  = document.createElement('div');

                            div_name = document.createElement('div');
                            $(div_name) .html(val.name+", "+val.studentid+", "+val.faculty)
                                .appendTo($(content));

                            description = document.createElement('div');
                            $(description).addClass("description")
                                .html(val.rov_id)
                                .appendTo($(content));

                            $(content).appendTo($(item));



                        }
                    }else{

                    }
                    clearloadingTeamDiv();
                }
            })


            // console.log(myObj.member);



        }

        function clearloadingTeamDiv(){
            //alert("Clear");
            $("#loadingTeamDiv").removeClass("ui loading form");

        }

        function backToMain(){


            $("#divTeamName").html("");
            $("#listInfo").html("");
            $("#divListMember").html("");
            console.log("backToMain");
        }
    </script>
@endsection