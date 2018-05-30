

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คุณได้ยืนยันการส่งทีมเข้าร่วมแข่งขัน NU e-Sport ROV Tournament โดยมีรายละเอียดดังนี้
<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table width="650" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td width="160px" align="right"><span style="color:#000;font-size:16px">ทีมของคุณใช้ชื่อว่า :</span></td>
        <td><span style="color:#00F;font-size:16px"><div id="divEmail" style="width:250px;">{{$user->teamname}}</div></span></td>
    </tr>
</table>

    <table width="650" border="0" cellspacing="1" cellpadding="0">
        <tr>
            <td width="160px" align="right"><span style="color:#000;font-size:16px">คำบรรยายทีม :</span></td>
            <td><span style="color:#00F;font-size:16px"><div id="divEmail" style="width:250px;">{{$user->slug}}</div></span></td>
        </tr>
    </table>


    <table width="650" border="0" cellspacing="1" cellpadding="0">
        <tr>
            <td width="160px" align="right"><span style="color:#000;font-size:16px">ทีมจากสถาบัน :</span></td>
            <td><span style="color:#00F;font-size:16px"><div id="divEmail" style="width:250px;">{{$user->institution}}</div></span></td>
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
        <td align="center"><strong>รหัสนิสิต/นักศึกษา</strong></td>
        <td align="center"><strong>คณะ/ระดับชั้น</strong></td>
        <td align="center"><strong>Garena ID</strong></td>
        <td align="center"><strong>Player</strong></td>
    </tr>
    @foreach($players as $player)
    <tr>
        <td align="center">{{$loop->index+1}}</td>
        <td>{{$player->firstname}} {{$player->lastname}}</td>
        <td>{{$player->studentid}}</td>
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

&nbsp;&nbsp;&nbsp;&nbsp; ภายหลังจากนี้คุณต้องไปทำ Video clip แนะนำทีม และเข้ามาแจ้ง Link ในระบบ โดยการ <a href="{{route('login')}}">login</a> หรือ ข้อมูลเพิ่มเติม -> จัดการข้อมูลทีม

<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#F00;"><strong>*Notice</strong></span> : ระยะเวลาในการ แจ้ง Link video clip แนะนำทีม ตั้งแต่วันนี้ จนถึงวันที่  <span style="color:#F00;"><strong> 30 มิถุนายน 2561  </strong></span>
<br />
<br />โดยสามารถกดติดตามรายละเอียดเพิ่มเติมได้ที่ <a href="https://www.facebook.com/ecpenu-124356001077081/" target="_blank"> เพจ ecpe.nu </a><br />

<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ขอบคุณที่ส่งทีมเข้ามาร่วมสนุกกัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />


