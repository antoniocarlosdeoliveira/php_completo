<?php

  //Durma o codigo por x segundos
  /*
  sleep(3);

  echo 'um';

  sleep(3);
  
  echo 'dois';

  sleep(3);

  echo 'tres';
  */

  $nome = 'Pedro';
  if($nome == 'Pedro'){
    //continuamos o codigo
    echo 'tudo certo';
    echo '<br>';
  }else{
    die("O script parou de ser executado");
  }

  sleep(3);

  echo '<hr>', 'um', '<br>';

  sleep(3);
  
  echo '<hr>','dois', '<br>';

  sleep(3);

  echo '<hr>','tres', '<br>', '<hr>';

?>