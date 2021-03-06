<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <title>Schedule Insert</title>

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

        <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/total-pofol.php";
        ?>

        <div class="input-box">
          <div class="title-box">
            <h3>Today's schedule</h3>
          </div>
          <form action="/schedule/php/sp_insert.php" method="post" name="spInputForm">
            <div class="input-tit">
              <input type="text" placeholder="?????? ????????? ????????? ?????????." name="spInputTit">
              <select name="spInputCate">
                <option value="database">DB Project</option>
                <option value="thermometer-half">API Project</option>
                <option value="clone">Renewal Project</option>
                <option value="bar-chart-o">Planning Project</option>
              </select>
            </div>
            <div class="input-con">
              <textarea placeholder="?????? ????????? ????????? ?????????." name="spInputCon"></textarea>
            </div>
          </form>

          <div class="btns">
            <button type="button" onclick="spInsert()">?????? ?????? ??????</button>
          </div>
          <script>
                
            document.addEventListener('keydown', function(e){
              const keyCode = e.keyCode;
              // console.log(keycode);
              if(keyCode == 13){
                e.preventDefault();
                spInsert();
              }
            });



            function spInsert(){
              if(!document.spInputForm.spInputTit.value){
                alert('?????? ????????? ????????? ?????????.');
                document.spInputForm.spInputTit.focus();
                return;
              }

              if(!document.spInputForm.spInputCon.value){
                alert('?????? ????????? ????????? ?????????.');
                document.spInputForm.spInputCon.focus();
                return;
              }

              document.spInputForm.submit();
            }
          </script>
        </div>

      </section>

      <!-- Table Contents on Right side -->
      <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/table-ui.php";
      ?>

    </div>
    
    <!-- 2. ?????? ?????? UI ?????? => style.css 160?????? ???  -->
    <?php
      include $_SERVER['DOCUMENT_ROOT']."/schedule/include/modal.php";
    ?>
  </div>
    <!-- End of Main Dashboard Frame -->
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