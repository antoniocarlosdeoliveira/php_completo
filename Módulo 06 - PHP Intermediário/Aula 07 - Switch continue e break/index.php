<?php

  //$nome = 'Antonio';
  /*
  switch($nome){
    case 'Antonio':
      echo 'Minha variavel é Antonio';
      break;
    case 'Joao':
      echo 'Minha variavel é joao';
      break;
  }
  */
  //Break para o loop: for, while, do, foreach, switch.
  //continue para loop: for, while, do e foreach.
  
  for($i = 0; $i < 10; $i++){
    if($i == 5 || $i === 9)
      continue;
    echo $i;
    echo '<hr>';
    /*
    if($i == 5)
    break;
    */
    
  }
  
  /*
  $var = true;
  if(true)
    $nome = 'Antonio';
  $idade= 34;  
  echo $idade;
  echo '<br>';  
  echo $nome;
  */
?>