<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <title>Schedule Insert</title>
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

  <script defer>
    const hostname = window.location.href;
    console.log(hostname);
    if (hostname == 'http://localhost/schedule/pages/sp_detail_form.php') {
      window.location.replace('http://localhost/schedule/pages/sp_detail_form.php?key=all');
    } 
  </script>

</head>
<body>

  <div class="wrapper">
    <!-- Main Dashboard Frame -->
    <div class="dashboard">

      <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/header.php";
      ?>

      <section class="graph-ui detail">
        
        <?php
          include $_SERVER['DOCUMENT_ROOT']."/schedule/include/total-pofol.php";
        ?>
        <div class="each-pofol">

          <div class="each-graph">

          </div>
        </div>

        <div class="detail-board">
          <div class="board-btns">
            <a href="?key=all" class="active">All</a>
            <a href="?key=database">Database</a>
            <a href="?key=thermometer-half">API</a>
            <a href="?key=clone">Renewal</a>
            <a href="?key=bar-chart-o">Plannning</a>
          </div>

          <div class="board-table">
            <ul>
              <li class="board-title">
                <span>번호</span>
                <span>분류</span>
                <span>제목</span>
                <span>등록일</span>
                <span>삭제</span>
              </li>

              <?php
                $tabs_btn = $_GET['key'];
                // echo $tabs_btn;
                include $_SERVER["DOCUMENT_ROOT"].'/schedule/include/tabs/all.php';
              ?>
                    
            </ul>
          </div>
          <!-- End of board-table -->


          <div class="board-table-btns">
            <!-- <form action="#" class="search-box">
              <select>
                <option value="">아이디</option>
                <option value="">제목</option>
              </select>
              <input type="text">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form> -->
            <button type="button" class="more-btn">더보기</button>
          </div>
        </div>


      </section>

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

  <script>
    $(function(){
      //더보기 버튼 기능
      $(".board-contents").hide();
      $(".board-contents").slice(0, 5).show();

      $(".more-btn").click(function(){
        // console.log($(".board-contents:hidden").length);
        $(".board-contents:hidden").slice(0,5).show();
      });

      //테이블 탭 활성화 기능
      // $(".detail-board a").click(function(){
      //   const tabIdx = $(this).index();
      //   // alert(tabIdx);
      //   $(".detail-board a").removeClass('active');
      //   tabIdx.addClass('active');
      // });

    });
  </script>
  <script>
    const pathName = window.location.href;
    const tabBtns = document.querySelectorAll('.board-btns a');
    const tabElements = ['all', 'database', 'thermometer-half', 'clone', 'bar-chart-o'];
    // console.log(tabBtns);

    for(let i = 0; i < tabBtns.length; i++){
      tabBtns[i].classList.remove('active');
      if(pathName.includes(tabElements[i])){
        tabBtns[i].classList.add('active');
      };
    };


    // tabBtns.forEach(btn => {
    //   btn.classList.remove('active');
    // });

    // if(pathName.includes('all')){
    //   tabBtns[0].classList.add('active');
    // } else if(pathName.includes('database')){
    //   tabBtns[1].classList.add('active');
    // } else if(pathName.includes('api')){
    //   tabBtns[2].classList.add('active');
    // } else if(pathName.includes('renewal')){
    //   tabBtns[3].classList.add('active');
    // } else if(pathName.includes('planning')){
    //   tabBtns[3].classList.add('active');
    // };





  </script>


</body>
</html>