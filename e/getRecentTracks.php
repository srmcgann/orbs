<?php 
  require('db.php');
  $data = json_decode(file_get_contents('php://input'));
  $overrideMaxResults = mysqli_real_escape_string($link, $data->{'maxResultsPerPage'});
  if($data->{'page'}) $page = mysqli_real_escape_string($link, $data->{'page'});
  if($overrideMaxResults) $maxResultsPerPage = $overrideMaxResults;

  $start = $maxResultsPerPage * $page;

  $sql="SELECT id FROM audiocloudTracks WHERE private = 0";
  $res = mysqli_query($link, $sql);
  $totalRecords = floatval(mysqli_num_rows($res));
  $totalPages = (($totalRecords-1.0) / floor($maxResultsPerPage)) + 1.0;
  
  $sql = 'SELECT * FROM audiocloudTracks WHERE private = 0 ORDER BY date DESC LIMIT ' . $start . ', ' . $maxResultsPerPage;
  $res = mysqli_query($link, $sql);
  $tracks = [];
  for($i = 0; $i < mysqli_num_rows($res); ++$i){
    $tracks[] = mysqli_fetch_assoc($res);
  }
  forEach($tracks as &$track){
    $trackID = $track['id'];
    $sql = 'SELECT * FROM audiocloudComments WHERE trackID = ' . $trackID;
    $res2 = mysqli_query($link, $sql);
    $track['comments'] = [];
    for($j=0;$j<mysqli_num_rows($res2);++$j){
      $track['comments'][] = mysqli_fetch_assoc($res2);
    }
  }
  echo json_encode([$tracks, intval($totalPages), $page]);
?>
