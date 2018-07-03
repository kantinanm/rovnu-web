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
                <div class="active section">กติกาการแข่งขัน</div>
            </div>

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">

                </div>
            </div>
        </div>

        <div class="main container">

            <div class="ui segment" id="example2">
                <div class="left ui rail" style="min-height: 262.531px;">
                    <div class="ui sticky bottom fixed" style="width: 272px !important; height: 262.531px !important; margin-top: 15px; left: 274.5px;">
                        <h3 class="ui header"><span class="markFont">ของรางวัล</span></h3>

                        <div class="ui card">
                            <div class="blurring dimmable image">
                                <div class="ui inverted dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui primary button" data-toggle="modal" data-target="#exampleModalCenter">ส่งทีมเข้าร่วมแข่งขัน</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ URL::asset('images/reward/money_reward.png') }}">
                            </div>
                            <div class="content">
                                <a class="header"><span class="markFont"></span></a>
                                <div class="meta">
                                    <span class="date">เงินรางวัล <i class="cog icon red"></i>จาก คณะวิศวกรรมศาสตร์</span>
                                </div>
                            </div>
                            <div class="extra content">


                                <p><i class="trophy icon yellow"></i>อันดับ 1 ได้รับเงินรางวัล 5,000 บาท</p>
                                <p><i class="trophy icon grey"></i>อันดับ 2 ได้รับเงินรางวัล 3,000 บาท</p>
                                <p><i class="trophy icon brown"></i>ชมเชย 2 รางวัล รางวัล 1,000 บาท</p>

                            </div>
                        </div>

                        <div class="ui card">
                            <div class="blurring dimmable image">
                                <div class="ui inverted dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui primary button" data-toggle="modal" data-target="#exampleModalCenter">ส่งทีมเข้าร่วมแข่งขัน</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ URL::asset('images/coupon.png') }}">
                            </div>
                            <div class="content">
                                <!--<a class="header"><span class="markFont"></span></a>-->
                                <div class="meta">
                                    <span class="date"> คูปองในเกมและ สกินฮีโร่ จาก Garena Thailand</span>
                                </div>
                            </div>
                            <div class="extra content">


                                <p><i class="trophy icon yellow"></i>อันดับ 1 ได้รับ 500 คูปอง/คน +สกิน</p>
                                <p><i class="trophy icon grey"></i>อันดับ 2 ได้รับ 300 คูปอง/คน +สกิน</p>
                                <p><i class="trophy icon brown"></i>ชมเชย 2 รางวัล ได้รับ 100 คูปอง/คน</p>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="right ui rail" style="">
                    <div class="ui sticky" style="width: 272px !important; height: 262.531px !important; left: 1356.5px;">
                        <h3 class="ui header"><span class="markFont">หัวข้อที่สำคัญ</span></h3>

                        <div class="ui secondary vertical pointing menu">
                            <a class="item" href="#1" onClick="navigate(this,1)">
                                <span class="markFont">การตั้งชื่อทีม</span>
                            </a>
                            <a class="item" href="#2" onClick="navigate(this,2)">
                                <span class="markFont">การสมัคร</span>
                            </a>
                            <a class="item" href="#3" onClick="navigate(this,3)">
                                <span class="markFont">กติกาการแข่งขัน</span>
                            </a>
                            <a class="item" href="#4" onClick="navigate(this,4)">
                                <span class="markFont">การแข่งขันรอบคัดเลือก</span>
                            </a>
                            <a class="item" href="#5" onClick="navigate(this,5)">
                                <span class="markFont">การแข่งขันรอบ 4 ทีมสุดท้าย</span>
                            </a>
                            <a class="item" href="#6" onClick="navigate(this,6)">
                                <span class="markFont">การนัดเวลาการแข่งขัน</span>
                            </a>
                            <a class="item" href="#7" onClick="navigate(this,7)">
                                <span class="markFont">การหลุดออกจากเกม (DISCONNECT) และการรีแมทซ์</span>
                            </a>
                            <a class="item" href="#8" onClick="navigate(this,8)">
                                <span class="markFont">การโกง และการใช้วิธีได้เปรียบที่ไม่ชอบธรรม</span>
                            </a>
                            <a class="item" href="#9" onClick="navigate(this,9">
                                <span class="markFont">วิธีรายงานผลการแข่งขัน</span>
                            </a>
                            <a class="item" href="#10" onClick="navigate(this,10)">
                                <span class="markFont">การติดต่อฝ่ายการจัดการแข่งขันและเรื่องต่างๆ ที่จำเป็นต้องทราบ</span>
                            </a>
                            <a class="item" href="#11" onClick="navigate(this,11)">
                                <span class="markFont">การแจ้งเหตุความไม่เป็นธรรมระหว่างการแข่งขัน</span>
                            </a>
                        </div>

                    </div>
                </div>

                <!--start rule-->

                <div class="ui success message" id="1">

                    <div class="header">
                        <span class="markFont"> กฏและกติกาการแข่งขันใน Tournament นี้ได้ถูกกำหนดตามมาตรฐานการแข่งขันสากล </span>  <i class="globe icon"></i>
                    </div>
                    <p id="2">โปรดอ่านและศึกษากฏกติกาการแข่งขัน</p>
                </div>


                <div class="feature-wiget">
                    <div class="content"  >
                        <h4 class="bottom-line"><i class="ion-android-people"></i>&nbsp;&nbsp;<span class="markFont" >การตั้งชื่อทีม</span></h4>
                        <p  >&nbsp;&nbsp;&nbsp;&nbsp;ชื่อทีมต้องไม่เกินทีมละ 3 พยางค์ (เนื่องจากหากเข้ารอบ 4 ทีมสุดท้าย จะมีชื่อสปอนเซอร์ของแต่ละทีมต่อท้ายชื่อทีมด้วย) และต้องเป็นคำที่ไม่มีความหมายผิดต่อหลักศีลธรรม ไม่มีความหมายลบหลู่ผู้อื่น ไม่จงใจตั้งชื่อให้คล้ายกับผู้เล่นคนอื่น เพื่อให้เกิดความเข้าใจผิดและหลอกลวงผู้เล่นอื่น (ยกตัวอย่างเช่น : ห้ามใช้คำหยาบคาย ลามกอนาจาร ส่อเสียด เหยียดหยาม ดูถูก ก้าวร้าว อ้างอิงบุคคลที่ 3 ห้ามล้อเลียนการเมือง หน่วยงานต่าง ๆ เป็นต้น)</p>
                    </div>
                </div>

                <div class="feature-wiget">
                    <div class="content">
                        <h4 class="bottom-line"><i class="ion-android-clipboard"></i>&nbsp;&nbsp;<span class="markFont" >การสมัคร</span></h4>
                        <ol>
                            <li><p>รับสมัครทั้งหมด 64 ทีม แบ่งเป็นนิสิตของมหาวิทยาลัยนเรศวร ไม่จำกัดคณะ จำนวน 40 ทีม นักศึกษาของมหาวิทยาลัยราชภัฏพิบูลสงคราม จำนวน 6 ทีม โรงเรียนภายในจังหวัดพิษณุโลกและจังหวัดใกล้เคียงที่ได้หนังสือรับเชิญ (จำกัดเฉพาะระดับชั้นมัธยมศึกษาปีที่ 1 – 6 ) จำนวน 18 ทีม สมาชิกในแต่ละทีมต้องมาจากสถาบันเดียวกัน</p></li>
                            <li><p>ผู้สมัครต้องสร้างทีมที่ประกอบด้วย หัวหน้าทีม 1 คน ผู้เล่นหลัก 4 คน และผู้เล่นสำรอง 2 คน รวมทั้งหมดมีสมาชิกได้ไม่เกิน 7 คน ต่อ 1 ทีม (สมาชิกสำรองจะมีหรือไม่มีก็ได้)</p></li>
                            <li><p>ต้องเป็นผู้เล่น ROV ในเซิร์ฟเวอร์ไทย<i class="th flag"></i> เท่านั้น</p></li>
                            <li ><p>ผู้เข้าแข่งขันสามารถเข้าร่วมทีมได้เพียง 1 ทีมเท่านั้น</p></li>
                            <li><p>หากลงทะเบียนไม่ครบถ้วนสมบูรณ์ จะถูกตัดสิทธิ์จากการแข่งขัน</p></li>
                            <li><p>ถ้าชื่อผู้เล่นไม่ตรงกับที่ลงทะเบียนไว้จะถูกปรับแพ้ทันที</p></li>
                            <li><p>ขอสงวนสิทธิ์ในการแข่งรางวัลให้เฉพาะ OPEN ID ที่ลงสมัครแข่งขันภายในทีมเท่านั้น</p></li>
                            <li id="4"><p>สามารถสมัครได้ที่เมนู<a href="#" data-toggle="modal" data-target="#exampleModalCenter">สมัครเข้าร้วมแข่งขัน</a> โดยให้หัวหน้าทีมเป็นผู้ทำสมัคร ดูคลิปวิดีโอ <i class="youtube icon"></i> <a href="{{ $register_url }}" target="_blank">ตัวอย่างการสมัครได้ที่นี่</a> หรือ <a href="{{ $register_manual }}" target="_blank"> <i class="book icon"></i> คู่มือการสมัคร</a></p></li>
                            <!--<li id="5"><p>
                                    <div class="ui yellow message">
                                        <div class="header">
                                            <span class="markFont">ทุกทีมต้องส่งคลิปแนะนำตัวสมาชิกแต่ละคนในทีม</span>
                                        </div>
                                <p>เมื่อทำการสมัครแล้วทุกทีมต้องส่งคลิปแนะนำตัวสมาชิกแต่ละคนในทีม (รวมผู้เล่นสำรอง 2 คนด้วย) ความยาวคลิปไม่เกิน 2 นาที สามารถดู <i class="youtube icon"></i> <a href="{{ $clip_video_url }}" target="_blank">ตัวอย่างคลิปแนะนำตัวได้ที่นี่ </a> เพื่อให้ทีมงานสามารถตรวจสอบตัวตนผู้เล่นได้ คลิปที่แนะนำตัวจะมีการเผยแพร่เพื่อเปิดให้มีการ Vote ทีมในดวงใจ 1 ทีม ลุ้นรับของรางวัลพิเศษจากทีมงาน (<strong>สามารถอัพโหลดคลิปแนะนำตัวภายหลังการสมัครได้ </strong> แต่ต้องไม่เกินระยะเวลาที่กำหนด คือวันที่ 30 มิถุนายน 2561)</p>
                                    </div>
                            </p></li>-->
                    <li id="3"><p>ผู้เล่นทุกคนควรปฏิบัติตามกติกาอย่างเคร่งครัด</p></li>
                    <li><p>คำตัดสินของกรรมการถือเป็นที่สิ้นสุด</p></li>
                    <li><p>ทีมงานขอสงวนสิทธิ์ในการปรับเปลี่ยนกฎกติกาได้โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</p></li>
                    </ol>
                    <p >
                        <div class="ui green icon message">
                            <i class="handshake outline icon"></i>
                            <div class="content">
                                <div class="header">
                                    <span class="markFont"> *ฟรีค่าสมัคร</span>
                                </div>
                    <p>&nbsp;&nbsp;เปิดรับสมัครตั้งแต่วันที่ 1 – 30 มิถุนายน 2561 เวลา 23:59 น.</p>
                </div>
            </div>
            </p>
        </div>
        </div>

        <div class="feature-wiget">
            <div class="content">
                <h4 class="bottom-line"><i class="ion-ios-medical"></i>&nbsp;&nbsp;<span class="markFont" >กติกาการแข่งขัน</span></h4>
                <p>แบ่งเป็น 2 รอบ คือ</p>
                <ul>
                    <li><p>รอบคัดเลือก</p></li>
                    <li ><p>รอบ 4 ทีมสุดท้าย</p></li>
                </ul>
            </div>
        </div>


        <div class="ui top attached tabular menu">
            <a class="item active" data-tab="first"><span class="markFont">การแข่งขันรอบคัดเลือก</span></a>
            <a class="item" data-tab="second"><span class="markFont">การแข่งขันรอบ 4 ทีมสุดท้าย</span></a>
        </div>
        <div class="ui bottom attached tab segment active" data-tab="first">

            <div class="feature-wiget" id="6">
                <div class="content">
                    <h4 class="bottom-line"><i class="ion-ribbon-a"></i>&nbsp;&nbsp;<span class="markFont" >การแข่งขันรอบคัดเลือก</span></h4>
                    <ol>
                        <li><p>แข่งขันในโหมด Caldavar Valley: Grand Battle</p></li>
                        <li><p>แข่งขันผ่านเซริฟเวอร์จริง</p></li>
                        <li><p>ใช้บัญชีส่วนตัวของผู้เล่นในการแข่ง</p></li>
                        <li><p>สามารถใช้รูนทั้งหมดได้</p></li>
                        <li><p>รูปแบบการแข่งขันเป็นแบบชนะครั้งเดียวจบ (Single Elimination)</p></li>
                        <li ><p>หัวหน้าทีมของทีมต้องเพิ่มเพื่อนหัวหน้าทีมตรงข้ามเพื่อเชิญเข้าแข่งขัน</p></li>
                        <li><p>ทีมที่มีชื่อเป็นทีมแรกจะได้รับสิทธิ์ในการสร้างห้องก่อน เช่น A vs B หัวหน้าทีม A จะเป็นผู้สร้างห้อง แล้วเชิญทีมตรงข้ามเข้าแข่งขัน</p></li>
                        <li><p>หากเริ่มแข่งสายเกินเวลาที่กำหนด 15 นาที จะถูกปรับแพ้ ให้หัวหน้าทีมเก็บรูปภาพในห้องการแข่งขันไว้เป็นหลักฐาน พร้อมทั้งบันทึกภาพหลักฐานเทียบกับเวลาในการถ่าย เพื่อใช้เป็นหลักฐานยืนยัน ส่งมาให้ทีมงานผ่านช่องทางการรายงานผล</p></li>
                        <li><p>หากเกินเวลาที่นัดแข่งขัน 15 นาทีแล้วหัวหน้าทีมที่มีสิทธิ์สร้างห้องก่อนไม่สร้าง ให้หัวหน้าทีมตรงข้ามเป็นผู้สร้างห้อง เพื่อปกป้องผลประโยชน์ของทีมตนเอง ให้บันทึกภาพหลักฐานเทียบกับเวลาในการถ่าย ส่งมาให้ทีมงานผ่านช่องทางการรายงานผล</p></li>
                        <li><p>หากพบว่าทีมตรงข้ามมีชื่อผู้เล่นไม่ตรงตามที่ลงทะเบียนไว้ ให้ทำการบันทึกภาพหลักฐานตอนก่อนเริ่มเกม และห้ามทำการแข่งขัน แต่หากมีการแข่งขันไปแล้ว จะถือว่าทั้งสองทีมยินยอมให้เกิดการแข่งขันขึ้น ทางทีมงานจะไม่รับฟังข้อโต้แย้งใด ๆ ในกรณีนี้</p></li>
                        <li><p>ไม่อนุญาตให้ผู้อื่นเข้ามาเป็น Observer หรือ Spectator ไม่ว่าจะเป็นการถ่ายทอดสดหรือการแข่งขันใด ๆ ยกเว้น คู่ที่ทีมงานได้เลือกให้ทำการถ่ายทอดสด โดยทีมงานมีสิทธิ์ขาดแต่เพียงผู้เดียว</p></li>
                        <li><p>ห้ามทำการถ่ายทอดสดหรือ Stream ผ่านช่องทางต่าง ๆ ก่อนได้รับอนุญาตจากคู่แข่งและทีมงาน หากผู้ใดฝ่าฝืนจะถูกตัดสิทธิ์ออกจากการแข่งขัน</p></li>
                        <li><p>กรุณาส่งผลก่อนเวลา 23:59 น. ของวันแข่งขัน มิฉะนั้นจะถูกปรับแพ้</p></li>
                        <li><p>ถ้าหากคู่การแข่งขันใด ส่งผลการแข่งขันมาเพียงรูปเดียว และไม่มีการทักท้วงจากอีกทีมผ่านช่องทางการรายงานผล ภายในเวลา 23:59 น. ของวันนั้น ทางทีมงานจะให้ทีมที่ชนะในเกมนั้นผ่านเข้ารอบต่อไป</p></li>
                        <li ><p>ติดตามแบบฟอร์มการรายงานผลหน้าเพจในการแข่งขันนั้นๆ </p></li>
                        <li><p>อ่านรายละเอียดวิธีการแจ้งผลได้ที่วิธีแจ้งผลการแข่งขัน</p></li>
                        <li ><p>ห้ามใช้คำพูดหรือกริยาไม่สุภาพ หรือเสียดสีผู้อื่น มีโทษปรับแพ้ทันที</p></li>
                        <li><p>ห้ามใช้โปรแกรมโกงใดๆ ทั้งสิ้น มิฉะนั้นจะถูกแบนไอดีตลอดชีวิต</p></li>
                        <li><p>ห้ามให้ผู้เล่นที่ไม่มีรายชื่อหรือผู้เล่นจากสายการแข่งอื่นลงการแข่งขันแทน มีโทษปรับแพ้ทันที</p></li>
                        <li><p>ห้ามส่งผลการแข่งขันเท็จ มีโทษปรับแพ้ และแบนไอดีทั้งทีม โดยมีระยะเวลาตามตุลยพินิจของทีมงาน</p></li>
                        <li><p>ทีมงานขอสงวนสิทธิ์ในการปรับเปลี่ยนกฎกติกาได้โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</p></li>
                        <li><p>คำตัดสินของคณะกรรมการถือเป็นที่สิ้นสุด</p></li>
                    </ol>
                </div>
            </div>

        </div>


        <div class="ui bottom attached tab segment" data-tab="second">
            <div class="feature-wiget">
                <div class="content">
                    <h4 class="bottom-line"><i class="ion-trophy"></i>&nbsp;&nbsp;<span class="markFont" >การแข่งขันรอบ 4 ทีมสุดท้าย</span></h4>
                    <ol>
                        <li><p>แข่งขันในโหมด Caldavar Valley: Tournament Mode </p></li>
                        <li><p>แข่งขันผ่านเซริฟเวอร์จริง</p></li>
                        <li><p>วิธีการแข่งขันเป็นแบบออนไลน์</p></li>
                        <li><p>ใช้บัญชีส่วนตัวของผู้เล่นในการแข่ง</p></li>
                        <li><p>สมาชิกในทีมต้องมีฮีโร่ไม่ต่ำกว่า 14 ตัว มิฉะนั้นจะไม่สามารถเข้าเล่นใน Tournament Mode ได้</p></li>
                        <li><p>สามารถใช้รูนทั้งหมดได้</p></li>
                        <li><p>รูปแบบการแข่งขันเป็นการชนะ 2 ใน 3 ครั้ง (Best of 3)</p></li>
                        <li><p>ห้ามใช้คำพูดหรือกริยาไม่สุภาพ หรือเสียดสีผู้อื่น มีโทษปรับแพ้ทันที</p></li>
                        <li><p>ห้ามใช้โปรแกรมโกงใดๆ ทั้งสิ้น มิฉะนั้นจะถูกแบนไอดีตลอดชีวิต</p></li>
                        <li ><p>ห้ามให้ผู้เล่นที่ไม่มีรายชื่อหรือผู้เล่นจากสายการแข่งอื่นลงการแข่งขันแทน มีโทษปรับแพ้ทันที</p></li>
                        <li><p>หากพบว่าทีมตรงข้ามมีชื่อผู้เล่นไม่ตรงตามที่ลงทะเบียนไว้ ให้ทำการบันทึมภาพหลักฐานตอนก่อนเริ่มเกม และห้ามทำการแข่งขัน แต่หากมีการแข่งขันไปแล้ว จะถือว่าทั้งสองทีมยินยอมให้เกิดการแข่งขันขึ้น ทางทีมงานจะไม่รับฟังข้อโต้แย้งใด ๆ ในกรณีนี้</p></li>
                        <li><p>ไม่อนุญาตให้ผู้อื่นเข้ามาเป็น Observer หรือ Spectator ไม่ว่าจะเป็นการถ่ายทอดสดหรือการแข่งขันใด ๆ ยกเว้น คู่ที่ทีมงานได้เลือกให้ทำการถ่ายทอดสด โดยทีมงานมีสิทธิ์ขาดแต่เพียงผู้เดียว</p></li>
                        <li><p>ถ้ามทำการถ่ายทอดสดหรือ Stream ผ่านช่องทางต่าง ๆ ก่อนได้รับอนุญาตจากคู่แข่งและทีมงาน หากผู้ใดฝ่าฝืนจะถูกตัดสิทธิ์ออกจากการแข่งขัน</p></li>
                        <li ><p>ทีมงานขอสงวนสิทธิ์ในการปรับเปลี่ยนกฎกติกาได้โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</p></li>
                        <li><p>คำตัดสินของคณะกรรมการถือเป็นที่สิ้นสุด</p></li>
                        <li><p>แข่งขัน ณ <a href="{{ route('place') }}">ห้อง slope CE 4 ชั้น 7 </a>อาคารวิศวกรรมโยธา คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร</p></li>
                    </ol>
                    <p>*ในกรณีที่เป็นการถ่ายทอดสดการแข่งขันคู่ที่ทีมงานได้เลือกทำการถ่ายทอดสด แต่การถ่ายทอดสดเกิดข้อผิดพลาดระหว่างการแข่งขัน ทางทีมงานมีสิทธิ์ที่จะขอให้ทั้งสองทีมทำการรีแมทซ์ได้ตามดุลพินิจของทีมงาน</p>
                </div>
            </div>
        </div>




        <div class="feature-wiget">
            <div class="content">
                <h4 class="bottom-line"><i class="ion-android-time"></i>&nbsp;&nbsp;<span class="markFont" >การนัดเวลาการแข่งขัน</span></h4>
                <ol>
                    <li id="7"><p>หัวหน้าทีมของทั้งสองทีมต้องติดตามและค้นหาโพสเวลานัดเวลาแข่งขันทางเพจ ที่ทีมงานเป็นผู้จัดให้ ซึ่งทีมงานจะโพสก่อนวันแข่งขันล่วงหน้าอย่างน้อย 1 วัน</p></li>
                    <li id="8"><p>ผู้เล่นทั้งสองทีมต้องนัดเวลาการแข่งขันให้เรียบร้อยก่อน 18:00 น. ของวันที่แข่งขัน โดยต้องทำการนัดเวลาที่โพสที่กำหนดเท่านั้น</p></li>
                    <li id="9"><p>ทีมที่มีชื่อเป็นทีมแรก เช่น A Vs B ทีม A จะได้รับสิทธิ์คอมเม้นเพื่อนัดเวลาแข่งก่อน จากนั้นทีม B จะต้องเข้าไปค้นหาและตกลงเวลาในคอมเม้นของทีม A โดยการตอบกลับคอมเม้นเดิมที่ทีม A พิมพ์ไว้</p></li>
                    <li><p>ในการนัดแข่งนั้น หากทีมไหนมีผู้เล่นที่ใช้ Guest ID ในการเล่น หรือไม่ได้ผูกบัญชีไว้กับ Garena หรือ Facebook ทางทีมนั้นต้องแจ้งชื่อผู้เล่นที่จะลงแข่งในเกมไว้ในโพสนัดแข่งเพื่อป้องกันความสับสนที่อาจจะเกิดขึ้นในภายหลัง</p></li>
                    <li><p>เมื่อถึงเวลา 17:00 น. ของวันแข่งขันแล้ว หากทีมที่มีชื่อเป็นทีมแรก ยังไม่ทำการเขียนคอมเม้นนัดแข่ง ให้อีกฝั่งหนึ่ง ทำหน้าที่เขียนคอมเม้นนัดแข่งแทน เพื่อปกป้องผลประโยชน์ของตนเอง</p></li>
                    <li ><p>หากทั้งสองทีมไม่สามารถตกลงเวลากันได้ ให้แข่งขันในเวลากลาง คือ เวลา 20:00 น. ของวันที่มีการแข่งขัน</p></li>
                </ol>
            </div>
        </div>
        <div class="feature-wiget">
            <div class="content">
                <h4 class="bottom-line"><i class="ion-android-exit"></i>&nbsp;&nbsp;<span class="markFont" >การหลุดออกจากเกม (Disconnect) และการรีแมทซ์</span></h4>
                <ol>
                    <li id="10"><p>ในกรณีที่มีผู้เล่นหลุดจากเกม ให้ทำการหยุดเกมชั่วคราว โดยแต่ละทีมสามารถกดหยุดเกมได้ทีมละ 5 ครั้ง ครั้งละไม่เกิน 1 นาที ถ้าหากเกินเวลาดังกล่าว อีกทีมสามารถกด Resume ได้ทันที และทำการแข่งขันต่อตามปกติ</p></li>
                    <li><p>หากผู้เล่นหลุดด้วยเหตุผลอื่นๆ ทีเป็นเหตุสุดวิสัย (เช่น เครือข่ายผู้ให้บริการอินเตอร์เน็ตล่มทั้งบริเวณ หรือเกิดข้อผิดพลาดจากเซริฟเวอร์ของเกม) ทางทีมที่มีส่วนเสียหาย ต้องแจ้งหลักฐานให้กับทางทีมงานผ่านการแจ้งปัญหาเกี่ยวกับการแข่งขัน หรือ ผู้กระทำผิดกฏกติกา ทั้งนี้ขึ้นอยู่กับดุลยพินิจของกรรมการ ว่าเห็นสมควรให้แข่งขันใหม่หรือไม่</p></li>
                    <li><p>ในกรณีที่ยังไม่มีการ First Blood และเวลาในเกมยังไม่เกิน 2 นาที ทีมที่ผู้เล่นหลุดสามารถแจ้งอีกทีมหนึ่งเพื่อขอรีแมทซ์ได้ทันที <i class="images outline icon"></i> (บันทึกภาพไว้เป็นหลักฐานว่าหลุดจริง) โดยทั้งสองทีมจะต้องเลือกฮีโร่แบบเดิมกับเกมที่ขอทำการรีแมทซ์</p></li>
                    <li><p>หากเกิดการ First Blood ขึ้นแล้ว หรือเกินเวลา 2 นาทีในเกมไม่สามารถทำการรีแมทซ์ได้ เว้นแต่ได้รับการอนุญาตจากคู่แข่ง หรือตามเห็นสมควรจากทีมงาน ในกรณีที่ทีมงานเป็นกรรมการในการแข่งขันนั้นๆ (เช่น การสตรีมสดผ่านช่องทางของ Official page)</p></li>
                    <li><p>ถ้าหากพบหลักฐานว่าจงใจกดหยุดเกม ในจังหวะสำคัญแต่ไม่มีการหลุดออกจากเกม หรือเพื่อการก่อกวน จะโดนปรับแพ้ทันที</p></li>
                </ol>
            </div>
        </div>
        <div class="feature-wiget">
            <div class="content">
                <h4 class="bottom-line"><i class="ion-android-sad"></i>&nbsp;&nbsp;<span class="markFont" >การโกง และการใช้วิธีได้เปรียบที่ไม่ชอบธรรม</span></h4>
                <ol>
                    <li><p>ไม่อนุญาตให้ใช้โปรแกรมช่วยเหลือ map hack ในการช่วยเล่นทุกประเภท</p></li>
                    <li><p>การโกง การใช้ข้อผิดพลาดของเกม และโปรแกรมช่วยเล่นจะมีผลทำให้ทีมที่ใช้นั้น ถูกแบนออกจากการแข่งขันทั้งในปัจจุบัน และในอนาคตอย่างถาวร</p></li>
                    <li ><p>ห้ามจงใจหลุดจากการแข่งขัน หรือทำให้ฝั่งตรงข้ามชนะอย่างชัดเจน (ล้มมวย) จะถูกปรับแพ้ทั้งสองทีม</p></li>
                </ol>
            </div>
        </div>

        <div class="feature-wiget">
            <div class="content">
                <h4 class="bottom-line"><i class="ion-filing"></i>&nbsp;&nbsp;<span class="markFont" >วิธีรายงานผลการแข่งขัน</span></h4>
                <ol>
                    <li><p><strong>ติดตามและค้นหาโพสรายงานผล</strong> <i class="search icon"></i> ซึ่งจะโพสก่อนเวลาแข่งขัน ในวันที่มีการแข่งขันเกมนั้นๆ (ก่อน 18:00 น. ของวันแข่งขันเกมนั้นๆ )</p></li>
                    <li><p>ให้หัวหน้าทีมผู้ชนะในการแข่งขันนัดนั้นๆ คอมเม้นตามแบบฟอร์ม </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทีม A vs ทีม B ผลการแข่งขัน ทีม ... ชนะ</p></li>
                    <li><p>ให้คอมเม้น <i class="comments outline icon"></i> รูปผลการแข่งขันโดยการตอบกลับคอมเม้นแรก (ในข้อ 2)</p></li>
                    <li><p>ให้ทีมที่แพ้ / อีกทีมหนึ่ง มาคอมเม้นยืนยันว่าผลนั้นเป็นจริง หากไม่เป็นความจริงสามารถคอมเม้นหลักฐานยืนยันได้</p></li>
                    <li><p>หากมีข้อโต้แย้งกัน ให้ขึ้นอยู่กับการตัดสินใจของคณะกรรมการจัดการแข่งขัน ว่าจะตัดสินอย่างไร</p></li>
                </ol>
            </div>
        </div>

        <div class="feature-wiget">
            <div class="content">
                <h4 class="bottom-line"><i class="ion-android-call"></i>&nbsp;&nbsp;<span class="markFont" >การติดต่อฝ่ายการจัดการแข่งขันและเรื่องต่างๆ ที่จำเป็นต้องทราบ</span></h4>
                <ol>
                    <li><p>กฏอาจจะมีการเปลี่ยนแปลงไปตามความเหมาะสมของสถานการณ์ในระหว่างการแข่งขัน โดยที่อาจจะไม่ได้แจ้งให้ทางผู้เล่นทราบล่วงหน้า</p></li>
                    <li><p>การตัดสินใจของกรรมการคือคำสิ้นสุด และจะไม่มีข้อยกเว้นใดๆทั้งสิ้น</p></li>
                    <li><p>ทีมที่เข้าร่วมแข่งขันต้องเข้าใจถึงกฏ กติกาอย่างชัดเจน ถ้าเกิดมีการทำผิดกฏ กรรมการสามารถตัดสิทธิ์ทีมนั้นๆได้ทันที</p></li>
                    <li><p>หากมีการพบบัคขณะทำการแข่งขันที่ก่อให้ประสบปัญหาสามารถหยุดเกมและทักท้วงและถ่ายรูป <i class="images outline icon"></i> ส่งมาให้กรรมการตัดสินได้</p></li>
                    <li><p>หากผู้เล่นต้องสงสัยหรือได้รับการพิสูจน์แล้วว่ามีส่วนร่วมในการเล่นที่ไม่เป็นธรรมหรือสมรู้ร่วมคิดในการกำหนดผลการเล่นกรรมการจะทำการลงโทษตามความเหมาะสมและดุลยพินิจของกรรมการ</p></li>
                </ol>
            </div>
        </div>

        <div class="feature-wiget">
            <div class="content">
                <h4 class="bottom-line"><i class="ion-ios-game-controller-a"></i>&nbsp;&nbsp;<span class="markFont" id="11">การแจ้งเหตุความไม่เป็นธรรมระหว่างการแข่งขัน</span></h4>
                <ol>
                    <li><p>บันทึกหลักฐานเหตุการณ์ดังกล่าว เช่น รูปภาพ <i class="images outline icon"></i>,คลิปวิดีโอ <i class="video icon"></i></p></li>
                    <li><p>ส่งมาให้ทีมงาน ผ่านการแจ้งปัญหาเกี่ยวกับการแข่งขัน หรือ ผู้กระทำผิดกฏกติกา </p></li>
                    <li><p>หากหลักฐานไม่ชัดเจน ทางทีมงาน ขอตัดสิทธิ์การเปลี่ยนแปลงผลการแข่งขันใดๆก็ตามที่ได้มีการตัดสินผลแพ้-ชนะไปแล้ว</p></li>
                </ol>
            </div>
        </div>
        <!--end rule-->
        </div> <!--ui segment-->


        </div> <!--container-->


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

        jQuery(document).ready(function( $ ) {

            $('.ui.sticky')
                .sticky({
                    context: '#example2',
                    pushing: true
                });

        });

        $('.menu .item').tab();

    </script>

    <script>
        function navigate(obj,num){
            //$(obj)
            //$(obj).addClass("item active");
            console.log("menu-click");
        }
    </script>
@endsection