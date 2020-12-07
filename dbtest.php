<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>MariaDBへの接続テスト</title>
<link rel="stylesheet" href="dbtest.css">
</head>
<body>
<?php
$dsn = 'mysql:dbname=reserve;host=localhost';
$user = 'fujioka1';
$password = 'fjok10818';

$dbh = new PDO($dsn, $user, $password);


$sql = 'select * from reserveday order by  month asc, day asc, timetable asc';
$stmt = $dbh->prepare($sql);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
$rows[] = $row;
}

 ?>

 <div class="header">
   <div class="header-left">管理者ページ</div>
   <div class="header-right">
       <p><a href="management.php">日別リスト</a></p>
   </div>
 </div>

<div class="main">
 <h1>予約状況</h1>
<table border='1'>
<tr>
<th>id</th>
<th>月</th>
<th>日</th>
<th>時～</th>
<th>氏名</th>
<th>email</th>
<th>tel</th>

</tr>

<?php
foreach($rows as $row){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['month']; ?></td>
  <td><?php echo $row['day']; ?></td>
  <td><?php echo $row['timetable']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['tel']; ?></td>
</tr>
<?php
}
?>

</table>
</div>
</body>
</html>
