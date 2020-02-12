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
@include('includes.header')
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
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้ลงทะเบียนเข้าร่วมงาน มีโอกาศได้รับของรางวัลจากทาง Sponsor <strong>โดยการสุ่มผู้โชคดีจากรายชื่อที่ลงทะเบียนเข้าร่วม </strong> และมีกิจกรรมนาทีทอง แจกของ Premium / ของรางวัลมากมาย
อธิ </p>
				<p>
					  <ol  type="1">
						<li>หูฟังแบบครอบ ยี่ห้อ Sony </li>
						<li>กระเป๋าเป้ Targus  </li>
						<li>นาฬิกาข้อมือ Smart Watch </li>
					    <li>หมวก Nubwo รุ่น X-Series </li>
					  </ol>
				</p>

			  </div>
			</div>

		<div class="row">
          <div class="col-md-8">
			   <div class="panel panel-default">
                <div class="panel-heading">ลงทะเบียนเข้าร่วมงาน</div>
                <div class="panel-body">

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>คุณยังไม่ได้กรอกข้อมูลที่เราต้องการครบถ้วน</strong> ตามรายการต่อไปนี้.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                   <form class="ui form" method="POST" action="{{ route('paticipant-add') }}">
                    {{ csrf_field() }}
										<div class="two fields">
											<div class="field">
												<label >ชื่อ - นามสกุล</label>
												<input type="text" name="fullname" id="fullname"  value="{{ old('fullname') }}" />
											</div>
											<div class="field">
												<label >E-Mail</label>
												<input type="text" name="email" id="email"  value="{{ old('email') }}" />
											</div>
									</div>
									<div class="field">
											<label >Garena ID หรือ OpenID</label>
											<input type="text" name="garenaid" id="garenaid" placeholder="**กรอกเพื่อได้รับสิทธิ์ในการรับของรางวัลที่เป็นสกินฮีโร่ จากทาง Garena" value="{{ old('garenaid') }}" />
                      <div class="ui pointing green basic label" id="idWarningDiv" style="display: block;">
                        **หากไม่ระบุจะถือว่าสละสิทธิ์ในการรับของรางวัลที่เป็นสกินฮีโร่ จากทาง Garena
                      </div>
										</div>
									<div class="two fields">
											<div class="field">
												<label >เพศ</label>
												<select name="gender" id="gender" >
													<option value="0" {{ old('gender')==0 ? 'selected' : '' }}>ชาย</option>
													<option value="1" {{ old('gender')==1 ? 'selected' : '' }}>หญิง</option>
													<option value="2" {{ old('gender')==2 ? 'selected' : '' }}>ไม่ระบุ</option>
												</select>
											</div>
											<div class="field">
												<label >ช่วงอายุ</label>
												<select name="age" id="age" >
													<option value="0" {{ old('age')==0 ? 'selected' : '' }}>น้อยกว่า 10 ปี</option>
													<option value="1" selected {{ old('age')==1 ? 'selected' : '' }}>10 - 19 ปี</option>
													<option value="2" {{ old('age')==2 ? 'selected' : '' }}>20 - 29 ปี</option>
													<option value="3" {{ old('age')==3 ? 'selected' : '' }}>30 - 39 ปี</option>
													<option value="4" {{ old('age')==4 ? 'selected' : '' }}>40 - 50 ปี</option>
													<option value="5" {{ old('age')==5 ? 'selected' : '' }}>มากกว่า 50 ปี</option>
												</select>
											</div>
									</div>
									<div class="two fields">
                   						 <div class="field">
											<label>จังหวัด</label>
											<select name="provice" id="provice">
												@foreach($provice as $proviceList)
													<option value="{{$proviceList}}" value="{{$proviceList}}" {{ old('provice')==$proviceList ? 'selected' : '' }}>{{$proviceList}}</option>
												@endforeach
											</select>
										</div>
										 <div class="field">
											<label >ประเภทผู้ลงทะเบียน</label>
											<select name="membertype" id="membertype" >
												<option value="0" {{ old('membertype')==0 ? 'selected' : '' }} >นิสิต / นักศึกษา</option>
												<option value="1" {{ old('membertype')==1 ? 'selected' : '' }}>บุคลากรสายวิชาการ</option>
												<option value="2" {{ old('membertype')==2 ? 'selected' : '' }}>บุคลากรสายสนับสนุน</option>
												<option value="3" {{ old('membertype')==3 ? 'selected' : '' }}>นักเรียน</option>
												<option value="4" {{ old('membertype')==4 ? 'selected' : '' }}>บุคคลทั่วไป</option>
											</select>
										</div>
									</div>

									<div class="ui form">
                    <label>เหตุผลที่ลงทะเบียนเข้าร่วมงาน (เลือกตอบได้หลายข้อ)</label>
										<div class="field">
										    <div class="list">
												<div class="item">
													<div class="ui checkbox">
														<input type="checkbox" name="choice1" value="1" {{ old('choice1') ? 'checked' : '' }} onChange="chkReasonChange(this)">
														<label>มาร่วมงานกีฬาบุคลากร มหาวิทยาลัยนเรศวร <i class="cog icon red" style="font-size: 32px"></i></label>
													</div>
												</div>
						  <div class="item">
													<div class="ui checkbox">
														<input type="checkbox" name="choice2" value="2" {{ old('choice2') ? 'checked' : '' }}  onChange="chkReasonChange(this)">
														<label>มาสังเกตุการณ์ กระแสตอบรับในสังคมมหาวิทยาลัย กับกีฬาอีสปอร์ต <i class="connectdevelop icon yellow" style="font-size: 32px"></i></label>
													</div>
												</div>
												<div class="item">
													<div class="ui checkbox">
														<input type="checkbox" name="choice3" value="3" {{ old('choice3') ? 'checked' : '' }}  onChange="chkReasonChange(this)">
														<label>มาลุ้นรับของรางวัลภายในงาน <i class="gift icon orange" style="font-size: 32px"></i></label>
													</div>
												</div>
												<div class="item">
													<div class="ui checkbox">
														<input type="checkbox" name="choice4" value="4" {{ old('choice4') ? 'checked' : '' }}  onChange="chkReasonChange(this)">
														<label>มาเชียร์เพื่อน/น้อง แข่งขัน <i class="trophy icon yellow" style="font-size: 32px"></i></label>
													</div>
												</div>
												<div class="item">
													<div class="ui checkbox">
														<input type="checkbox" name="choice5" value="5" {{ old('choice5') ? 'checked' : '' }}  onChange="chkReasonChange(this)">
														<label>อยากถ่ายรูปกับ Caster สาวสวย <i class="hand peace outline icon pink" style="font-size: 32px"></i></label>
													</div>
												</div>
												<div class="item">
													<div class="ui checkbox">
														<input type="checkbox" name="choice6" id="choice6" {{ old('choice6') ? 'checked' : '' }}  value="6" onChange="checkOtherReason(this)">
														<label>อื่นๆ</label>
													</div>
												</div>
												<div class="item">
													<input type="text" name="choiceetc" id="choiceetc" {{ old('choice6') ? '' : 'disabled' }}  placeholder="กรุณาระบุเหตุผล..." value="{{ old('choiceetc') }}"/>
												</div>
										  </div>
										</div>
									</div>

					   				<div class="ui form">
                    <label>รู้จักงาน อีสปอร์ต กีฬาบุคลากร มหาวิทยาลัยนเรศวร (เลือกตอบได้หลายข้อ)</label>
										<div class="field">
										<div class="list">
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice1" {{ old('nuchoice1') ? 'checked' : '' }} onChange="chkRecognitionChange(this)">
                          <label>โปสเตอร์งาน / บอร์ด - ป้ายประกาศต่าง ๆ <i class="clipboard outline icon purple" style="font-size: 32px"> </i></label>
												</div>
											</div>
                      <div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice2" {{ old('nuchoice2') ? 'checked' : '' }} onChange="chkRecognitionChange(this)">
												  <label>Facebook <i class="facebook square icon blue" style="font-size: 32px"></i></label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice3" {{ old('nuchoice3') ? 'checked' : '' }} onChange="chkRecognitionChange(this)">
													<label>เพื่อน / คนรู้จักแนะนำ <i class="comment alternate outline icon grey" style="font-size: 32px"> </i></label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice4" {{ old('nuchoice4') ? 'checked' : '' }} onChange="chkRecognitionChange(this)">
													<label>ประชาสัมพันธ์จากคณะ <i class="newspaper outline icon brown" style="font-size: 32px"> </i></label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice5" {{ old('nuchoice5') ? 'checked' : '' }} onChange="chkRecognitionChange(this)">
													<label>การพูดคุยในหมู่เพื่อนร่วมงาน ที่มีใจรัก กีฬาอีสปอร์ต <i class="microphone icon olive" style="font-size: 32px"> </i></label>
												</div>
											</div>
											<div class="item">
												<div class="ui checkbox">
													<input type="checkbox" name="nuchoice6" id="nuchoice6" {{ old('nuchoice6') ? 'checked' : '' }} onChange="checkOtherRecognition(this)">
													<label>อื่นๆ</label>
												</div>
											</div>
											<div class="item">
												<input type="text" name="nuchoiceetc" id="nuchoiceetc" {{ old('nuchoice6') ? '' : 'disabled' }}  placeholder="กรุณาระบุเหตุผล..." value="{{ old('nuchoiceetc') }}"/>
											</div>
										</div>
										</div>
									</div>

					   <div class="field">

						   <input type="hidden" name="hidReasonCount" id="hidReasonCount" value="{{ old('hidReasonCount')==""?0:old('hidReasonCount') }}"/>
						   <input type="hidden" name="hidSourceRecognition" id="hidSourceRecognition" value="{{ old('hidSourceRecognition')==""?0:old('hidSourceRecognition') }}"/>
					   </div>
									<div class="form-group">
										<div class="col-md-6 col-md-offset-4">
												<button type="submit" onclick="chkSubmit()" id="btnSubmit" class="btn btn-primary">
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
					<img src="{{ URL::asset('images/t01_reszie.jpg') }}" class="visible content">
					<img src="{{ URL::asset('images/reward/g213_headset.png') }}" class="hidden content">
				  </div>
				  <div class="content">
					  <a class="header"><span class="markFont">ของรางวัลภายในงาน</span></a>
					<div class="meta">
					  <span class="date">สนับสนุนโดย Firecom และ Monkey Mouse</span>
					</div>
				  </div>
				  <div class="extra content">
					  <p>
					  <i class="gift icon orange"></i>
						หูฟังแบบครอบ ยี่ห้อ Sony 5 รางวัล
					  </p>
					  <p>
						<i class="gift icon orange"></i>
						  กระเป๋าเป้ Targus 2 รางวัล
					  </p>
					  <p>
						  <i class="gift icon orange"></i>
						  นาฬิกาข้อมือ Smart Watch 2 รางวัล
					  </p>
					  <p>
						  <i class="gift icon orange"></i>
						  หมวก Nubwo รุ่น X-Series 5 รางวัล
					  </p>
				  </div>
				  <div class="extra content">
					  <span style="color: green">*สำหรับผู้เข้าร่วมงานที่ลงทะเบียนและมาร่วมงานในวันที่ 18-21 กุมภาพันธ์ 2563</span>
				  </div>
				</div>

				  <div class="ui card">
					  <a class="image" href="{{ url('/download/poster.pdf')  }}" target="_blank">
						  <img src="{{ URL::asset('images/poster.jpg') }}">
					  </a>
					  <div class="content">
						  <a class="header" href="{{ url('/download/poster.pdf')  }}" target="_blank"><span class="markFont">โปสเตอร์ประชาสัมพันธ์</span></a>
						  <div class="meta">
							  <a></a>
						  </div>
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
			if($('#fullname').val() == ''){
				$('#fullname').focus();
			}else{
				if($('#email').val() == ''){
					$('#email').focus();
				}else{
					$('#btnSubmit').submit();
				}
			}
    }

    function chkReasonChange(obj){
        //console.log($(obj).is(':checked'));
        //console.log($(obj).attr( 'value' ));

		var lastValue=$("#hidReasonCount").val();

        if($(obj).is(':checked')==true){

            lastValue++;
            $("#hidReasonCount").val(lastValue);

        }else{

            lastValue--;
            $("#hidReasonCount").val(lastValue);

        }
        updateHidReason();
    }

    function chkRecognitionChange(obj){
        //console.log($(obj).is(':checked'));
        //console.log($(obj).attr( 'value' ));

        var lastValue=$("#hidSourceRecognition").val();

        if($(obj).is(':checked')==true){

            lastValue++;
            $("#hidSourceRecognition").val(lastValue);

        }else{

            lastValue--;
            $("#hidSourceRecognition").val(lastValue);

        }
        updateSourceRecognition();
    }

    function updateHidReason(){
        console.log("last update="+$("#hidReasonCount").val());
	}
    function updateSourceRecognition(){
        console.log("last update="+$("#hidSourceRecognition").val());
    }

	function checkOtherReason(obj){

        	var lastValue=$("#hidReasonCount").val();

			if($(obj).is(':checked')==true){
				//alert('true');
				$("#choiceetc").removeAttr('disabled');
				$("#choiceetc").css( "background-color", "#FFFFFF" );


                lastValue++;
                $("#hidReasonCount").val(lastValue);

			}else{
				//alert('false');
				$("#choiceetc").val("");
				$("#choiceetc").attr('disabled','disabled');
				$("#choiceetc").css( "background-color", "#BCBCBC" );


				lastValue--;
                $("#hidReasonCount").val(lastValue);

			}
			updateHidReason();

	}

    function checkOtherRecognition(obj){

        var lastValue=$("#hidSourceRecognition").val();

        if($(obj).is(':checked')==true){
            //alert('true');
            $("#nuchoiceetc").removeAttr('disabled');
            $("#nuchoiceetc").css( "background-color", "#FFFFFF" );


            lastValue++;
            $("#hidSourceRecognition").val(lastValue);

        }else{
            //alert('false');
            $("#nuchoiceetc").val("");
            $("#nuchoiceetc").attr('disabled','disabled');
            $("#nuchoiceetc").css( "background-color", "#BCBCBC" );


            lastValue--;
            $("#hidSourceRecognition").val(lastValue);

        }
        updateSourceRecognition();

    }
 </script>
 @endsection
