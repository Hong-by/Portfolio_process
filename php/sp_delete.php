<meta charset="UTF-8">

<?php

  $del_idx = $_GET['del_idx'];
  // echo $del_idx;

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//db 접속정보 로드
  $sql = "DELETE FROM sp_table WHERE SP_idx = $del_idx";

  mysqli_query($dbConn, $sql);

  $sql1 = "SELECT * FROM sp_table ORDER BY SP_idx DESC";

  $del_result = mysqli_query($dbConn, $sql1);

  $arr = array();

  while($del_row = mysqli_fetch_array($del_result)){
    array_push($arr, array(
      'sp_idx' => $del_row['SP_idx'],
      'sp_cate' => $del_row['SP_cate'],
      'sp_tit' => $del_row['SP_tit'],
      'sp_con' => $del_row['SP_con'],
      'sp_reg' => $del_row['SP_reg']
    ));
  };

  // var_dump($arr);
  file_put_contents($_SERVER["DOCUMENT_ROOT"].'/schedule/data/sp_table.json', json_encode($arr, JSON_UNESCAPED_UNICODE));

  echo "
    <script>
      alert('글이 삭제되었습니다.');
      location.href = '/schedule/pages/sp_detail_form.php';
    </script>
  
  
  "
?>