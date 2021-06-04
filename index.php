<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>

  <div class="wrapper">
    <!-- Main Dashboard Frame -->
    <div class="dashboard">

      <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/header.php";
      ?>

      

      <section class="graph-ui">
        <div class="intro">
          <div class="slide-box">
            <h2>Database Project Process</h2>
            <p>데이터베이스 테이블 설계 완료<br>테이블 UI 디자인 완료</p>
            <a href="#">More Details</a>
            <i class="fa fa-database"></i>
          </div>
          <div class="slide-box">
            <h2>Database Project Process</h2>
            <p>API 테이블 설계 완료<br>테이블 UI 디자인 완료</p>
            <a href="#">More Details</a>
            <i class="fa fa-database"></i>
          </div>
          <div class="slide-box">
            <h2>Database Project Process</h2>
            <p>리뉴얼 테이블 설계 완료<br>테이블 UI 디자인 완료</p>
            <a href="#">More Details</a>
            <i class="fa fa-database"></i>
          </div>
          <div class="slide-box">
            <h2>Database Project Process</h2>
            <p>기획 테이블 설계 완료<br>테이블 UI 디자인 완료</p>
            <a href="#">More Details</a>
            <i class="fa fa-database"></i>
          </div>
        </div>
        <div class="each-pofol">
          <div class="each-title">
            <h3>Each Portfolio Process Rate</h3>
          </div>
          <div class="each-graph">
            <div class="db-pofol">
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
            </div>
          </div>
        </div>
        <div class="total-pofol">
          <div class="total-chart">
            <span class="chart" data-percent="15">
              <span class="percent"></span>
              <!-- <h3>Total Process Rate</h3> -->
            </span>
          </div>
          <div class="total-txt">
            <h3>Total Process Rate</h3>
            <p>Your process rate is very low...<br> Plz Hurry Up!!</p>
            <button>Update Rate</button>
          </div>
        </div>
      </section>

      <section class="table-ui">
        <div class="new-update">
          <div class="tit-box">
            <p>Recent Update</p>
            <a href="#">More</a>
          </div>
          <ul class="con-details">
            <li>
              <i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완료</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
            <li>
              <i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완료</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
            <li>
              <i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완료</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
          </ul>
        </div>
        <div class="each-project">
          <div class="each-btns">
            <button class="active">Database</button>
            <button>API</button>
            <button>Renewal</button>
            <button>Planning</button>
          </div>
          <ul class="con-details">
            <li>
              <i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완료</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
            <li>
              <i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완료</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
            <li>
              <i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완료</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
          </ul>
        </div>
      </section>

    </div>
    <!--End of Main Dashboard Frame -->
  </div>

  <!-- Jquery Framework Load -->
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <!-- Plugins Load -->
  <script src="/schedule/lib/js/lightslider.js"></script>
  <script src="/schedule/lib/js/easypiechart.js"></script>
  <!-- Vanilla Js Code Load -->
  <script src="/schedule/js/index.js"></script>
  <!-- jQuery Code Load -->
  <script src="/schedule/js/jquery.index.js"></script>

</body>
</html>