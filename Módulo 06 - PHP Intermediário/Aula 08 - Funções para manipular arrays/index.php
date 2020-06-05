<?php
//Serve para unir um ou mais arrays
  /*
  $array1 = array("chave1"=>"valor1", "chave2"=>"valor2");
  $array2 = array("chave3"=>"valor3", "chave4"=>"valor4");
  $resultado = array_merge($array1, $array2);
  print_r($resultado);
  */

  //array intersect key serve para retornar valores com a mesma chave em 1 ou mais arrays.
  /*
  $array1 = array("chave1"=>"valor1", "chave2"=>"valor2");
  $array2 = array("chave1"=>"outro valor","chave3"=>"valor3", "chave4"=>"valor4");
  print_r(array_intersect_key($array1,$array2));
  */
  
  //array map serve para aplicar uma função em todos os calores do array.
  $arr = ['<p>Antonio</p>', 'João', '<h1>fabricio</h1>'];
  print_r(array_map('strip_tags',$arr));
?>