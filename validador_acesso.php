<?php 

  session_start();

  if(!isset($_SESSION['autenticado']) OR $_SESSION['autenticado'] != 'SIM'){
    header('Location: index.php?logError2');
  }

?>