<?php
  /*
  session_start();
  $_SESSION['nome'] = 'Antonio';
  $_SESSION[0]['nome'] = 'Antonio';
  session_destroy();
  */
  session_start();
  setcookie('nome', 'Antonio', time() - (60*60*24),'/');

  echo $_COOKIE['nome'];
?>