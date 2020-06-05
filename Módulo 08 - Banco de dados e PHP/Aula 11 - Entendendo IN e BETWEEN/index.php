<?php

    $pdo = new PDO('mysql:host=localhost;dbname=testes', 'root', '');

    $sql = $pdo->prepare("SELECT * FROM clientes WHERE data BETWEEN '2019-06-01' AND '2020-06-05'");
    
    $sql->execute();
    
    $emails = $sql->fetchAll();
    
    print_r($emails);

?>