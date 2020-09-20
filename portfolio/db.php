<?php

$conn = "dbname=dbc3vqnkgkk489 host=ec2-52-1-95-247.compute-1.amazonaws.com port=5432 user=jwvivlcaqucweh password=8bafc8441900fc7cdff15349aa62d905003ccfe189fa02f9fdcfaa67fbb589f3 sslmode=require";
$pdo = pg_connect($conn);

if (!$pdo) {
    die('接続失敗です。'.pg_last_error());
}

print('接続に成功しました。<br>');
