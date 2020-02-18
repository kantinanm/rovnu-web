<footer class="padding-top-120">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-left-content">
                    <div class="logo-colored">
                        มหาวิทยาลัยนเรศวร
                    </div>
                    <div class="content">
                        <p><i class="ion-map" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;99 หมู่ 9 ต.ท่าโพธิ์ อ.เมือง จ.พิษณุโลก 65000</p>
                        <p><i class="ion-ios-telephone" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;055-962384</p>
                        <p><i class="ion-android-mail" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;esport@nu.ac.th</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4 col-sm-2">
                        <div class="footer-list-wiget">
                            <h4>ข้อมูลเพิ่มเติม</h4>
                            <div class="list-group">
                             <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="list-group-item"><i class="ion-ios-game-controller-b-outline" style="font-size: 30px;"></i>&nbsp;<span class="markFont">การรับสมัคร แข่งขันเกม ROV </span></a>
                                <!--  <a href="#" data-toggle="modal" data-target="#exampleModalPaticipicant" class="list-group-item"><i class="ion-person-add" style="font-size: 30px;"></i>&nbsp;<span class="markFont">ลงทะเบียนเข้าร่วมงาน</span></a> -->
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
                            <!--<a href="https://www.youtube.com/watch?v=BXBurSbShYk" target="_blank" class="list-group-item"><i class="youtube icon" ></i>&nbsp;<span class="markFont">ตัวอย่างการสมัคร</span></a>-->
                                <a href="http://bit.ly/2SmCsYF" target="_blank" class="list-group-item"><i class="ion-ios-list-outline" ></i>&nbsp;<span class="markFont">คู่มือการสมัคร</span></a>

                                <a href="https://www.facebook.com/%E0%B8%AD%E0%B8%B5%E0%B8%AA%E0%B8%9B%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%95-%E0%B8%81%E0%B8%B5%E0%B8%AC%E0%B8%B2%E0%B8%9A%E0%B8%B8%E0%B8%84%E0%B8%A5%E0%B8%B2%E0%B8%81%E0%B8%A3-%E0%B8%A1%E0%B8%99%E0%B9%80%E0%B8%A3%E0%B8%A8%E0%B8%A7%E0%B8%A3-104781621097309/" target="_blank" class="list-group-item"><i class="ion-social-facebook" style="font-size: 30px;"></i>&nbsp;<span class="markFont">Facebook Page</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-2">
                        <div class="footer-list-wiget">
                            <h4> มหาวิทยาลัยนเรศวร </h4>
                            <div class="list-group text-center">
                                <a href="#">
                                    <img src="{{ URL::asset('images/30th_NU_footer.png')}}" class="ui small image">
                                </a>

                            </div>
                            <p class="text-center">ร่วมเฉลิมฉลอง 30 ปี มหาวิทยาลัยนเรศวร </p>
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

