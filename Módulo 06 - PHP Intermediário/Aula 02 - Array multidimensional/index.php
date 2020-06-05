<?php
  //array single.
  $arr = ['Antonio','João'];
  $arr = array('Antonio','chave'=>'João');

  $arr[0] = 'Antonio';
  $arr[] = 'João';
  //Array Multidimensionais.
  //$arr2 = array(array('Antonio','João'),array(34,04));

  //$arr2[0] = array('chave1'=>'Antonio','João');
  $arr2[0]['chave1'] = 'Guilherme';
  echo $arr2[0]['chave1'];
?>