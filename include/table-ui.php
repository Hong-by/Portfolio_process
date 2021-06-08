<section class="table-ui">
        <div class="new-update">
          <div class="tit-box">
            <p>Recent Update</p>
            <a href="#">More</a>
          </div>

          <ul class="con-details">
          <?php
            include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
            $sql = "SELECT * FROM sp_table ORDER BY SP_idx DESC LIMIT 5";
            $ta_result = mysqli_query($dbConn, $sql);

            if(!$ta_result){

          ?>

          <li>
              <p>입력된 일정이 없습니다.</p>
          </li>

          <?php
            } else {
              while($ta_row = mysqli_fetch_array($ta_result)){
                $ta_row_cate = $ta_row['SP_cate'];
                $ta_row_tit = $ta_row['SP_tit'];
                $ta_row_reg = $ta_row['SP_reg'];
          ?>
          <li>
            <i class="fa fa-<?=$ta_row_cate?>"></i>
            <div class="con-txt">
              <p><a href="#"><?=$ta_row_tit?></a></p>
              <em><?=$ta_row_reg?></em>
            </div>
          </li>
          <?php
              };
            };
          ?>
          </ul>
        </div>
        <div class="each-project">
          <div class="each-btns">
            <a href="?key=database" class="active">Database</a>
            <a href="?key=api">API</a>
            <a href="?key=renewal">Renewal</a>
            <a href="?key=planning">Planning</a>
          </div>
          <ul class="con-details">
            <?php
              $tab_path = $_GET['key'];
              // echo $tab_path;
              include $_SERVER["DOCUMENT_ROOT"].'/schedule/include/tabs/'.$tab_path.'.php';
            ?>
          </ul>
        </div>
      </section>