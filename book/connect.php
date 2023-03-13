<?php
try {
  //ERRMODEでエラーを補足する
  $user = 'root';
  $password = 'itsuki0419';

  $opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // MySQLからのエラーを取得する
    PDO::ATTR_EMULATE_PREPARES => false,
    // セキュリティ的な意味
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    //マルチクエリを不可｡セキュリティ的な目的
  ];
  $dbh = new PDO('mysql:host=localhost;dbname=sample_db', $user, $password, $opt);
  // var_dump($dbh);  
  // 何事もなければここで終わる
} catch (PDOException $e) {
  // キャッチしたエラーがあればここに来る
  echo " エラー!: " . $e->getMessage() . "<br>";
  exit;
}


