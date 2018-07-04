<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ประกาศจากทางผู้จัดงาน </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="ui green message">
                    <div class="header">
                        <span class="markFont"> ทางเราจะเปิดรับสมัครอย่างเป็นทางการในวันที่ 1 - 30 มิถุนายน 2561  จำนวนจำกัด 64 ทีม  </span>
                    </div>
                    <ul class="list">
                        <li>ทีมจากนิสิตมหาวิทยาลัยนเรศวร จำนวน 40 ทีม (เจ้าภาพ)</li>
                        <li>ทีมจากนักศึกษามหาวิทยาลัยมหาวิทยาลัยราชภัฏพิบูลสงคราม จำนวน 6 ทีม</li>
                        <li>ทีมจากนักเรียนภายในจังหวัดพิษณุโลก และจังหวัดใกล้เคียง จำนวน 18 ทีม</li>
                    </ul>

                </div>
                <div class="ui yellow message">
                    <div class="header">
                        <span class="markFont"> หมายเหตุ  </span>
                    </div>
                    <ul class="list">
                        <li>ลำดับการสมัครก่อนหรือหลัง ไม่การันตี ว่าทีมของคุณจะได้อนุมัติการเข้าร่วมโครงการ  แต่อยู่ทีมงาน Garena Thailand และทีมงานเราในการตรวจสอบข้อมูลการสมัคร</li>

                    </ul>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">ย้อนกลับ</button>
                @if(!$allowTeamRegister)
                <button type="button" class="btn btn-primary" disabled >ลงทะเบียนทีมเข้าร่วมการแข่งขัน</button>
                @else
                <a href="{{ route('register-privacy') }}" class="btn btn-primary">ลงทะเบียนทีมเข้าร่วมการแข่งขัน<span class="icon-on-button"><i class="ion-ios-game-controller-b-outline"></i></span></a>
                @endif
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModalPaticipicant" tabindex="-1" role="dialog" aria-labelledby="exampleModalPaticipicantTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalPaticipicantTitle">ประกาศจากทางผู้จัดงาน </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="ui green message">
                    <div class="header">
                        <span class="markFont"> เปิดรับลงทะเบียนอย่างเป็นทางการในวันที่ 20 มิถุนายน 2561 เป็นต้นไป  โดยมีของรางวัลให้ร่วมลุ้น</span>
                    </div>
                    <ul class="list">
                        <p>
                            <i class="gift icon orange"></i>
                            เสื้อ 5 รางวัล *
                        </p>
                        <p>
                            <i class="chess queen icon purple"></i>
                            สกินฮีโร่ 10 รางวัล *
                        </p>
                    </ul>

                </div>

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
                        <p>โดยสามารถดู<a href="{{ route('activity') }}" target="_blank">กำหนดการได้ ที่นี่</a></p>
                    </div>
                </div>

                <div class="ui yellow message">
                    <div class="header">
                        <span class="markFont"> หมายเหตุ  </span>
                    </div>
                    <ul class="list">
                        <li>*สำหรับผู้เข้าร่วมงานที่ลงทะเบียนและมาร่วมงานในวันที่ 17 สิงหาคม 2561</li>

                    </ul>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">ย้อนกลับ</button>


                @if(!$allowPaticipantRegister)
                    <button type="button" class="btn btn-primary" disabled >ลงทะเบียนการเข้าร่วมงาน</button>
                @else
                    <a href="{{ route('register-paticipant') }}" class="btn btn-primary">ลงทะเบียนการเข้าร่วมงาน<span class="icon-on-button"><i class="icon user plus"></i></span></a>
                @endif
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="exampleModalSponser" tabindex="-1" role="dialog" aria-labelledby="exampleModalSponserTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalSponserTitle">ประกาศจากทางผู้จัดงาน </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="ui green message">
                    <div class="header">
                        <span class="markFont"> <i class="gift icon orange"></i> ทางเราเปิดรับผู้สนับสนุนกิจกรรมและโครงการดังกล่าว ซึ่งผู้สนับสนุนของเราจะได้รับการติดโลโก้ป้าย ตามสื่อประชาสัมพันธ์หลักดังนี้</span>
                    </div>
                    <ul class="list">
                        <li> โปสเตอร์ ขนาด A3</li>
                        <li> ใบปลิวขนาด A5  </li>
                        <li> Website</li>
                        <li> ปก FB บนเพจ ecpe.nu</li>
                        <li> ไวนิล backdrop หน้างาน ขนาดประมาณ 4x2 ตร.ม. (แนวนอน) จำนวน 1 ชุด</li>
                        <li> ไวนิลแบบตั้งพื้น ขนาดประมาณ 2x1 ตร.ม. (แนวตั้ง) จำนวน 4 ชุด</li>
                        <li> ไวนิลประชาสัมพันธ์ขนาดประมาณ 3x3 ตร.ม. สำหรับประชาสัมพันธ์ในม.นเรศวร จำนวน 1 จุด</li>
                        <li> จอ LED บริเวณหน้า ม. นเรศวร</li>
                        <li> บนหน้าจอ FB live ขณะแข่งขันรอบสุดท้าย</li>
                    </ul>
                    <p><a href="{{ url('/download/Sponsor_package_ROV.pdf')  }}" target="_blank">รายละเอียดเพิ่มเติม</a></p>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">ย้อนกลับ</button>

                @if(!$allowSponsorRegister)
                    <button type="button" class="btn btn-primary" disabled >ลงทะเบียนขอสนับสนุน</button>
                @else
                    <a href="{{ route('register-sponsor') }}" class="btn btn-primary">ลงทะเบียนขอสนับสนุน<span class="icon-on-button"><i class="ion-pin"></i></span></a>
                @endif

            </div>
        </div>
    </div>
</div>
<!-- Modal -->