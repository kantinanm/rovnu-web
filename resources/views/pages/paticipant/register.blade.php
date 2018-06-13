@extends('layouts.default')
@section('title')
    :: ลงทะเบียนเข้าร่วมงาน ::
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
        <div id="home-slider" class="empty-carousel"></div>
    </section>

<section id="register">
<div class="container">
        <div class="ui breadcrumb">
		  <a class="section">หน้าแรก</a>
		  <div class="divider"> / </div>
		  <div class="active section">ลงทะเบียนเข้าร่วมงาน</div>
       </div>

       <div class="row padding-top-bottom-20">
          <div class="col-md-12">

		   </div>
	   </div>
    </div>

    <div class="container">

    	<div class="ui segment">
			<div class="ui icon green message">
			  <i class="pencil alternate icon"></i>
			  <div class="content">
				<div class="header">
				 <span class="markFont"> สิ่งที่คุณจะได้รับจากการเข้าร่วมกิจกรรมและการลงทะเบียน </span>
				</div>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้ลงทะเบียนเข้าร่วมงาน มีโอกาศได้รับของรางวัลจากทาง Garena Thailand โดยการสุ่มผู้โชคดีจากรายชื่อที่ลงทะเบียนเข้าร่วม ของรางวัลคือ เสื้อ RoV 5 รางวัล และสกินฮีโร่ 10 รางวัล พร้อมความรู้ที่ได้จาก
