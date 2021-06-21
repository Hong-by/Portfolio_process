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

  echo "
    <script>
      alert('수정이 완료되었습니다.');
      location.href = '/schedule/pages/sp_detail_view.php?pageNum=$update_unm';
    </script>
  
  ";

?>