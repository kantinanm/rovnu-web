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
                <div class="active section">ตารางและผลการแข่งขัน</div>
            </div>

            <div class="row padding-top-bottom-20">
                <div class="col-md-12">

                </div>
            </div>
        </div>

        <div class="container">


            <div class="ui icon green message">
                <i class="bullhorn icon"></i>
                <div class="content">
                    <div class="header">
                        <span class="markFont"> ประกาศรายชื่อทีม </span>
                    </div>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทางผู้จัดงานยินดีเป็นอย่างยิ่งที่จะประกาศ<a href="{{ route('overall') }}" target="_blank">รายชื่อทีมที่ผ่านการพิจารณา</a>ให้สามารถเข้าร่วมการแข่งขันในครั้งนี้
                    </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หากต้องการติดต่ออีกทีม <strong> เรื่องการนัดเวลา  แบบฉุกเฉินหรือเร่งด่วน ให้ใช้ข้อมูลสำหรับการติดต่อของแต่ละทีมได้ </strong> ที่ดูได้จาก <a href="{{ route('overall') }}" target="_blank">รายชื่อทีม</a> และคลิกที่ชื่อทีม
                    </p>

                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทีมที่ทำการแข่งขันควร<strong>ศึกษา<a href="{{ route('rules') }}">กฏและกติกาการแข่งขันใน Tournament </a> นี้ให้เข้าใจ เพื่อไม่ให้เสียผลประโยชน์ </strong>และหากมีข้อสงสัยเพิ่มเติมสามารถ inbox ทักทายกันมาได้ที่ <a href="https://www.facebook.com/nu.esport/" target="_blank"><i class="facebook square icon"></i>NU ESport </a>
                    </p>
                    <p></p>
                </div>
            </div>

        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <div class="ui top attached tabular menu">
                        <a class="item active" data-tab="groupA"><span class="markFont">กลุ่ม A</span></a>
                        <a class="item" data-tab="groupB"><span class="markFont">กลุ่ม B</span></a>
                        <a class="item" data-tab="groupC"><span class="markFont">กลุ่ม C</span></a>
                        <a class="item" data-tab="groupD"><span class="markFont">กลุ่ม D</span></a>
                    </div>
                    <div class="ui bottom attached tab segment active" data-tab="groupA">

                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ URL::asset('images/result/Round1_groupA.png') }}" alt="Card image cap">
                        </div>
                        <div class="ui teal info message">
                            <i class="close icon"></i>
                            <div class="header">
                                <span class="markFont">การแข่งขันรอบแรก Round 4 สาย A</span>
                            </div>
                            <ul class="list">
                                <li><strong>ยินดีกับแชมป์กลุ่ม A ทีม Alzheimer  </strong> แล้วเจอกันวันที่ 17 สิงหาคม 2561 <i class="yellow trophy icon"></i>   </li>
                            </ul>
                        </div>

                        <table class="ui celled structured red table">
                            <thead>
                            <tr>

                                <th>รอบ</th>
                                <th>คู่</th>
                                <th>ทีม A</th>
                                <th>ทีม B</th>
                                <th>วันที่แข่ง</th>
                                <th>ผลการแข่งขัน</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="8" >Round 1</td>
                                <td>1 </td>
                                <td>Fin18</td>
                                <td><span style="font-size: 8px;">INDUSTRIAL ENGINEERING EASY</span></td>
                                <td>3 ก.ค. 61 </td>
                                <td>Fin18 ชนะ <span style="color:red"><sup>**เนื่องจาก ทีม INDUSTRIAL ENGINEERING EASY ไม่มานัดเวลาารแข่งขัน</sup></span></td>

                            </tr>
                            <tr>

                                <td>2</td>
                                <td>Fight for girl</td>
                                <td>กุ๊กกุ๊ก</td>
                                <td>3 ก.ค. 61 </td>
                                <td>Fight for girl ชนะ</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>ซกเล็ก</td>
                                <td>Emperor</td>
                                <td>3 ก.ค. 61 </td>
                                <td>ซกเล็ก ชนะ</td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>pormung</td>
                                <td>หนีห้า</td>
                                <td>3 ก.ค. 61 </td>
                                <td>pormung ชนะ</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Alzheimer</td>
                                <td>Nemesis</td>
                                <td>3 ก.ค. 61 </td>
                                <td>Alzheimer ชนะ</td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>sword</td>
                                <td>DeadJungle</td>
                                <td>3 ก.ค. 61 </td>
                                <td>DeadJungle ชนะ <span style="color:red"><sup>** เนื่องจาก ทีม sword ไม่มานัดเวลาารแข่งขัน</sup></span></td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Holy Light</td>
                                <td>Sakura</td>
                                <td>3 ก.ค. 61 </td>
                                <td>Holy Light ชนะ </td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Réstart</td>
                                <td>หัวร้อน</td>
                                <td>3 ก.ค. 61 </td>
                                <td>Réstart ชนะ </td>
                            </tr>

                            <tr>
                                <td rowspan="4" >Round 2</td>
                                <td>1 </td>
                                <td>Fin18</td>
                                <td>Fight for girl</td>
                                <td>11 ก.ค. 61 </td>
                                <td>Fin18 ชนะ </td>

                            </tr>
                            <tr>

                                <td>2</td>
                                <td>ซกเล็ก</td>
                                <td>pormung</td>
                                <td>11 ก.ค. 61 </td>
                                <td>ซกเล็ก ชนะ</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Alzheimer</td>
                                <td>DeadJungle</td>
                                <td>11 ก.ค. 61 </td>
                                <td>Alzheimer ชนะ</td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Holy Light</td>
                                <td>Réstart </td>
                                <td>11 ก.ค. 61 </td>
                                <td>Réstart ชนะ <span style="color:red"><sup>** เนื่องจาก ทีม Holy Light ไม่มาแข่งขัน</sup></span></td>
                            </tr>


                            <tr>
                                <td rowspan="2" >Round 3</td>
                                <td>1 </td>
                                <td>Fin18</td>
                                <td>ซกเล็ก</td>
                                <td>20 ก.ค. 61 </td>
                                <td>Fin18 ชนะ </td>

                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Alzheimer</td>
                                <td>Réstart</td>
                                <td>19 ก.ค. 61 </td>
                                <td>Alzheimer ชนะ</td>
                            </tr>

                            <tr>
                                <td rowspan="1" >Round 4</td>
                                <td>1 </td>
                                <td>Fin18</td>
                                <td>Alzheimer</td>
                                <td>27 ก.ค. 61 </td>
                                <td>Alzheimer ชนะ</td>

                            </tr>

                            </tbody>

                        </table>


                    </div>
                    <div class="ui bottom attached tab segment" data-tab="groupB">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ URL::asset('images/result/Round1_groupB.png') }}" alt="Card image cap">
                            <div class="ui pink info message">
                                <i class="close icon"></i>
                                <div class="header">
                                    <span class="markFont">การแข่งขันรอบแรก Round 4 สาย B</span>
                                </div>
                                <ul class="list">
                                    <li><strong>ยินดีกับแชมป์กลุ่ม B ทีม DoEnYent  </strong> แล้วเจอกันวันที่ 17 สิงหาคม 2561 <i class="yellow trophy icon"></i>   </li>
                                </ul>
                            </div>
                        </div>
                        <table class="ui celled structured yellow table">
                            <thead>
                            <tr>

                                <th>รอบ</th>
                                <th>คู่</th>
                                <th>ทีม A</th>
                                <th>ทีม B</th>
                                <th>วันที่แข่ง</th>
                                <th>ผลการแข่งขัน</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="7" >Round 1</td>
                                <td>1 </td>
                                <td>R e n e g a d e</td>
                                <td>X Forec</td>
                                <td>5 ก.ค. 61 </td>
                                <td>R e n e g a d e ชนะ</td>

                            </tr>
                            <tr>

                                <td>2</td>
                                <td>Red dragon</td>
                                <td>ลืมตั้งชื่อ</td>
                                <td>5 ก.ค. 61 </td>
                                <td>ลืมตั้งชื่อ ชนะ</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>LFP</td>
                                <td>Revana</td>
                                <td>5 ก.ค. 61 </td>
                                <td>Revana ชนะ <span style="color:red"><sup>** เนื่องจาก ทีม LFP ไม่มาแข่งขัน</sup></span></td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>DevilZone</td>
                                <td>เค ผองเพื่อน</td>
                                <td>5 ก.ค. 61 </td>
                                <td>DevilZone ชนะ</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>cybercore</td>
                                <td>Rich man</td>
                                <td>5 ก.ค. 61 </td>
                                <td>Rich man ชนะ <span style="color:red"><sup>** เนื่องจาก ทีม cybercore ไม่มาแข่งขัน</sup></span></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Reunion</td>
                                <td>Sec1</td>
                                <td>5 ก.ค. 61 </td>
                                <td>Sec1 ชนะ</td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>KAI</td>
                                <td>DoEnYent</td>
                                <td>5 ก.ค. 61 </td>
                                <td>DoEnYent ชนะ</td>
                            </tr>


                            <tr>
                                <td rowspan="3" >Round 2</td>
                                <td>1 </td>
                                <td>R e n e g a d e</td>
                                <td>ลืมตั้งชื่อ</td>
                                <td>13 ก.ค. 61 </td>
                                <td>ลืมตั้งชื่อ ชนะ</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Revana</td>
                                <td>DevilZone</td>
                                <td>13 ก.ค. 61 </td>
                                <td>DevilZone ชนะ</td>
                            </tr>
                            <tr>

                                <td>3</td>
                                <td>Rich man</td>
                                <td>Sec1</td>
                                <td>13 ก.ค. 61 </td>
                                <td>Rich man ชนะ</td>
                            </tr>

                            <tr>
                                <td rowspan="2" >Round 3</td>
                                <td>1 </td>
                                <td>ลืมตั้งชื่อ</td>
                                <td>DevilZone</td>
                                <td>21 ก.ค. 61 </td>
                                <td>DevilZone ชนะ</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rich man</td>
                                <td>DoEnYent</td>
                                <td>21 ก.ค. 61 </td>
                                <td>DoEnYent ชนะ</td>
                            </tr>
                            <tr>
                                <td rowspan="1" >Round 4</td>
                                <td>1 </td>
                                <td>DevilZone</td>
                                <td>DoEnYent</td>
                                <td>29 ก.ค. 61 </td>
                                <td>DoEnYent ชนะ</td>

                            </tr>
                            </tbody>

                        </table>

                    </div>
                    <div class="ui bottom attached tab segment" data-tab="groupC">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ URL::asset('images/result/Round1_groupC.png') }}" alt="Card image cap">
                            <div class="ui blue info message">
                                <i class="close icon"></i>
                                <div class="header">
                                    <span class="markFont">การแข่งขันรอบแรก Round 4 สาย C</span>
                                </div>
                                <ul class="list">
                                    <li><strong>ยินดีกับแชมป์กลุ่ม C ทีม MeLegends   </strong> แล้วเจอกันวันที่ 17 สิงหาคม 2561 <i class="yellow trophy icon"></i>   </li>

                                </ul>
                            </div>
                        </div>

                        <table class="ui celled structured orange table">
                            <thead>
                            <tr>

                                <th>รอบ</th>
                                <th>คู่</th>
                                <th>ทีม A</th>
                                <th>ทีม B</th>
                                <th>วันที่แข่ง</th>
                                <th>ผลการแข่งขัน</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="7" >Round 1</td>
                                <td>1 </td>
                                <td>PP CITY</td>
                                <td>8-BIT</td>
                                <td>7 ก.ค. 61 </td>
                                <td>8-BIT ชนะ <span style="color:red"><sup>** เนื่องจาก ทีม PP CITY ไม่มาแข่งขัน</sup></span></td>

                            </tr>
                            <tr>

                                <td>2</td>
                                <td>MeLegends</td>
                                <td>White Bears</td>
                                <td>7 ก.ค. 61 </td>
                                <td>MeLegends ชนะ</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>เก๋สั่งลุย</td>
                                <td>IT.OverKill</td>
                                <td>7 ก.ค. 61 </td>
                                <td>ทีมเก๋สั่งลุย ชนะ</td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>TheLast1</td>
                                <td>The memes</td>
                                <td>7 ก.ค. 61 </td>
                                <td>TheLast1 ชนะ</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Eric</td>
                                <td>Ares</td>
                                <td>7 ก.ค. 61 </td>
                                <td>Eric ชนะ</td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>BLueDragon</td>
                                <td>OTA BOYZ</td>
                                <td>7 ก.ค. 61 </td>
                                <td>BLueDragon ชนะ</td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>GSL</td>
                                <td>EX-Chapter</td>
                                <td>7 ก.ค. 61 </td>
                                <td>EX-Chapter ชนะ</td>
                            </tr>

                            <tr>
                                <td rowspan="3" >Round 2</td>
                                <td>1 </td>
                                <td>8-BIT</td>
                                <td>MeLegends</td>
                                <td>15 ก.ค. 61 </td>
                                <td>MeLegends ชนะ</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ทีมเก๋สั่งลุย</td>
                                <td>TheLast1</td>
                                <td>15 ก.ค. 61 </td>
                                <td>เก๋สั่งลุย ชนะ</td>
                            </tr>
                            <tr>

                                <td>3</td>
                                <td>Eric</td>
                                <td>BLueDragon</td>
                                <td>15 ก.ค. 61 </td>
                                <td>Eric ชนะ</td>
                            </tr>

                            <tr>
                                <td rowspan="2" >Round 3</td>
                                <td>1 </td>
                                <td>MeLegends</td>
                                <td>เก๋สั่งลุย</td>
                                <td>23 ก.ค. 61 </td>
                                <td>MeLegends ชนะ</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eric</td>
                                <td>EX-Chapter</td>
                                <td>23 ก.ค. 61 </td>
                                <td>Eric ชนะ</td>
                            </tr>

                            <tr>
                                <td rowspan="1" >Round 4</td>
                                <td>1 </td>
                                <td>MeLegends</td>
                                <td>Eric</td>
                                <td>31 ก.ค. 61 </td>
                                <td>MeLegends ชนะ</td>

                            </tr>

                            </tbody>

                        </table>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="groupD">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ URL::asset('images/result/Round1_groupD.png') }}" alt="Card image cap">

                            <div class="ui brown info message">
                                <i class="close icon"></i>
                                <div class="header">
                                    <span class="markFont">การแข่งขันรอบแรก Round 4 สาย D</span>
                                </div>
                                <ul class="list">
                                    <li>ทุกทีมในสาย D ต้องทำการ<strong>ตกลงเวลาในการแข่งไม่ควรเกินวันที่ 1 ส.ค. 2561 </strong>ผ่านทางโพส <i class="comments outline icon"></i> ที่ทางเพจ <a href="https://www.facebook.com/nu.esport/" target="_blank"><i class="facebook square icon"></i>NU ESport</a> ได้  <i class="map marker alternate icon"></i>ปักหมุดไว้ และทำการแข่งขันใน<strong>วันที่ 2 ส.ค. 2561 </strong> พร้อมทั้งรายงานผลมายังที่เพจ <a href="https://www.facebook.com/nu.esport/" target="_blank"><i class="facebook square icon"></i>NU ESport </a> ไม่เกิน 23.59 น.</li>
                                    <li>หัวหน้าทีมของทั้งสองทีมต้องติดตามและค้นหาโพสเวลานัดเวลาแข่งขันทางเพจ <a href="https://www.facebook.com/nu.esport/" target="_blank"><i class="facebook square icon"></i>NU ESport </a> ซึ่งทีมงานจะโพสก่อนวันแข่งขันล่วงหน้าอย่างน้อย 1 วัน</li>
                                    <li>หากต้องการติดต่ออีกทีม เรื่องการนัดเวลา <i class="plus square icon"></i> แบบฉุกเฉินหรือเร่งด่วน  ให้ใช้ข้อมูลสำหรับติดต่อของแต่ละทีมได้ ที่ดูได้จาก <a href="#">ที่นี่ </a> และคลิกที่ชื่อทีม</li>
                                    <li>เมื่อถึงเวลา 17:00 น. ของวันแข่งขันแล้ว หากทีมที่มีชื่อเป็นทีมแรก ยังไม่ทำการขียนคอมเม้นนัดแข่ง ให้อีกฝั่งหนึ่ง ทำหน้าที่เขียนคอมเม้นนัดแข่งแทน <i class="shield alternate icon"></i> เพื่อปกป้องผลประโยชน์ของตนเอง</li>
                                    <li>หากทั้งสองทีมไม่สามารถตกลงเวลากันได้ ให้แข่งขันในเวลากลาง คือ เวลา 20:00 น. ของวันที่มีการแข่งขัน</li>

                                </ul>
                            </div>
                        </div>

                        <table class="ui celled structured violet table">
                            <thead>
                            <tr>

                                <th>รอบ</th>
                                <th>คู่</th>
                                <th>ทีม A</th>
                                <th>ทีม B</th>
                                <th>วันที่แข่ง</th>
                                <th>ผลการแข่งขัน</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="7" >Round 1</td>
                                <td>1 </td>
                                <td>Wrigleys</td>
                                <td>SLP</td>
                                <td>9 ก.ค. 61 </td>
                                <td>Wrigleys ชนะ</td>

                            </tr>
                            <tr>

                                <td>2</td>
                                <td>MEEPOOH</td>
                                <td>Epicshark</td>
                                <td>9 ก.ค. 61 </td>
                                <td>MEEPOOH ชนะ</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>PLKT</td>
                                <td>แอ๋วอยู่ไหน</td>
                                <td>9 ก.ค. 61 </td>
                                <td>PLKT ชนะ</td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Rookie</td>
                                <td>SixDion</td>
                                <td>9 ก.ค. 61 </td>
                                <td>SixDion ชนะ</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>JupaJub</td>
                                <td>ROV_AFK</td>
                                <td>9 ก.ค. 61 </td>
                                <td>ROV_AFK ชนะ</td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>ปังเย็นคุง</td>
                                <td>อ๊บไสไม้</td>
                                <td>9 ก.ค. 61 </td>
                                <td>ปังเย็นคุง ชนะ</td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>DoubleA</td>
                                <td>Seaplus</td>
                                <td>9 ก.ค. 61 </td>
                                <td>DoubleA ชนะ</td>
                            </tr>


                            <tr>
                                <td rowspan="3" >Round 2</td>
                                <td>1 </td>
                                <td>Wrigleys</td>
                                <td>MEEPOOH</td>
                                <td>17 ก.ค. 61 </td>
                                <td>MEEPOOH ชนะ</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>PLKT</td>
                                <td>SixDion</td>
                                <td>17 ก.ค. 61 </td>
                                <td>SixDion ชนะ</td>
                            </tr>
                            <tr>

                                <td>3</td>
                                <td>ROV_AFK</td>
                                <td>ปังเย็นคุง</td>
                                <td>17 ก.ค. 61 </td>
                                <td>ปังเย็นคุง ชนะ</td>
                            </tr>

                            <tr>
                                <td rowspan="2" >Round 3</td>
                                <td>1 </td>
                                <td>MEEPOOH</td>
                                <td>SixDion </td>
                                <td>25 ก.ค. 61 </td>
                                <td>MEEPOOH ชนะ </td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ปังเย็นคุง</td>
                                <td>DoubleA</td>
                                <td>25 ก.ค. 61 </td>
                                <td>ปังเย็นคุง ชนะ</td>
                            </tr>

                            <tr>
                                <td rowspan="1" >Round 4</td>
                                <td>1 </td>
                                <td>MEEPOOH</td>
                                <td>ปังเย็นคุง</td>
                                <td>2 ส.ค. 61 </td>
                                <td>ปังเย็นคุง ชนะ</td>

                            </tr>

                            </tbody>

                        </table>
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

        jQuery(document).ready(function( $ ) {

            $('.menu .item')
                .tab()
            ;

        });
    </script>

    <script>

    </script>
@endsection
