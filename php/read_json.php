<?php

  $url = $_SERVER["DOCUMENT_ROOT"]."/schedule/data/sp_rate.json";

  // echo $url;

  $json_string = file_get_contents($url);
  echo $json_string;

?>