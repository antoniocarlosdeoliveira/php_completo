<?php
    $pdo = new PDO('mysql:host=localhost;dbname=like','root','');
    $sql = $pdo->prepare("SELECT * FROM clientes WHERE email LIKE '%g%'");
    $sql->execute();
    $emails = $sql->fetchAll();
    print_r($emails);
?>