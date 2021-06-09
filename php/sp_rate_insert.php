<?php

  $sp_idx = 1;
  $sp_db = $_GET['db_pro'];
  $sp_api = $_GET['api_pro'];
  $sp_ren = $_GET['ren_pro'];
  $sp_pl = $_GET['pl_pro'];

  // echo $sp_idx, $sp_db, $sp_api, $sp_ren, $sp_pl;


  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//db 접속정보 로드
  $sql = "UPDATE sp_rate SET RATE_db = $sp_db, RATE_api = $sp_api, RATE_ren = $sp_ren, RATE_pla = $sp_pl WHERE RATE_idx = $sp_idx";

  mysqli_query($dbConn, $sql);

  $sql1 = "SELECT * FROM sp_rate WHERE RATE_idx = $sp_idx";

  $rate_result = mysqli_query($dbConn, $sql1);

  $arr = array();

  while($rate_row = mysqli_fetch_array($rate_result)){
    array_push($arr, array(
      'db_rate' => $rate_row['RATE_db'],
      'api_rate' => $rate_row['RATE_api'],
      'ren_rate' => $rate_row['RATE_ren'],
      'pla_rate' => $rate_row['RATE_pla']
    ));
  };

  // var_dump($arr);
  file_put_contents($_SERVER["DOCUMENT_ROOT"].'/schedule/data/sp_rate.json', json_encode($arr));

  echo "
    <script>
      alert ('수정이 완료되었습니다!');
      location.href='/schedule/index.php?key=database';
    </script>
  "

?>