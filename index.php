<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <title>Portfolio Process</title>

  <!-- Favicon link -->
  <link rel="shortcut icon" href="/schedule/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/schedule/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/schedule/images/favicon.ico">

  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <!-- Google Font Link -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Reset CSS Link -->
  <link rel="stylesheet" href="/schedule/CSS/reset.css">

  <!-- Plugin CSS Link -->
  <link rel="stylesheet" href="/schedule/lib/css/lightslider.css">
  <link rel="stylesheet" href="/schedule/lib/css/piechart.css">

  <!-- Main CSS Link -->
  <link rel="stylesheet" href="/schedule/CSS/style.css">


  <!-- Animation CSS Link -->
  <link rel="stylesheet" href="/schedule/CSS/animation.css">

  <!-- Media Query CSS Link -->
  <link rel="stylesheet" href="/schedule/CSS/media.css">

  <!-- <script defer>
    const hostname = window.location.href;
    console.log(hostname);
    if (hostname == 'http://hby033.dothome.co.kr/schedule/') {
      window.location.replace('http://hby033.dothome.co.kr/schedule/index.php?key=database');
    }
  </script> -->

</head>
<body>

  <div class="wrapper">
    <!-- Main Dashboard Frame -->
    <div class="dashboard">

      <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/header.php";

        include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//db 접속정보 로드

      ?>

      

      <section class="graph-ui">
        <div class="intro">
          <div class="slide-box">
            <?php
              $sql1 = "SELECT * FROM sp_table WHERE SP_cate = 'database' ORDER BY SP_idx DESC LIMIT 1";
              $sl_result = mysqli_query($dbConn, $sql1);
              $sl_result_row = mysqli_fetch_array($sl_result);
              $sl_idx = $sl_result_row['SP_idx'];
              $sl_con = $sl_result_row['SP_con'];
              $sl_cate = $sl_result_row['SP_cate'];
            ?>
            <h2>Database Project Process</h2>
            <p><?=$sl_con?></p>
            <a href="/schedule/pages/sp_detail_view.php?pageNum=<?=$sl_idx?>">More Details</a>
            <i class="fa fa-<?=$sl_cate?>"></i>
          </div>
          <div class="slide-box">
          <?php
              $sql2 = "SELECT * FROM sp_table WHERE SP_cate = 'thermometer-half' ORDER BY SP_idx DESC LIMIT 1";
              $sl_result2 = mysqli_query($dbConn, $sql2);
              $sl_result_row2 = mysqli_fetch_array($sl_result2);
              $sl_idx2 = $sl_result_row2['SP_idx'];
              $sl_con2 = $sl_result_row2['SP_con'];
              $sl_cate2 = $sl_result_row2['SP_cate'];
            ?>
            <h2>API Project Process</h2>
            <p><?=$sl_con2?></p>
            <a href="/schedule/pages/sp_detail_view.php?pageNum=<?=$sl_idx2?>">More Details</a>
            <i class="fa fa-<?=$sl_cate2?>"></i>
          </div>
          <div class="slide-box">
          <?php
              $sql3 = "SELECT * FROM sp_table WHERE SP_cate = 'clone' ORDER BY SP_idx DESC LIMIT 1";
              $sl_result3 = mysqli_query($dbConn, $sql3);
              $sl_result_row3 = mysqli_fetch_array($sl_result3);
              $sl_idx3 = $sl_result_row3['SP_idx'];
              $sl_con3 = $sl_result_row3['SP_con'];
              $sl_cate3 = $sl_result_row3['SP_cate'];
            ?>
            <h2>RENEWAL Project Process</h2>
            <p><?=$sl_con3?></p>
            <a href="/schedule/pages/sp_detail_view.php?pageNum=<?=$sl_idx3?>">More Details</a>
            <i class="fa fa-<?=$sl_cate3?>"></i>
          </div>
          <div class="slide-box">
          <?php
              $sql4 = "SELECT * FROM sp_table WHERE SP_cate = 'bar-chart-o' ORDER BY SP_idx DESC LIMIT 1";
              $sl_result4 = mysqli_query($dbConn, $sql4);
              $sl_result_row4 = mysqli_fetch_array($sl_result4);
              $sl_idx4 = $sl_result_row4['SP_idx'];
              $sl_con4 = $sl_result_row4['SP_con'];
              $sl_cate4 = $sl_result_row4['SP_cate'];
            ?>
            <h2>Database Project Process</h2>
            <p><?=$sl_con4?></p>
            <a href="/schedule/pages/sp_detail_view.php?pageNum=<?=$sl_idx4?>">More Details</a>
            <i class="fa fa-<?=$sl_cate4?>"></i>
          </div>
        </div>
        <div class="each-pofol">
          <div class="each-title">
            <h3>Each Portfolio Process Rate</h3>
          </div>
          <div class="each-graph">
            <!--<div class="db-pofol">
              <span class="chart" data-percent="86">
                <span class="percent"></span>
              </span>
              <b>DB Project</b>
              <i class="fa fa-database"></i>
            </div>
            <div class="api-pofol">
              <span class="chart" data-percent="60">
                <span class="percent"></span>
              </span>
              <b>API Project</b>
              <i class="fa fa-thermometer-half"></i>
            </div>
            <div class="renewal-pofol">
              <span class="chart" data-percent="40">
                <span class="percent"></span>
              </span>
              <b>Renewal Project</b>
              <i class="fa fa-clone"></i>
            </div>
            <div class="planning-pofol">
              <span class="chart" data-percent="15">
                <span class="percent"></span>
              </span>
              <b>Planning Project</b>
              <i class="fa fa-bar-chart-o"></i>
            </div> -->
          </div>
        </div>

        <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/total-pofol.php";
        ?>

      </section>

      <!-- Table Contents on Right side -->
      <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/table-ui.php";
      ?>

    </div>
    <!--End of Main Dashboard Frame -->
    </div>

    <!-- 2. 모달 박스 UI 제작 => style.css 160번째 줄  -->
    <?php
      include $_SERVER['DOCUMENT_ROOT']."/schedule/include/modal.php";
    ?>
  </div>

  <!-- Jquery Framework Load -->
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <!-- Plugins Load -->
  <script src="/schedule/lib/js/lightslider.js"></script>
  <script src="/schedule/lib/js/jquery.easypiechart.min.js"></script>
  <!-- Vanilla Js Code Load -->
  <script src="/schedule/js/index.js"></script>
 <!-- jQuery Code Load -->
  <script src="/schedule/js/jquery.index.js"></script>
  <script src="/schedule/js/modalAjax.js"></script>
  <script src="/schedule/js/total_avg.js"></script>

</body>
</html>