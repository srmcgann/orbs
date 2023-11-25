<?php 
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  ini_set('upload_max_filesize', '100M');
  ini_set('upload_tmp_dir', '	/storage/ssd5/596/21269596/public_html/e/audio');
  error_reporting(E_ALL);
  //ini_set('upload_max_filesize', 100000000);
  //ini_set('file_uploads', 1000);
  ini_set('max_input_time', 0);
  ini_set('memory_limit', -1);
  ini_set('max_execution_time', "600");
  ini_set('post_max_size', 100000000);

  $req = ltrim($_SERVER['REQUEST_URI'],'/');
  $_GET['i'] = '';
  if(strlen($req) && !file_exists($req)){
    $_GET['i'] = $req;
  }
  if(strpos('?i=',$_GET['i'])!=false){
    $_GET['i'] = explode('?i=',$_GET['i'])[1];
  }
  //$db_user  = 'id21269596_user';
  //$db_user  = 'id21284549_user';
  //$db_user  = 'id21257390_user';
  //$db_user  = 'id21552617_user';
  $db_user  = 'id21553412_user';
  $db_pass  = 'Chrome57253!*';
  $db_host  = 'localhost';
  //$db       = "id21269596_videodemos";
  //$db       = "id21284549_videodemos2";
  //$db       = "id21257390_default";
  //$db       = "id21552617_orbs2";
  $db       = "id21553412_orbs3";
  $port     = '3306';
  $link     = mysqli_connect($db_host,$db_user,$db_pass,$db,$port);
  $baseURL  = "http://efefx.cantelope.org/e";
  

  $maxResultsPerPage = 4;
  $baseAssetsURL = 'http://efefx.cantelope.org/e/audio';
  $baseFullURL= $baseURL;
  $page = 0;
?>


