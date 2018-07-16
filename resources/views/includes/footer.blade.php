<footer class="padding-top-120">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-left-content">
                    <div class="logo-colored">
                        คณะวิศวกรรมศาสตร์
                    </div>
                    <div class="content">
                        <p class="margin-bottom-30 margin-top-30">มหาวิทยาลัยนเรศวร</p>
                        <p><i class="ion-map" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;99 หมู่ 9 ต.ท่าโพธิ์ อ.เมือง จ.พิษณุโลก 65000</p>
                        <p><i class="ion-ios-telephone" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;055-964371</p>
                        <p><i class="ion-android-mail" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;ecpe-software@nu.ac.th</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4 col-sm-2">
                        <div class="footer-list-wiget">
                            <h4>ข้อมูลเพิ่มเติม</h4>
                            <div class="list-group">
                            <!-- <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="list-group-item"><i class="ion-ios-game-controller-b-outline" style="font-size: 30px;"></i>&nbsp;<span class="markFont">การรับสมัคร</span></a> -->
                                <a href="#" data-toggle="modal" data-target="#exampleModalPaticipicant" class="list-group-item"><i class="ion-person-add" style="font-size: 30px;"></i>&nbsp;<span class="markFont">ลงทะเบียนเข้าร่วมงาน</span></a>
                             <!--    <a href="#" data-toggle="modal" data-target="#exampleModalSponser" class="list-group-item"><i class="ion-pin" style="font-size: 30px;"></i>&nbsp;<span class="markFont">ลงทะเบียนการเป็นผู้สนับสนุน</span></a> -->
                                <a href="{{ route('rules') }}"  class="list-group-item"><i class="icon gavel" style="font-size: 30px;"></i>&nbsp;<span class="markFont">กฏและกติกาการแข่งขัน</span></a>
                                @if( Auth::guest() )
                                    <a href="{{ route('login') }}" class="list-group-item"><i class="chess knight icon" style="font-size: 30px;"></i><span class="markFont">จัดการข้อมูลทีม</span></a>
                                @else
                                    @if(Auth::user()->register_completed==0)
                                        <a href="{{ route('register-players') }}" class="list-group-item"><i class="chess knight icon" style="font-size: 30px;"></i><span class="markFont">จัดการข้อมูลทีม</span></a>
                                    @elseif(Auth::user()->register_completed==1)
                                        <a href="{{ route('team-video-form') }}" class="list-group-item"><i class="chess knight icon" style="font-size: 30px;"></i><span class="markFont">จัดการข้อมูลทีม</span></a>
                                    @elseif(Auth::user()->register_completed==2)
                                        <a href="{{ route('team-info-get') }}" class="list-group-item"><i class="chess knight icon" style="font-size: 30px;"></i><span class="markFont">จัดการข้อมูลทีม</span></a>
                                    @endif


                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-2">
                        <div class="footer-list-wiget">
                            <h4>เกี่ยวกับเรา</h4>
                            <div class="list-group">
                                <a href="{{ route('place') }}" class="list-group-item"><i class="ion-videocamera" style="font-size: 30px;"></i>&nbsp;<span class="markFont">สถานที่จัดงาน</span></a>
                                <a href="https://www.youtube.com/watch?v=BXBurSbShYk" target="_blank" class="list-group-item"><i class="youtube icon" ></i>&nbsp;<span class="markFont">ตัวอย่างการสมัคร</span></a>
                                <a href="https://goo.gl/iJkFXw" target="_blank" class="list-group-item"><i class="ion-ios-list-outline" ></i>&nbsp;<span class="markFont">คู่มือการสมัคร</span></a>

                                <a href="https://www.facebook.com/ecpenu-124356001077081/" target="_blank" class="list-group-item"><i class="ion-social-facebook" style="font-size: 30px;"></i>&nbsp;<span class="markFont">Facebook Page</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-2">
                        <div class="footer-list-wiget">
                            <h4> 25 ปี คณะวิศวกรรมศาสตร์ </h4>
                            <div class="list-group text-center">
                                <a href="#">
                                    <img src="{{ URL::asset('images/logo25.png')}}" class="ui small image">
                                </a>

                            </div>
                            <p class="text-center">  วิศวกรฉลาด บุคลิกดี มีคุณธรรม ก้าวทันเทคโนโลยี (Smart Engineer) </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="copyright-cta">
            <!--<p class="text-uppercase">All rights Reserved By <a href="https://themewagon.com/"><span class="span text-violat ">Themewagon</span></a></p>-->
        </div>
    </div>
    <!-- </div> -->
    <div class="footer-end-line"></div>
</footer>

