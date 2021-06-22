
<?php

  session_start();
  unset($_SESSION['usercode']);

  echo"
    <script>
      location.href='/schedule/index.php'
    </script>
  
  "



?>