<?php
    
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    
    $pdo->exec("LOCK TABLES `clientes` WRITE");

    sleep(10);
?>