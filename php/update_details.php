<?php

  $update_unm = $_REQUEST['update_num'];
  $update_tit = addslashes($_REQUEST['update_tit']);
  $update_con = addslashes($_REQUEST['update_con']);
  $update_con = nl2br($_REQUEST['update_con']);
  $update_tit = nl2br($_REQUEST['update_tit']);

  // echo $update_tit, $update_unm, $update_con;

  include $_SERVER['DOCUMENT_ROOT']."/connect/db_conn.php";
  $sql = "UPDATE sp_table SET SP_tit = '$update_tit', SP_con = '$update_con' WHERE SP_idx = $update_unm";

  mysqli_query($dbConn, $sql);

  $sql1 = "SELECT * FROM sp_table ORDER BY SP_idx DESC";

  $update_result = mysqli_query($dbConn, $sql1);

  $arr = array();

  while($update_row = mysqli_fetch_array($update_result)){
    array_push($arr, array(
      'sp_idx' => $update_row['SP_idx'],
      'sp_cate' => $update_row['SP_cate'],
      'sp_tit' => $update_row['SP_tit'],
      'sp_con' => $update_row['SP_con'],
      'sp_reg' => $update_row['SP_reg']
    ));
  };

  // var_dump($arr);
  file_put_contents($_SERVER["DOCUMENT_ROOT"].'/schedule/data/sp_table.json', json_encode($arr, JSON_UNESCAPED_UNICODE));

  echo "
    <script>
      alert('수정이 완료되었습니다.');
      location.href = '/schedule/pages/sp_detail_view.php?pageNum=$update_unm';
    </script>
  
  ";

?>