<?php
  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//db 접속정보 로드
  $sql = "SELECT * FROM sp_table ORDER BY SP_idx DESC";
  $board_result = mysqli_query($dbConn, $sql);

  while($board_row = mysqli_fetch_array($board_result)){
    $board_row_idx = $board_row['SP_idx'];
    $board_row_cate = $board_row['SP_cate'];
    $board_row_tit = $board_row['SP_tit'];
    $board_row_reg = $board_row['SP_reg'];

?>

<li class="board-contents">
  <span><?=$board_row_idx?></span>
  <span><?=$board_row_cate?></span>
  <span><a href="#"><?=$board_row_tit?></a></span>
  <span><?=$board_row_reg?></span>
  <span><a href="/schedule/php/sp_delete.php?del_idx=<?=$board_row_idx?>" class="del-btn">삭제</a></span>
</li>

<?php
  }
?>