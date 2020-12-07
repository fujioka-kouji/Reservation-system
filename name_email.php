<?php
// セッションの開始
session_start();

$month = htmlspecialchars($_POST['month'], ENT_QUOTES, 'UTF-8');
$day = $_POST['day'];
@$timetable = $_POST['timetable'];



// 入力値をセッション変数に格納
$_SESSION['month'] = $month;
$_SESSION['day'] = $day;
$_SESSION['timetable'] = $timetable;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Innovation for the future.inc</title>
    <link rel="stylesheet" href="name_email.css">
  </head>
  <body>
    <div class="header">
      <div class="header-left">BarBar</div>
      <div class="header-right">
        <ul>
          <li><a href="calender_only.php">カレンダーページへ</a></li>
          <li>営業時間　9:00～18:00</li>
          <li>定休日：毎週月曜  第2・第4火曜</li>
        </ul>
      </div>
    </div>

    <div class="main">
      <div class="contact-form">
        <div class="form-title">ご予約申し込みフォーム</div>
         <form method="post" action="sent.php">
           <div class="form-item">ご希望日時</div>
           <div class="monthmessege">
           <?php
             if(isset($_POST["month"])){
               $name = $_POST["month"];
               echo $name."月";
             }
           ?>
           <?php
             if(isset($_POST["day"])){
               $name = $_POST["day"];
               echo $name."日";
             }
           ?>
           <?php
             if(isset($_POST["timetable"])){
               $name = $_POST["timetable"];
               echo $name."時～";
             }
           ?>
         </div>

          <div class="form-item">お名前</div>
           <input type="text" name="name" required>
          <div class="form-item">電話番号</div>
            <input type="text" name="tel" required>
          <div class="form-item">メールアドレス</div>
             <input type="text" name="email" required>
        </div>

<input type="text" name="month" class="hide" value="
<?php
  if(isset($_POST["month"])){
    $name = $_POST["month"];
    echo $name;
  }
?>">
<input type="text" name="day" class="hide" value="
<?php
  if(isset($_POST["day"])){
    $name = $_POST["day"];
    echo $name;
  }
?>">
<input type="text" name="timetable" class="hide" value="
<?php
  if(isset($_POST["timetable"])){
    $name = $_POST["timetable"];
    echo $name;
  }
?>">

    <div class="for">
    <input type="submit" value="確認画面へ">
    </div>
    </form>

</div>

  <div class="footer">
    <div class="footer-logo">BarBar</div>
    <div class="footer-right">
      <ul>
        <li><a href="calender_only.php">カレンダーページへ</a></li>
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