<strong>โครงการฝึกอบรมเพื่อเสริมสร้างความเข้าใจในอุตสาหกรรมเกมและการแข่งขันกีฬา E-sport </strong> โดยจะมีการเสวนา 3 หัวข้อ ได้แก่ </p>
				<p>
					  <ol  type="1">
						<li>อุตสาหกรรมเกมและการแข่งขัน E-sports ในปัจจุบัน</li>
						<li>มหาวิทยาลัยกับอุตสาหกรรม/ธุรกิจเกมและการแข่งขัน E-sports  </li>
						<li>สมดุลการใช้ชีวิตควบคู่กับกิจกรรมเกมและกีฬา E-sport</li>
					  </ol>
				</p>
				<p>โดยสามารถดูกำหนดการได้ <a href="{{ route('activity') }}" target="_blank" >ที่นี่</a></p>
			  </div>
			</div>

		<div class="row">
          <div class="col-md-8">
			   <div class="panel panel-default">
                <div class="panel-heading">ลงทะเบียนเข้าร่วมงาน</div>
                <div class="panel-body">
                   <form class="ui form" method="POST" action="{{ route('players-add') }}">
                    {{ csrf_field() }}
										<div class="two fields">
											<div class="field">
												<label >ชื่อ - นามสกุล</label>
												<input type="text" name="fullname" id="fullname"  value="" />
											</div>
											<div class="field">
												<label >E-Mail</label>
												<input type="text" name="email" id="email"  value="" />
											</div>
									</div>
									<div class="field">
											<label >Garena ID หรือ OpenID</label>
											<input type="text" name="garenaid" id="garenaid" placeholder="**กรอกเพื่อได้รับสิทธิ์ในการรับของรางวัลที่เป็นสกินฮีโร่ จากทาง Garena" />
                      <div class="ui pointing red basic label" id="idWarningDiv" style="display: block;">
                        **หากไม่ระบุจะถือว่าสละสิทธิ์ในการรับของรางวัลที่เป็นสกินฮีโร่ จากทาง Garena
                      </div>
										</div>
									<div class="two fields">
											<div class="field">
												<label >เพศ</label>
												<select name="gender" id="gender" >
												<option value="0">ชาย</option>
												<option value="1">หญิง</option>
												<option value="2">ไม่ระบุ</option>
											</select>
											</div>
											<div class="field">
												<label >ช่วงอายุ</label>
												<select name="age" id="age" >
												<option value="0">น้อยกว่า 10 ปี</option>
												<option value="1">10 - 19 ปี</option>
												<option value="2">20 - 29 ปี</option>
												<option value="3">30 - 39 ปี</option>
												<option value="4">40 - 50 ปี</option>
												<option value="5">มากกว่า 50 ปี</option>
											</select>
											</div>
									</div>
									<div class="two fields">
                    <div class="field">
                        <label>จังหวัด</label>
                        <select name="provice" id="provice">
                            @foreach($provice as $proviceList)
                                <option value="{{$proviceList}}">{{$proviceList}}</option>
                            @endforeach
                        </select>
                    </div>
										<div class="field">
											<label >ประเภทผู้ลงทะเบียน</label>
											<select name="membertype" id="membertype" >
												<option value="0">นิสิต / นักศึกษา</option>
                        <option value="1">ครู / อาจารย์</option>
												<option value="2">นักเรียน</option>
												<option value="3">บุคคลทั่วไป</option>
											</select>
										</div>
									</div>

									<div class="ui form">
                    <label>เหตุผลที่ลงทะเบียนเข้าร่วมงาน (เลือกตอบได้หลายข้อ)</label>
										<div class="field">
										<div class="list">
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="choice1">
													<label>มาร่วมงาน 25 ปีคณะวิศวกรรมศาสตร์</label>
												</div>
											</div>
                      <div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="choice2">
													<label>มาเที่ยวงานสัปดาห์วิทยาศาสตร์</label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="choice3">
													<label>มาลุ้นรับของรางวัลภายในงานจาก Garena</label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="choice4">
													<label>มาเชียร์เพื่อน/น้อง แข่งรอบ 4 ทีมสุดท้าย</label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="choice5">
													<label>อยากถ่ายรูปกับคอสเพลย์สาวสวย</label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="choice6">
													<label>อื่นๆ</label>
													<input type="text" name="choiceetc" id="choiceetc" placeholder="กรุณาระบุเหตุผล..."/>
												</div>
											</div>
										</div>
										</div>
									</div>

                  <div class="ui form">
                    <label>รู้จักงาน NU eSport RoV Tournament 2018 ได้จากที่ใด (เลือกตอบได้หลายข้อ)</label>
										<div class="field">
										<div class="list">
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice1">
                          <label>โปสเตอร์งาน / บอร์ด - ป้ายประกาศต่าง ๆ</label>
												</div>
											</div>
                      <div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice2">
												  <label>facebook</label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice3">
													<label>เพื่อน / คนรู้จักแนะนำ</label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice4">
													<label>ประชาสัมพันธ์จากคณะ</label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice5">
													<label>ประชาสัมพันธ์จากโรงเรียน / ครู</label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice6">
													<label>อื่นๆ</label>
													<input type="text" name="nuchoiceetc" id="nuchoiceetc" placeholder="กรุณาระบุเหตุผล..."/>
												</div>
											</div>
										</div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-6 col-md-offset-4">
												<button type="button" id="btnSubmit" onclick="chkSubmit()" class="btn btn-primary">
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
	          <div class="col-md-4">
	           <div class="ui card">
				  <div class="ui move reveal image">
					<img src="{{ URL::asset('images/T-Shirt_front.png') }}" class="visible content">
					<img src="{{ URL::asset('images/T-Shirt_back.png') }}" class="hidden content">
				  </div>
				  <div class="content">
					  <a class="header"><span class="markFont">ของรางวัลภายในงาน</span></a>
					<div class="meta">
					  <span class="date">สนับสนุนโดย Garena Thailand</span>
					</div>
				  </div>
				  <div class="extra content">
					  <p>
					  <i class="gift icon orange"></i>
					  เสื้อ 5 รางวัล *
					  </p>
					  <p>
					  <i class="chess queen icon purple"></i>
					  สกินฮีโร่ 10 รางวัล *
					  </p>
				  </div>
				  <div class="extra content">
					  <span style="color: green">*สำหรับผู้เข้าร่วมงานที่ลงทะเบียนและมาร่วมงานในวันที่ 17 สิงหาคม 2561</span>
				  </div>
				</div>

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
			$('.ui.checkbox').checkbox();

      $(".ui.form")
        .form({
            fields: {
              fullname: {
                    identifier: "fullname",
                    rules: [
                        {type: 'empty', prompt: 'ระบุชื่อ - นามสกุล'}
                    ]
                }
                ,
                email: {
                    identifier: "email",
                    rules: [
                        {type: 'empty', prompt: 'ระบุอีเมลเพื่อรับ QRcode ในการเข้างาน'}
                    ]
                },
            },

            inline: true
        });
     });
 </script>

 <script>
    function chkSubmit(){
      $('#fullname').focus();
      $('#btnSubmit').submit();
    }
 </script>
 @endsection
