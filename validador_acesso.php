<?php 

session_start();
// caso não exista --
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
  header('Location:index.php?login=erro2');
}


?>