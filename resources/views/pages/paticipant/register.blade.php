@extends('layouts.default')
@section('title')
    :: ลงทะเบียนเข้าร่วมงาน ::
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
				<p>โดยสามารถดูกำหนดการได้ ที่นี่</p>
			  </div>
			</div>

		<div class="row">
          <div class="col-md-8">
			   <div class="panel panel-default">
                <div class="panel-heading">ลงทะเบียนเข้าร่วมงาน</div>
                <div class="panel-body">
                   <form class="ui form">
										<div class="two fields">
											<div class="field">
												<label >ชื่อ </label>
												<input type="text" name="firstname" id="firstname"  value="" />
											</div>
											<div class="field">
												<label >นามสกุล</label>
												<input type="text" name="lastname" id="lastname"  value="" />
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
												<option value="2">นิสิต/นักศึกษา</option>
												<option value="1">นักเรียน</option>
												<option value="0">บุคคลทั่วไป</option>
											</select>
										</div>
									</div>

									<div class="ui form">
                    <label>เหตุผลที่มาลงทะเบียนเข้าร่วมงาน</label>
										<div class="field">
											<div class="ui checkbox">
												<input type="checkbox" name="choice1">
												<label>มาร่วมงาน 25 ปีคณะวิศวกรรมศาสตร์</label>
                        <input type="checkbox" name="choice2">
												<label>มาถ่ายรูปกับน้องๆ คอสเพลย์</label>
                        <input type="checkbox" name="choice3">
												<label>มาลุ้นรับของรางวัลจาก garena</label>
                        <input type="checkbox" name="choice4">
												<label>มาเชียร์เพื่อน</label>
											</div>
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
	          <div class="col-md-4">
	           <div class="ui card">
				  <div class="ui move reveal image">
					<img src="../../images/T-Shirt_front.png" class="visible content">
					<img src="../../images/T-Shirt_back.png" class="hidden content">
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

     });
 </script>

 <script>

 </script>
 @endsection
