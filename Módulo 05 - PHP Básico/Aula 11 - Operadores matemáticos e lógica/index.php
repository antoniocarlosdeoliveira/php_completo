<?php
  $numero1 = 10;
  $numero2 = 11;
 /*
  //Operadores Matematicos.
  if($numero1 < $numero2) {
    //Execute tal ação.
  }else{

  }
  if($numero1 <= $numero2) {
    echo 'Execute';
  }
  */
  //Operador Lógico E.
  $var1 = 'Valor 1';
  $var2 = 'Valor 2';
  $var3 = 'Valor 1';

  if(($var1 == $var2) && ($var2 == $var3)) {
    echo 'verdade';
  }

  //Operador lógico OU.
  if(($var1 == $var2 || $var1 == $var3) && $var1 == $var2){
    echo 'Verdade';
  }else{
    echo 'false';
  }
?>