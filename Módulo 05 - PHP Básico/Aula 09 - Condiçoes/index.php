
<?php

  $variavel1 = 'Antonio';
  $variavel2 = 'Antonio';
/*
  if($variavel1 == $variavel2) {
    echo '<div style="width:300px;height:300px;background:red;"></div>';
  }else{
    echo 'A condição não bate';
  }
*/
  if($variavel1 == $variavel2) {
    
  
  ?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    Aqui é meu site
  </body>
  </html>

  <?php
  }else{

  
 ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    Aqui é outro site
  </body>
  </html>
 <?php
  }
 ?>

 <?php
  $var = 10 + 5;
  $var1 = '10 + 5';

  if($var == $var1){
    echo 'Verdade';
  }else if($var != $var1){
    echo 'verdade na condição else if';
  }else{
    echo 'falso';
  }

 ?>