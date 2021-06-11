<meta charset="UTF-8">

<?php

  $del_idx = $_GET['del_idx'];
  // echo $del_idx;

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//db 접속정보 로드
  $sql = "DELETE FROM sp_table WHERE SP_idx = $del_idx";

  mysqli_query($dbConn, $sql);

  echo "
    <script>
      alert('글이 삭제되었습니다.');
      location.href = '/schedule/pages/sp_detail_form.php';
    </script>
  
  
  "
?>