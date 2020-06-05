<?php
  function mostrarNome($nome, $idade){
    echo '<h2>Nome é:</h2>'.$nome;
    echo "<hr>Idade: $idade";
  }
  //mostrarNome('João',20);
  function calculadora($numero1 = 10,$numero2 = 5){
    echo ($numero1+$numero2);
  }

  function verdade(){
    return true;
  }
  function retornarString(){
    return 'Antonio';
  }
  echo retornarString();
  $variavel = verdade();
  //calculadora(20,50);

?>