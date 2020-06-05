<?php
    $pdo = new PDO('mysql:host=localhost;dbname=bd_teste', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("SELECT * FROM `clientes` /*GROUP BY cargo*/ ORDER BY nome ASC LIMIT 0,3");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach($clientes as $key => $value) {
        echo $value['nome'];
        echo '<hr>';
    }

    

?>