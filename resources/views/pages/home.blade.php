@extends('layouts.default')
@section('title')
    NU eSports ROV Tournament : งานเฉลิมฉลองครบรอบ 25 ปี คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร
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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modal-video.min.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ URL::asset('js/infinite-grid-pro/content/global.css') }}"/>
@endsection
@include('includes.header')
@section('content')


    @include('includes.home.promo')
    <section id="promo-detail" class="gradient-violat cta padding-top-bottom-90">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">

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
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="cta-heading text-white">Greet 'nd Gang Cosplay Party <span class="markFont">: Meet & Geet สุด Excursive </span></h3>
                        <p class="text-white">กับเหล่า Cosplay และ Caster สาวสวยแนวหน้าในเมืองไทย  ,เปิดรับลงทะเบียนทีมแล้ววันนี้</p>
                        <div class="cta-btn-group">
                            <a class="btn btn-orange border-none btn-rounded-corner" href="{{route("register-paticipant")}}"  >ลงทะเบียนเข้าร่วมงาน <span class="icon-on-button"><i class="ion-person-add"></i></span></a>

                        </div>
                        <p class="text-white">* สำรองที่นั่งในงาน เพื่อลุ้นของรางวัลและร่วมใกล้ชิด Cosplay สาวสวยภายในงาน (จำนวนจำกัด)</p>

                        <div>

                        </div>
                    </div> <!--col-md-12-->
                </div> <!--end row-->

                <div class="row">

                    <div class="col-md-4 text-center">
                        <span class="counter" style="display: inline-block; width: 25%;font-size: 40px;">240</span>
                    </div> <!--col-md-12-->
                    <div class="col-md-4 text-center">
                        <span class="counter" style="display: inline-block; width: 25%;font-size: 40px;">{{$playerConfirmTeam}}</span>
                    </div> <!--col-md-12-->
                    <div class="col-md-4 text-center">
                        <span class="counter" style="display: inline-block; width: 25%;font-size: 40px;">64</span>
                    </div> <!--col-md-12-->
                </div> <!--end row2-->
                <div class="row">

                    <div class="col-md-4 text-center">
                        <i class="id card outline icon" style="font-size: 30px;"></i> จำนวนที่นั่ง
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="ion-android-contacts" style="font-size: 30px;"></i>  ผู้ที่สนใจ
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="ion-person-stalker" style="font-size: 30px;"></i> ลงทะเบียนเลุ้นรางวัล
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ui segment">

                            <div class="ui icon green message">
                                <i class="pencil alternate icon"></i>
                                <div class="content">
                                    <div class="header">
                                        <span class="markFont"> สิ่งที่คุณจะได้รับจากการเข้าร่วมกิจกรรมและการลงทะเบียน </span>
                                    </div>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้ลงทะเบียนเข้าร่วมงาน มีโอกาศได้รับของรางวัลจากทาง Garena Thailand อธิ เสื้อ และสกินฮีโร่ พร้อมความรู้ที่ได้จาก
                                        <strong>โครงการฝึกอบรมเพื่อเสริมสร้างความเข้าใจในอุตสาหกรรมเกมและการแข่งขันกีฬา E-sport </strong> โดยจะมีการเสวนา 3 หัวข้อ ได้แก่ </p>
                                    <p>
                                    <ol  type="1">
                                        <li>อุตสาหกรรมเกมและการแข่งขัน E-sports ในปัจจุบัน</li>
                                        <li>มหาวิทยาลัยกับอุตสาหกรรม/ธุรกิจเกมและการแข่งขัน E-sports  </li>
                                        <li>สมดุลการใช้ชีวิตควบคู่กับกิจกรรมเกมและกีฬา E-sport</li>
                                    </ol>
                                    </p>
                                    <p>โดยสามารถดู<a href="{{ route('activity')  }}" target="_blank">กำหนดการได้ ที่นี่</a></p>
                                </div>
                            </div>

                            <div class="ui yellow message">
                                <div class="header">
                                    <span class="markFont"> หมายเหตุ  </span>
                                </div>
                                <ul class="list">
                                    <li>วันจัดกิจกรรมดังกล่าว <strong> จัดขึ้นในช่วงสัปดาห์วันวิทยาศาสตร์แห่งชาติ โดยจัดในวันที่ 17 สิงหาคม 2561 </strong>น้องๆนักเรียน ตลอดจนคณะครูผู้ที่สนใจเข้าร่วมชมและเชียร์การแข่งขันในรอบสุดท้าย ตลอดจนฟังบรรยาย สามารถลงทะเบียนร่วมลุ้นรางวัลได้</li>
                                    <li><a href="{{ url('/download/infographic.pdf')  }}" target="_blank"> ขั้นตอนการลงทะเบียนเข้าร่วมงาน </a> <sup>*โปรดอ่านก่อนที่จะพลาดของรางวัล</sup></li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div> <!--end row3-->
            </div> <!--end col-md-5-->
            <div class="col-md-2"></div>

        </div>
    </section>

    @include('includes.home.schedule')
    @include('includes.home.testimonial')
    @include('includes.home.notification')
    <section id="cta" class="gradient-violat cta padding-top-bottom-90">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="cta-heading text-white">Beyond The Hero <span class="markFont">: คุณพร้อมหรือยังที่จะเป็นฮีโร่ผู้กล้า </span></h3>
                    <p class="text-white">ฝ่าสมรภูมิรบไปด้วยกัน เปิดรับลงทะเบียนทีมแล้ววันนี้</p>
                    <div class="cta-btn-group">

                        <a class="btn btn-orange border-none btn-rounded-corner" href="#" data-toggle="modal" data-target="#exampleModalCenter">พร้อม Battle <span class="icon-on-button"><i class="ion-log-in"></i></span></a>
                        <a class="btn btn-white gradient-white border-none btn-rounded-corner" href="#" data-toggle="modal" data-target="#exampleModalPaticipicant">ไม่ แต่ฉันจะไปร่วมงานแน่<span class="icon-on-button"><i class="ion-person-add"></i></span></a>
                    </div>
                    <p class="text-white">* สำรองที่นั่งในงาน เพื่อลุ้นของรางวัลและร่วมใกล้ชิด Cosplay สาวสวยภายในงาน (จำนวนจำกัด)</p>

                    <!--<div>

                        <span style="display: inline-block; width: 32%;font-size: 60px;"><span class="counter">448</span></span>
                        <span class="counter" style="display: inline-block; width: 32%;font-size: 60px;">64</span>
                        <span class="counter" style="display: inline-block; width: 32%;font-size: 60px;">407</span>
                    </div>-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                </div> <!--col-md-12-->
            </div> <!--end row2-->

            <div class="row">
                <div class="col-md-4 text-center">
                    <span class="counter" style="display: inline-block; width: 25%;font-size: 40px;">{{$playerConfirmTeam}}</span>
                </div> <!--col-md-12-->
                <div class="col-md-4 text-center">
                    <span class="counter" style="display: inline-block; width: 25%;font-size: 40px;">{{$teamConfirm}}</span>
                </div> <!--col-md-12-->
                 <div class="col-md-4 text-center">
                    <span class="counter" style="display: inline-block; width: 25%;font-size: 40px;">4</span>
                </div>
               <!--  <div class="col-md-3 text-center">
                    <span class="counter" style="display: inline-block; width: 25%;font-size: 40px;"></span>
                </div> -->
            </div> <!--end row2-->

            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="ion-android-contacts" style="font-size: 30px;"></i> ผู้เข้าแข่งขัน
                </div> <!--col-md-4-->
                <div class="col-md-4 text-center">
                    <i class="ion-ios-game-controller-b-outline" style="font-size: 30px;"></i> ทีมที่เข้าร่วม
                </div> <!--col-md-4-->
                <div class="col-md-4 text-center">
                    <i class="map outline icon" style="font-size: 30px;"></i>  จังหวัด
                </div> <!--col-md-4-->


            </div> <!--end row3-->


        </div><!--container-->
    </section>



    @include('includes.home.sponsor')
    <!-- <section id="testimonial2" class="testimonial-section padding-top-bottom-90" style="background-color: #880000">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="text-white">* เราจะประกาศรายชื่อทีมอย่างเป็นทางการ วันนี้ หลัง 16.00 น.</p>
            </div>
        </div>
    </section>-->
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
    <script type="text/javascript" src="{{ URL::asset('js/infinite-grid-pro/java/FWDIGP.js') }}"></script>

    <script>
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 10,
                time: 1500
            });

            $('#logo25')
                .transition('jiggle')
            ;

            $('.menu .item')
                .tab()
            ;
