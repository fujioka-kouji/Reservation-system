<?php

// セッションの開始
session_start();

$month = htmlspecialchars($_SESSION['month'], ENT_QUOTES, 'UTF-8');
$day = $_SESSION['day'];
$timetable = $_SESSION['timetable'];
$name = htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_SESSION['email'], ENT_QUOTES, 'UTF-8');
$tel = htmlspecialchars($_SESSION['tel'], ENT_QUOTES, 'UTF-8');

// 接続設定
$user = 'fujioka1';
$pass = 'fjok10818';

// データベースに接続
$dsn = 'mysql:host=localhost;dbname=reserve;charset=utf8';
$conn = new PDO($dsn, $user, $pass); //「$conn」は、任意のオブジェクト名

// データの追加
$sql = 'INSERT INTO reserveday(month, day, timetable, name, email, tel) VALUES("'.$month.'","'.$day.'","'.$timetable.'","'.$name.'","'.$email.'","'.$tel.'")';
$stmt = $conn -> prepare($sql);
$stmt -> execute();
?>
<?php

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Innovation for the future.inc</title>
  <link rel="stylesheet" type="text/css" href="submit.css">
</head>
<body>
  <div class="header">
    <div class="header-left">BarBar</div>
    <div class="header-right">
      <ul>
        <li><a href="index.html">TOPページへ</a></li>
        <li>営業時間　9:00～18:00</li>
        <li>定休日：毎週月曜  第2・第4火曜</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="thanks">ご予約ありがとうございます。</div>
      <div class="thanks">ご来店をお待ちしております。</div>
      <p>キャンセルの場合は、直接お電話ください。</p>
    </div>
    <div class="image">
      <img class="photo" src="photo/tennai.jpg" >
      <img class="photo" src="photo/tenpo.jpg" >
    </div>
  </div>
</body>
<div class="footer">
  <div class="footer-logo">BarBar</div>
  <div class="footer-right">
    <ul>
      <li><a href="index.html">TOPページへ</a></li>
      <li>営業時間　9:00～18:00</li>
      <li>定休日：毎週月曜  第2・第4火曜</li>
    </ul>
  </div>
    <div class="footer-list">
        <ul>
          <li>電話：06-6436-××××</li>
          <li>住所：尼崎市武庫之荘　　</li>
        </ul>
    </div>
</div>
</html>
