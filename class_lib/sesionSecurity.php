<?php
  session_start();
  date_default_timezone_set("America/Santiago");
  if($_SESSION['autorizado']<>1){
    header("Location: index.php");
  }
?>