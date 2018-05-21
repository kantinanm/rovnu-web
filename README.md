# rovnu-web
NU eSports Tournament : งานเฉลิมฉลองครบรอบ 25 ปี คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร

<br><Strong>How to install </Strong>
1. composer install
2. create .env file
3. php artisan key:generate
4. edit value in configulation file: .env
    <p>CACHE_DRIVER=array</p>
    <p>QUEUE_DRIVER=database</p>
    <p>PLAYER_LIMIT=7</p>// จำนวนผู้เล่นในแต่ละทีม
    <p>NOTIFICATION_DATE=1 กรกฏาคม 2561</p> //วันประกาศผลการรับสมัคร
5. php artisan migrate:refresh --seed
6. php artisan queue:work
7. php artisan serve
