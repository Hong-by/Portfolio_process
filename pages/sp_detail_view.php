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
          <?php
            $page_num = $_GET['pageNum'];
            // echo $page_num;

            include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//db 접속정보 로드
            $sql = "SELECT * FROM sp_table WHERE SP_idx = $page_num";

            $detail_result = mysqli_query($dbConn, $sql);
            $detail_row = mysqli_fetch_array($detail_result);
            
            $detail_tit = $detail_row['SP_tit'];
            $detail_num = $detail_row['SP_idx'];
            $detail_cate = $detail_row['SP_cate'];
            $detail_con = $detail_row['SP_con'];
            $detail_reg = $detail_row['SP_reg'];

            // echo $detail_num, $detail_cate;

          ?>

        <form action="/schedule/php/update_details.php?abc=1">
          <div class="detail-title">
            <h2><?=$detail_tit?></h2>
            <input type="text" value="<?=$detail_tit?>" class="hidden-tit" name="update_tit">
            <input type="hidden" value="<?=$detail_num?>" name="update_num">
          </div>

          <div class="board-table detail-view">
            <ul>
              <li class="board-title ">
                <span>번호</span>
                <span>분류</span>
                <span>내용</span>
                <span>등록일</span>
              </li>       

              


              <li class="board-contents ">
                <span><?=$detail_num?></span>
                <span><?=$detail_cate?></span>
                <span>
                  <em><?=$detail_con?></em>
                  <textarea class="hidden-con" name="update_con"><?=$detail_con?></textarea>
                </span>
                <span><?=$detail_reg?></span>
              </li>  
            </ul>
          </div>
          <!-- End of board-table -->
          <div class="send-update">
            <button type="submit">수정 입력</button>
          </div>
          </form>

          <div class="detail-btns">
            <button type="button" class="update-btn">수정</button>
          </div>



        </div>


      </section>

    <!--End of Main Dashboard Frame -->
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
      $(".update-btn").click(function(){
        $(this).toggleClass("on");

        if($(this).hasClass("on")){
          $(this).text('수정 취소');
          $(".hidden-tit, .hidden-con, .send-update").show();
          $(".detail-title h2, .detail-view em").hide(); 
        } else {
          $(this).text('수정');
          $(".hidden-tit, .hidden-con, .send-update").hide(); 
          $(".detail-title h2, .detail-view em").show(); 
        }

      });

    });


  </script>

</body>
</html>