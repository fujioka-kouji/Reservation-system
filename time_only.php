<?php
// セッションの開始
session_start();

$month = htmlspecialchars($_POST['month'], ENT_QUOTES, 'UTF-8');
$day = $_POST['day'];

// 入力値をセッション変数に格納
$_SESSION['month'] = $month;
$_SESSION['day'] = $day;
?>

<?php
$dsn = 'mysql:dbname=reserve;host=localhost';
$user = 'fujioka1';
$password = 'fjok10818';

$dbh = new PDO($dsn, $user, $password);
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Innovation for the future.inc</title>
    <link rel="stylesheet" href="time_only.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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
        <div class="form-title">ご予約申し込みフォーム</div>
    <form name ="contactForm" method="post" action="name_email.php">

      <div class="time_container">
        <h2>ご希望日</h2>
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
      </div>
      <input type="hidden" name="month" value="
      <?php
        if(isset($_POST["month"])){
          $name = $_POST["month"];
          echo $name;
        }
      ?>">
      <input type="text" name="day" value="
      <?php
        if(isset($_POST["day"])){
          $name = $_POST["day"];
          echo $name;
        }
      ?>">



        <fieldset>
        <h2>ご希望の時間</h2>
         <input id="time9" name="timetable" type="radio" value="9" class="time" disabled required/>
          <label id="times9"  class="time" for="time9">
             9:00～
            <?php
            $sql = 'select count(*) as cnt from reserveday where month = ? AND day = ? and timetable = ?';
            $stmt = $dbh->prepare($sql);
            $stmt->execute(array($month, $day, 9));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $cntnmb = (int) $result['cnt'];
            ?>

            <script>
            var cntnmb = '<?php echo $cntnmb ; ?>';
            if( cntnmb > 0 ){
              $('#times9').text(' 9:00～予約済み');
            }
            if( cntnmb == 0 ){
              $('#time9').prop('disabled',false);
            }
            if( cntnmb > 0 ){
              $('#times9').css('opacity',0.5 );
            }
            </script>
          </label><br/>

         <input id="time10" name="timetable" type="radio" value="10" class="time" disabled required/>
         <label id="times10" class="time" for="time10">
          10:00～
          <?php
          $sql = 'select count(*) as cnt from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          $stmt->execute(array($month, $day, 10));
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          $cntnmb = (int) $result['cnt'];
          ?>

          <script>
          var cntnmb = '<?php echo $cntnmb ; ?>';
          if( cntnmb > 0 ){
            $('#times10').text('10:00～予約済み');
          }
          if( cntnmb == 0 ){
            $('#time10').prop('disabled',false);
          }
          if( cntnmb > 0 ){
            $('#times10').css('opacity',0.5 );
          }
          </script>
         </label><br/>

         <input id="time11" name="timetable" type="radio" value="11" class="timet" disabled required/>
         <label id="times11" class="time" for="time11">
          11:00～
          <?php
          $sql = 'select count(*) as cnt from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          $stmt->execute(array($month, $day, 11));
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          $cntnmb = (int) $result['cnt'];
          ?>

          <script>
          var cntnmb = '<?php echo $cntnmb ; ?>';
          if( cntnmb > 0 ){
            $('#times11').text('11:00～予約済み');
          }
          if( cntnmb == 0 ){
            $('#time11').prop('disabled',false);
          }
          if( cntnmb > 0 ){
            $('#times11').css('opacity',0.5 );
          }
          </script>
         </label><br/>

         <input id="time13" name="timetable" type="radio" value="13" class="time" disabled required/>
         <label id="times13" class="time" for="time13">
          13:00～
          <?php
          $sql = 'select count(*) as cnt from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          $stmt->execute(array($month, $day, 13));
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          $cntnmb = (int) $result['cnt'];
          ?>

          <script>
          var cntnmb = '<?php echo $cntnmb ; ?>';
          if( cntnmb > 0 ){
            $('#times13').text('13:00～予約済み');
          }
          if( cntnmb == 0 ){
            $('#time13').prop('disabled',false);
          }
          if( cntnmb > 0 ){
            $('#times13').css('opacity',0.5 );
          }
          </script>
         </label><br/>

         <input id="time14" name="timetable" type="radio" value="14" class="time" disabled required/>
         <label id="times14" class="time" for="time14">
          14:00～
          <?php
          $sql = 'select count(*) as cnt from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          $stmt->execute(array($month, $day, 14));
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          $cntnmb = (int) $result['cnt'];
          ?>

          <script>
          var cntnmb = '<?php echo $cntnmb ; ?>';
          if( cntnmb > 0 ){
            $('#times14').text('14:00～予約済み');
          }
          if( cntnmb == 0 ){
            $('#time14').prop('disabled',false);
          }
          if( cntnmb > 0 ){
            $('#times14').css('opacity',0.5 );
          }
          </script>
         </label><br/>

         <input id="time15" name="timetable" type="radio" value="15" class="time" disabled required/>
         <label id="times15" class="time" for="time15">
          15:00～
          <?php
          $sql = 'select count(*) as cnt from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          $stmt->execute(array($month, $day, 15));
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          $cntnmb = (int) $result['cnt'];
          ?>

          <script>
          var cntnmb = '<?php echo $cntnmb ; ?>';
          if( cntnmb > 0 ){
            $('#times15').text('15:00～予約済み');
          }
          if( cntnmb == 0 ){
            $('#time15').prop('disabled',false);
          }
          if( cntnmb > 0 ){
            $('#times15').css('opacity',0.5 );
          }
          </script>
         </label><br/>

         <input id="time16" name="timetable" type="radio" value="16" class="time" disabled required/>
         <label id="times16" class="time" for="time16">
          16:00～
          <?php
          $sql = 'select count(*) as cnt from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          $stmt->execute(array($month, $day, 16));
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          $cntnmb = (int) $result['cnt'];
          ?>

          <script>
          var cntnmb = '<?php echo $cntnmb ; ?>';
          if( cntnmb > 0 ){
            $('#times16').text('16:00～予約済み');
          }
          if( cntnmb == 0 ){
            $('#time16').prop('disabled',false);
          }
          if( cntnmb > 0 ){
            $('#times16').css('opacity',0.5 );
          }
          </script>
         </label><br/>

         <input id="time17" name="timetable" type="radio" value="17" class="time" disabled required/>
         <label id="times17" class="time" for="time17">
          17:00～
          <?php
          $sql = 'select count(*) as cnt from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          $stmt->execute(array($month, $day, 17));
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          $cntnmb = (int) $result['cnt'];
          ?>

          <script>
          var cntnmb = '<?php echo $cntnmb ; ?>';
          if( cntnmb > 0 ){
            $('#times17').text('17:00～予約済み');
          }
          if( cntnmb == 0 ){
            $('#time17').prop('disabled',false);
          }
          if( cntnmb > 0 ){
            $('#times17').css('opacity',0.5 );
          }
          </script>
         </label><br/>

      </fieldset>

    </div>
  </div>
    <div class="for">
    <a class="return_C" href="calender_only.php">カレンダーに戻る</a>
    <input type="submit" value="次へ">
    </div>
    </form>
  </div>
</div>

  <div class="footer">
    <div class="footer-logo">BarBar</div>
    <div class="footer-right">
      <ul>
        <li><a href="index.html">TOPページへ</a></li>
        <li>営業時間　9:00～18:00</li>
        <li>定休日：毎週月曜 第2・第4火曜</li>
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
