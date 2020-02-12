

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คุณได้ยืนยันการส่งทีมเข้าร่วมแข่งขัน อีสปอร์ต กีฬาบุคลากร มหาวิทยาลัยนเรศวร
<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table width="650" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td width="160px" align="right"><span style="color:#000;font-size:16px">ทีมกลุ่ม :</span></td>
        <td><span style="color:#00F;font-size:16px"><div id="divEmail" style="width:250px;">{{$user->color}}</div></span></td>
    </tr>
</table>

    <table width="650" border="0" cellspacing="1" cellpadding="0">
        <tr>
            <td width="160px" align="right"><span style="color:#000;font-size:16px">ใช้ชื่อทีมว่า :</span></td>
            <td><span style="color:#00F;font-size:16px"><div id="divEmail" style="width:250px;">{{$user->teamname}}</div></span></td>
        </tr>
    </table>

<table width="650" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td width="160px" align="right"><span style="color:#000;font-size:16px">ชื่อ-นามสกุล ผู้ติดต่อ :</span></td>
        <td><span style="color:#00F;font-size:16px"><div id="divEmail" style="width:250px;">{{$user->name}}</div></span></td>
    </tr>
</table>

<table width="650" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td width="160px" align="right"><span style="color:#000;font-size:16px">เบอร์โทรศัพท์ :</span></td>
        <td><span style="color:#00F;font-size:16px"><div id="divEmail" style="width:250px;">{{$user->mobilephone}}</div></span></td>
    </tr>
</table>
<br />

    <table width="650" border="0" cellspacing="1" cellpadding="0">
        <tr>
            <td width="160px" align="right"><span style="color:#000;font-size:14px">You account :</span></td>
            <td><span style="color:#00F;font-size:16px"><div id="divEmail" style="width:250px;">{{$user->email}}</div></span></td>
        </tr>
    </table>


    <br />

<table width="800px" border="1" cellspacing="1" cellpadding="0">
    <tr>
        <td width="20" align="right"><strong>ลำดับ</strong></td>
        <td align="center"><strong>ชื่อ-นามสกุล</strong></td>
        <td align="center"><strong>เบอร์โทรศัพท์</strong></td>
        <td align="center"><strong>คณะ / กอง /สนง.</strong></td>
        <td align="center"><strong>Garena ID</strong></td>
        <td align="center"><strong>Player</strong></td>
    </tr>
    @foreach($players as $player)
    <tr>
        <td align="center">{{$loop->index+1}}</td>
        <td>{{$player->firstname}} {{$player->lastname}}</td>
        <td>{{$player->mobilephone}}</td>
        <td>@if($player->faculty==="อื่นๆ")
                {{$player->note}}
            @else
                {{$player->faculty}}
            @endif</td>
        <td>{{$player->rov_id}}</td>
        <td>{{$player->player_name}}</td>
    </tr>
    @endforeach

</table>

<br />

&nbsp;&nbsp;&nbsp;&nbsp; ภายหลังนี้ 3 วัน คุณสามารถตรวจสอบผลการสมัครได้ด้วยตนเอง โดยเข้าไปที่ <a href="{{route('login')}}">login</a> หรือ ข้อมูลเพิ่มเติม -> จัดการข้อมูลทีม

<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; หรือรอประกาศรายชื่อทีมทั้งหมดที่ผ่านการตัดเลือก ผ่านทางเว็บไซต์ ภายในวันที่  <span style="color:#F00;"><strong> 17 กุมภาพันธ์ 2563  </strong></span>
<br />
<br />โดยสามารถกดติดตามรายละเอียดเพิ่มเติมได้ที่ <a href="https://www.facebook.com/%E0%B8%AD%E0%B8%B5%E0%B8%AA%E0%B8%9B%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%95-%E0%B8%81%E0%B8%B5%E0%B8%AC%E0%B8%B2%E0%B8%9A%E0%B8%B8%E0%B8%84%E0%B8%A5%E0%B8%B2%E0%B8%81%E0%B8%A3-%E0%B8%A1%E0%B8%99%E0%B9%80%E0%B8%A3%E0%B8%A8%E0%B8%A7%E0%B8%A3-104781621097309/" target="_blank"> เพจ อีสปอร์ต กีฬาบุคลากร ม.นเรศวร </a><br />

<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ขอบคุณที่ส่งทีมเข้ามาร่วมสนุกกัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />


