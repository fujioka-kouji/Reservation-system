

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
    <link rel="stylesheet" href="management.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>
    <div class="header">
      <div class="header-left">管理者ページ</div>
      <div class="header-right">
          <p><a href="dbtest.php">ALLリスト</a></p>
      </div>
    </div>

    <div class="main">
      <div class="contact-form">
    <form name ="contactForm" method="post" action="">

      <div class="time_container">
        <h1>日にち指定予約状況</h1>
        <select name="month">
          <option value= 1 selected>1月</optin>
          <option value= 2 >2月</optin>
          <option value= 3 >3月</optin>
          <option value= 4 >4月</optin>
          <option value= 5 >5月</optin>
          <option value= 6 >6月</optin>
          <option value= 7 >7月</optin>
          <option value= 8 >8月</optin>
          <option value= 9 >9月</optin>
          <option value= 10 >10月</optin>
          <option value= 11 >11月</optin>
          <option value= 12 >12月</optin>
        </select>
        <select name="day">
          <option value= 1 selected>1日</optin>
          <option value= 2 >2日</optin>
          <option value= 3 >3日</optin>
          <option value= 4 >4日</optin>
          <option value= 5 >5日</optin>
          <option value= 6 >6日</optin>
          <option value= 7 >7日</optin>
          <option value= 8 >8日</optin>
          <option value= 9 >9日</optin>
          <option value= 10 >10日</optin>
          <option value= 11 >11日</optin>
          <option value= 12 >12日</optin>
            <option value= 13 >13日</optin>
            <option value= 14 >14日</optin>
            <option value= 15 >15日</optin>
            <option value= 16 >16日</optin>
            <option value= 17 >17日</optin>
            <option value= 18 >18日</optin>
            <option value= 19 >19日</optin>
            <option value= 20 >20日</optin>
              <option value= 21 >21日</optin>
              <option value= 22 >22日</optin>
              <option value= 23 >23日</optin>
              <option value= 24 >24日</optin>
              <option value= 25 >25日</optin>
              <option value= 26 >26日</optin>
              <option value= 27 >27日</optin>
              <option value= 28 >28日</optin>
              <option value= 29 >29日</optin>
              <option value= 30 >30日</optin>
              <option value= 31 >31日</optin>

        </select>
        <input type="submit" value="OK">

        <div class="monthmessege">
        <?php
          if(isset($_POST["month"])){
            $month = $_POST["month"];
            echo $month."月";
          }
        ?>
        <?php
          if(isset($_POST["day"])){
            $day = $_POST["day"];
            echo $day."日";
          }
        ?>
      </div>


        <h2>の予約状況</h2>

      <table border='1'>
      <tr>

      <th>時～</th>
      <th>氏名</th>
      <th>tel</th>


      <tr>
        <td>9:00～</td>
        <td>
          <?php
          $sql = 'select name,tel from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          @$stmt->execute(array($month, $day, 9));
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          @$name = $row["name"];
          @$tel = $row["tel"];
          ?>
          <?php
          if(is_null($name)){
          echo "";
        } else {
           echo $name;
         }
           ?></td>
        <td><?php
          if(is_null($tel)){
          echo "";
        } else {
           echo $tel;
         }
           ?></td>
      </tr>
      <tr>
        <td>10:00～</td>
        <td>
          <?php
          $sql = 'select name,tel from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          @$stmt->execute(array($month, $day, 10));
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          @$name = $row["name"];
          @$tel = $row["tel"];
          ?>
          <?php
          if(is_null($name)){
          echo "";
        } else {
           echo $name;
         }
           ?></td>
        <td><?php
          if(is_null($tel)){
          echo "";
        } else {
           echo $tel;
         }
           ?></td>
      </tr>
      <tr>
        <td>11:00～</td>
        <td>
          <?php
          $sql = 'select name,tel from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          @$stmt->execute(array($month, $day, 11));
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          @$name = $row["name"];
          @$tel = $row["tel"];
          ?>
          <?php
          if(is_null($name)){
          echo "";
        } else {
           echo $name;
         }
           ?></td>
        <td><?php
          if(is_null($tel)){
          echo "";
        } else {
           echo $tel;
         }
           ?></td>
      </tr>
      <tr>
        <td>13:00～</td>
        <td>
          <?php
          $sql = 'select name,tel from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          @$stmt->execute(array($month, $day, 13));
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          @$name = $row["name"];
          @$tel = $row["tel"];
          ?>
          <?php
          if(is_null($name)){
          echo "";
        } else {
           echo $name;
         }
           ?></td>
        <td><?php
          if(is_null($tel)){
          echo "";
        } else {
           echo $tel;
         }
           ?></td>
      </tr>
      <tr>
        <td>14:00～</td>
        <td>
          <?php
          $sql = 'select name,tel from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          @$stmt->execute(array($month, $day, 14));
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          @$name = $row["name"];
          @$tel = $row["tel"];
          ?>
          <?php
          if(is_null($name)){
          echo "";
        } else {
           echo $name;
         }
           ?></td>
        <td><?php
          if(is_null($tel)){
          echo "";
        } else {
           echo $tel;
         }
           ?></td>
      </tr>
      <tr>
        <td>15:00～</td>
        <td>
          <?php
          $sql = 'select name,tel from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          @$stmt->execute(array($month, $day, 15));
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          @$name = $row["name"];
          @$tel = $row["tel"];
          ?>
          <?php
          if(is_null($name)){
          echo "";
        } else {
           echo $name;
         }
           ?></td>
        <td><?php
          if(is_null($tel)){
          echo "";
        } else {
           echo $tel;
         }
           ?></td>
      </tr>
      <tr>
        <td>16:00～</td>
        <td>
          <?php
          $sql = 'select name,tel from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          @$stmt->execute(array($month, $day, 16));
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          @$name = $row["name"];
          @$tel = $row["tel"];
          ?>
          <?php
          if(is_null($name)){
          echo "";
        } else {
           echo $name;
         }
           ?></td>
        <td><?php
          if(is_null($tel)){
          echo "";
        } else {
           echo $tel;
         }
           ?></td>
      </tr>
      <tr>
        <td>17:00～</td>
        <td>
          <?php
          $sql = 'select name,tel from reserveday where month = ? AND day = ? and timetable = ?';
          $stmt = $dbh->prepare($sql);
          @$stmt->execute(array($month, $day, 17));
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          @$name = $row["name"];
          @$tel = $row["tel"];
          ?>
          <?php
          if(is_null($name)){
          echo "";
        } else {
           echo $name;
         }
           ?></td>
        <td><?php
          if(is_null($tel)){
          echo "";
        } else {
           echo $tel;
         }
           ?></td>
      </tr>


    </table>

    </div>
  </div>

    </form>
  </div>
</div>
