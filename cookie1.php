<?php
setcookie('value', 100);
?>

<html>

<body>
  <?php
  $cookie = $_COOKIE['volue'];
  echo "クッキーの値は" .$cookie ."です<br />";
  ?>
  <a href="cookie2.php">ページ２へ</a>
<body>

<html>