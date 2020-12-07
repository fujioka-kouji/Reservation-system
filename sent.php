<?php
// セッションの開始
session_start();

$month = htmlspecialchars($_POST['month'], ENT_QUOTES, 'UTF-8');
$day = $_POST['day'];
$timetable = $_POST['timetable'];
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$tel = htmlspecialchars($_POST['tel'], ENT_QUOTES, 'UTF-8');

// 入力値をセッション変数に格納
$_SESSION['month'] = $month;
$_SESSION['day'] = $day;
$_SESSION['timetable'] = $timetable;
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['tel'] = $tel;

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Innovation for the future.inc</title>
  <link rel="stylesheet" type="text/css" href="sent.css">
</head>
<body>
  <div class="header">
    <div class="header-left">BarBar</div>
    <div class="header-right">
      <ul>
        <li><a href="calender_only.php">カレンダーページへ</a></li>
        <li>営業時間　9:00～18:00</li>
        <li>定休日：毎週月曜</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">ご入力内容の確認</div>
      <form action="submit.php" method="post">

        <div class="form-item">■ ご予約日時</div>
        <div class="form-ans">
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

      <div class="form-item">■ お名前</div>
      <div class="form-ans">
      <?php
        if(isset($_POST["name"])){
          $name = $_POST["name"];
          echo $name."　様";
        }
      ?>
      </div>


      <div class="form-item">■ 電話番号</div>
      <div class="form-ans">
      <?php
        if(isset($_POST["tel"])){
          $name = $_POST["tel"];
          echo $name;
        }
      ?>
    </div>
      <div class="form-item">■ メールアドレス</div>
      <div class="form-ans">
      <?php
        if(isset($_POST["email"])){
          $name = $_POST["email"];
          echo $name;
        }
      ?>
    </div>

    </div>
    <div class="for">
    <input id="send" type="submit" value="登録">
    </div>
  </form>
  </div>

  <div class="footer">
    <div class="footer-logo">BarBar</div>
    <div class="footer-right">
      <ul>
        <li><a href="calender_only.php">カレンダーページへ戻る</a></li>
        <li>営業時間　9:00～18:00</li>
        <li>定休日：毎週月曜</li>
      </ul>
    </div>
      <div class="footer-list">
          <ul>
            <li>電話：06-6436-××××</li>
            <li>住所：尼崎市武庫之荘　　</li>
          </ul>
      </div>
  </div>
</body>
</html>
