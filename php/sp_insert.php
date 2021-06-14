<meta charset="UTF-8">

<?php

  $spInputTit = addslashes($_POST['spInputTit']);
  $spInputCon = addslashes($_POST['spInputCon']);
  //addslashes() : 입력 문자열 중 특수 문자가 입력될 경우 앞에 자동으로 '\'를 추가해주는 함수

  $spInputCate = $_POST['spInputCate'];
  $regDate = date("Y-m-d");

  //echo $spInputTit, $spInputCon, $spInputCate, $regDate;

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//db 접속정보 로드
  $sql = "INSERT INTO sp_table(
    SP_cate,
    SP_tit,
    SP_con,
    SP_reg
  ) VALUES(
    '{$spInputCate}',
    '{$spInputTit}',
    '{$spInputCon}',
    '{$regDate}'
  )";

  mysqli_query($dbConn, $sql);

  //-----------------------------
  $sql1 = "SELECT * FROM sp_table ORDER BY SP_idx DESC";

  $sp_result = mysqli_query($dbConn, $sql1);

  $arr = array();

  while($sp_row = mysqli_fetch_array($sp_result)){
    array_push($arr, array(
      'sp_idx' => $sp_row['SP_idx'],
      'sp_cate' => $sp_row['SP_cate'],
      'sp_tit' => $sp_row['SP_tit'],
      'sp_con' => $sp_row['SP_con'],
      'sp_reg' => $sp_row['SP_reg']
    ));
  };

  // var_dump($arr);
  file_put_contents($_SERVER["DOCUMENT_ROOT"].'/schedule/data/sp_table.json', json_encode($arr, JSON_UNESCAPED_UNICODE));

  //-------------------------------

  echo "
    <script>
      alert('작성이 완료되었습니다!');
      location.href='/schedule/pages/sp_insert_form.php';
    </script>
  ";


?>