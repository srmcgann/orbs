<?php
  require('db.php');
  $sql = "SELECT * FROM games";
  $res = mysqli_query($link, $sql);
  for($i=0;$i<mysqli_num_rows($res);++$i){
    $row = mysqli_fetch_assoc($res);
    echo json_encode($row) . "\n";
    $ar = json_decode($row['gamedataA']);
    echo key_exists('hm', $ar) . "\n";
  }
?>
