
<?php

session_start();
if(isset($_SESSION['usercode'])){
  $authcode = $_SESSION['usercode'];
} else {
  echo "
    <script>
      location.href = 'http://localhost/schedule/pages/sp_auth.php';
    </script>
  ";
}

?>
<header>
  <h2><a href="/schedule/index.php"><i class="custom-font"></i></a></h2>
  <ul class="gnb">
    <li class="active">
      <a href="/schedule/index.php"><i class="fa fa-trello"></i></a>
      <span class="nav-top"></span>
      <span class="nav-middle"></span>
      <span class="nav-effect"></span>
      <span class="nav-bottom"></span>
    </li>
    <li>
      <a href="/schedule/pages/sp_insert_form.php"><i class="fa fa-pencil"></i></a>
      <span class="nav-top"></span>
      <span class="nav-middle"></span>
      <span class="nav-effect"></span>
      <span class="nav-bottom"></span>
    </li>
    <li>
      <a href="/schedule/pages/sp_detail_form.php?key=all"><i class="fa fa-search"></i></a>
      <span class="nav-top"></span>
      <span class="nav-middle"></span>
      <span class="nav-effect"></span>
      <span class="nav-bottom"></span>
    </li>
  </ul>
  <a href="/schedule/php/sign_out.php" class="sign-out"><i class="fa fa-sign-out"></i></a>

  <div class="mobile-menu">
    <span></span>
    <span></span>
  </div>
  <ul class="mobile-menu-items">
    <li><a href="/schedule/index.php"><i class="fa fa-trello"></i></a></li>
    <li><a href="/schedule/pages/sp_insert_form.php"><i class="fa fa-pencil"></i></a></li>
    <li><a href="/schedule/pages/sp_detail_form.php?key=all"><i class="fa fa-search"></i></a></li>
    <li><a href="/schedule/php/sign_out.php"><i class="fa fa-sign-out"></i></a></li>
  </ul>
</header>

<script>
  const headerPath = window.location.href;
  const headerTab = document.querySelectorAll('li');
  const headerEl = ['index', 'insert', 'detail'];
  console.log(headerTab);

  for(let i = 0; i < headerTab.length; i++){
    headerTab[i].classList.remove('active');
      if(headerPath.includes(headerEl[i])){
        headerTab[i].classList.add('active');
      };
    };



</script>