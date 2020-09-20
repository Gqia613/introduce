<?php
// $DBHOST = "ec2-52-1-95-247.compute-1.amazonaws.com";
// $DBPORT = "5432";
// $DBNAME = "dbc3vqnkgkk489";
// $DBUSER = "jwvivlcaqucweh";
// $DBPASS = "8bafc8441900fc7cdff15349aa62d905003ccfe189fa02f9fdcfaa67fbb589f3";

// $dbh = new PDO("pgsql:host=$DBHOST;port=$DBPORT;dbname=$DBNAME;user=$DBUSER;password=$DBPASS");
// print("接続成功".'<br>');


$dsn = 'pgsql:host=ec2-52-1-95-247.compute-1.amazonaws.com;port=5432;dbname=dbc3vqnkgkk489;charset=utf8';
$user = 'jwvivlcaqucweh';
$pass = '8bafc8441900fc7cdff15349aa62d905003ccfe189fa02f9fdcfaa67fbb589f3';

$pdo = new PDO($dsn,$user,$pass,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);
