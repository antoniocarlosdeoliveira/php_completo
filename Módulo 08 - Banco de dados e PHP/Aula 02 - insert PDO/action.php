<?php
  date_default_timezone_set('America/Sao_Paulo');
  $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');


  if(isset($_POST['acao'])){
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momento_registro = date('Y-m-d H:i:s');

    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
  
    $sql->execute(array($nome,$sobrenome,$momento_registro));
    echo 'Cliente inserido com sucesso!';
  }
    
?>