/*
            $("#btnVideoShow").modalVideo({channel:'youtube'});
            $("#btnTeamVideo1").modalVideo({channel:'youtube'});
            $("#btnTeamVideo2").modalVideo({channel:'youtube'});
            $("#btnTeamVideo3").modalVideo({channel:'youtube'});
            $("#btnTeamVideo4").modalVideo({channel:'youtube'});
            $("#btnTeamVideo5").modalVideo({channel:'youtube'});
            $("#btnTeamVideo6").modalVideo({channel:'youtube'});
            $("#btnTeamVideo7").modalVideo({channel:'youtube'});
            $("#btnTeamVideo8").modalVideo({channel:'youtube'});
            $("#btnTeamVideo9").modalVideo({channel:'youtube'});
            $("#btnTeamVideo10").modalVideo({channel:'youtube'});
*/
            $('ui.special.cards .image').dimmer({
                on: 'hover'
            });

        });
    </script>

    <script>
        $(function(){
          /*
            $.stellar({
                horizontalScrolling: false,
                verticalScrolling: true,
                responsive: false,
            });
            */
        });
    </script>

    <script type="text/javascript">

        FWDRLUtils.onReady(function(){
            new FWDIGP({
                //main settings
                rightClickContextMenu:"developer",
                instanceName:"myIGP",
                parentId:"myDiv",
                mainFolderPath:"{{ URL::asset('js/infinite-grid-pro/content') }}",
                skinPath:"minimal-skin",
                playlistId:"myPlaylist",
                displayType:"fluidWidth",
                dragDirection:"both",
                autoScrollDirection:"left",
                thumbnailTransitionType:"opcacity",
                allCategoriesLabel:"All Categories (mixed)",
                showAllCategories:"yes",
                autoScale:"yes",
                autoScroll:"yes",
                enableVisitedThumbnails:"no",
                keepThumbnailsOriginalSizeOnGridStart:"no",
                addZoomSupport:"no",
                addDragAndSwipeSupport:"yes",
                disableThumbnailInteractivity:"no",
                randomizeAllCategories:"yes",
                randomizeCategories:"no",
                showThumbnailOverlay:"yes",
                showThumbnailIcon:"no",
                showHelpScreen:"no",
                startAtCategory:1,
                maxWidth:940,
                maxHeight:600,
                thumbnailMaxWidth:210,
                thumbnailMaxHeight:190,
                maxScale:1.6,
                minScale:.8,
                autoScrollSpeed:1,
                thumbnailOverlayOpacity:.7,
                helpScreenOpacity:.3,
                backgroundColor:"#000000",
                thumbnailBackgroundColor:"#111111",
                thumbnailOverlayColor:"#000000",
                helpScreenBackgroundColor:"#FFFFFF",
                //combobox settings
                selectLabel:"SELECT CATEGORIES",
                comboBoxPosition:"topRight",
                showComboBox:"yes",
                comboBoxHorizontalMargins:12,
                comboBoxVerticalMargins:12,
                comboBoxCornerRadius:0,
                selctorBackgroundNormalColor:"#FFFFFF",
                selctorBackgroundSelectedColor:"#000000",
                selctorTextNormalColor:"#000000",
                selctorTextSelectedColor:"#FFFFFF",
                buttonBackgroundNormalColor:"#FFFFFF",
                buttonBackgroundSelectedColor:"#000000",
                buttonTextNormalColor:"#000000",
                buttonTextSelectedColor:"#FFFFFF",
                comboBoxShadowColor:"#000000",
                //ligtbox settings
                buttonsAlignment:"in",
                itemBoxShadow:"none",
                descriptionWindowAnimationType:"opacity",
                descriptionWindowPosition:"bottom",
                slideShowAutoPlay:"no",
                addKeyboardSupport:"yes",
                showCloseButton:"yes",
                showShareButton:"yes",
                showZoomButton:"yes",
                showSlideShowButton:"yes",
                showSlideShowAnimation:"yes",
                showNextAndPrevButtons:"yes",
                showNextAndPrevButtonsOnMobile:"yes",
                showDescriptionButton:"yes",
                showDescriptionByDefault:"no",
                videoShowFullScreenButton:"yes",
                videoAutoPlay:"yes",
                nextVideoOrAudioAutoPlay:"yes",
                videoLoop:"no",
                audioAutoPlay:"no",
                audioLoop:"no",
                backgroundOpacity:.9,
                descriptionWindowBackgroundOpacity:.95,
                buttonsHideDelay:3,
                slideShowDelay:4,
                defaultItemWidth:640,
                defaultItemHeight:480,
                itemOffsetHeight:50,
                spaceBetweenButtons:1,
                buttonsOffsetIn:2,
                buttonsOffsetOut:5,
                itemBorderSize:0,
                itemBorderRadius:0,
                itemBackgroundColor:"#333333",
                itemBorderColor:"#333333",
                lightBoxBackgroundColor:"#000000",
                descriptionWindowBackgroundColor:"#FFFFFF",
                videoPosterBackgroundColor:"#0099FF",
                videoControllerBackgroundColor:"#FFFFFF",
                audioControllerBackgroundColor:"#FFFFFF",
                timeColor:"#000000"
            });
        });
    </script>
@endsection