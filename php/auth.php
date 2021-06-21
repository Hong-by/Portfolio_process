<?php

$auth_code = $_POST['auth_code'];

// echo $auth_code;

include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//db 접속정보 로드
$sql = "SELECT * FROM auth WHERE auth = '$auth_code'";

$auth_result = mysqli_query($dbConn, $sql);
$auth_match = mysqli_num_rows($auth_result);

// var_dump($auth_match);

if(!$auth_match){
  echo "
    <script>
      alert('인증코드가 틀립니다!');
      history.go(-1);
    </script>
  ";
} else {
  $auth_row = mysqli_fetch_array($auth_result);

  session_start();
  $_SESSION['usercode'] = $auth_row['auth'];

  echo "
    <script>
      location.href = '/schedule/index.php';
    </script>
  ";
}

?>