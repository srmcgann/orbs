<?php
  //error_reporting(0);
  ini_set('upload_max_filesize', 10000000000);
  ini_set('file_uploads', 1);
  ini_set('max_input_time', 0);
  ini_set('memory_limit', -1);
  ini_set('max_execution_time', "600");
  ini_set('post_max_size', 100000000000);

  $req = ltrim($_SERVER['REQUEST_URI'],'/');
  //$db_user  = 'id21269596_user';
  //$db_user  = 'id21284549_user';
  //$db_user  = 'id21257390_user';
  //$db_user  = 'id21552617_user';
  //$db_user  = 'id21553412_user';
  $db_user  = 'id21284549_user';
  $db_pass  = 'Chrome57253!*';
  $db_host  = 'localhost';
  //$db       = "id21269596_videodemos";
  //$db       = "id21284549_videodemos2";
  //$db       = "id21257390_default";
  //$db       = "id21552617_orbs2";
  //$db       = "id21553412_orbs3";
  $db       = "id21284549_videodemos2";
  $port     = '3306';
  $link     = mysqli_connect($db_host,$db_user,$db_pass,$db,$port);
  $baseURL  = "http://efefx.cantelope.org/c";
  

  $maxResultsPerPage = 4;
  $demoSandbox='code.cantelope.org/sandbox';
  $baseAssetsURL = 'http://assets.cantelope.org';
  $baseURL = 'efefx.cantelope.org/c';
  $baseFullURL= $baseURL;
?>
