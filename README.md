# rovnu-web
NU eSports Tournament : งานเฉลิมฉลองครบรอบ 25 ปี คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร

<br><Strong>How to install </Strong>
1. composer install
2. create .env file
3. php artisan key:generate
4. edit value in configulation file: .env
    <p>CACHE_DRIVER=array</p>
    <p>QUEUE_DRIVER=database</p>
    <p>PLAYER_LIMIT=7  (จำนวนผู้เล่นในแต่ละทีม)</p>
    <p>NOTIFICATION_DATE="1 กรกฏาคม 2561" (วันประกาศผลการรับสมัคร)</p> 
    <p>OVER_NOTIFICATION_DATE=false (เกินวันประกาศผลหรือไม่)</p>
    <p>HOW_TO_MAKE_VIDEO_URL="http://www.ecpe.nu.ac.th" (link สำหรับคำแนะนำในการสร้าง video แนะนำทีม)</p>
    <p>HOW_TO_REGISTER_URL="#" (link video สำหรับคำแนะนำในลงทะเบียน)</p>
    <p>HOW_TO_REGISTER_MANUAL="#" (link คู่มือการลงทะเบียน)</p>
    <p>ALLOW_TEAM_REGISTER=false (อนุญาตให้ลงทะเบียน)</p>
    <p>ALLOW_PATICIPANT_REGISTER=false (อนุญาตให้ลงทะเบียน)</p>
    <p>ALLOW_SPONSOR_REGISTER=false (อนุญาตให้ลงทะเบียน)</p>
    <p>ADMIN_ADDRESS= (อีเมล์สำหรับ bcc ข้อมูลในเมล์  การสมัคร และการยืนยันการส่งทีมเข้าแข่งขัน)</p>
    <p>MANAGER_ADDRESS= (อีเมล์สำหรับ cc ข้อมูลในเมล์  การสมัคร และการยืนยันการส่งทีมเข้าแข่งขัน)</p>
5. php artisan migrate:refresh --seed
6. php artisan queue:work
7. php artisan serve
