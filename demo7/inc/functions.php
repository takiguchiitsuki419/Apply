<?php

function db_open() :PDO {
    $user = "root";
    $password = "itsuki0419"; //P172 で生成したパスワードを入力
    $host ='localhost';
    $dbname = 'chair';
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $password, $opt);
    return $dbh;
}
