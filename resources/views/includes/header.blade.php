<header id="home" class="gradient-violat">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="logo-wraper logo-white">
                <img src="{{ URL::asset('images/logo25.png') }}" alt=""/>NU eSports ROV Tournament
              </span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav  navbar-right">
                    <li class="active"><a href="{{ route('home') }}"><span class="menu">หน้าแรก</span> <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ route('home') }}#rules"><span class="menu">กติกาการแข่งขัน</span></a></li>
                    <li><a href="{{ route('home') }}#rewards"><span class="menu">ของรางวัล</span></a></li>

                    <li><a href="{{ route('place') }}"><span class="menu">สถานที่จัดงาน</span></a></li>
                    <li><a href="{{ route('question') }}"><span class="menu">คำถามที่พบบ่อย</span></a></li>
                    <li><a href="{{ route('home') }}#schedule"><span class="menu">ตารางการแข่งขัน</span></a></li>
                    @if( Auth::guest() )
                    <li><a href="#" data-toggle="modal" data-target="#exampleModalPaticipicant" class="btn btn-orange border-none btn-rounded-corner btn-navbar">ลงทะเบียนเข้าร่วมงาน<span class="icon-on-button"><i class="ion-ios-game-controller-b-outline"></i></span></a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
            <hr class="navbar-divider">
        </div><!-- /.container-fluid -->
    </nav>
</header>