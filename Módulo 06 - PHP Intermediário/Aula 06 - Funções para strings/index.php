<?php

  $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices odio ut elementum imperdiet. Sed in pulvinar tortor. Nam erat felis, sollicitudin quis pretium at, facilisis in ipsum. Duis eu tempus elit. Nulla felis lectus, volutpat vitae neque nec, ullamcorper cursus nisl. Suspendisse eu nulla quis ante tincidunt fringilla. Phasellus faucibus leo venenatis diam viverra, quis tincidunt lorem rhoncus. Sed non malesuada enim, ac tempor sem. Aenean scelerisque elit sit amet justo hendrerit, vel varius augue accumsan. Donec nec porttitor mi. Nunc bibendum at dolor gravida vulputate. Pellentesque sed massa ut elit condimentum aliquam. Sed et semper neque. Etiam posuere nulla id magna posuere, ac pharetra massa lacinia.';

  //serve para reconrtar uma string
  //echo substr($conteudo, 0, 20);

  $nome = 'Antonio Carlos de Oliveira';

  //serve para separar um array
  $nomes = explode(' ', $nome);

  //print_r($nomes);


  //Serve para juntar um array com um delimitador.
  //No caso o espaço.
  $nomes = implode(' ', $nomes);
  //echo $nomes;

  //Strip_tags serve para retirar todo codigo HTML.
  $conteudo = '<h1>Antonio</h1>Outra coisa';
  //echo strip_tags($conteudo);


  //htmlentities que mostra o codigo html na página

  echo htmlentities('<div></dvi>')
?>