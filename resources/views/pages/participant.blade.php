<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Participant</title>
</head>
<body>

<table >
    <thead >
    <tr>
        <th>ลำดับ</th>
        <th>ชื่อ - นามสกุล</th>
        <th>Email</th>
        <th>Garena-ID</th>
        <th>ประเภท</th>

    </tr>
    </thead>
    <tbody>
    @foreach($listParticipant as $item)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>
                {{$item->fullname}}
            </td>
            <td>
                {{$item->email}}
            </td>
            <td>
                {{$item->garena_id}}
            </td>
            <td>
                @if($item->member_type==0)
                    นิสิต / นักศึกษา
                @elseif($item->member_type==1)
                    บุคลากรสายวิชาการ
                @elseif($item->member_type==2)
                    บุคลากรสายสนับสนุน
                @elseif($item->member_type==3)
                    นักเรียน
                @elseif($item->member_type==4)
                    บุคคลทั่วไป
                @endif

            </td>

        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>