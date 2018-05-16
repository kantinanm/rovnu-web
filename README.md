# rovnu-web
NU eSports Tournament : งานเฉลิมฉลองครบรอบ 25 ปี คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร

<br><Strong>How to install </Strong>
1. composer install
2. create .env file
3. php artisan key:generate
4. edit value in configulation file: .env
    <p>CACHE_DRIVER=array</p>
    <p>QUEUE_DRIVER=database</p>
5. php artisan migrate:refresh --seed
