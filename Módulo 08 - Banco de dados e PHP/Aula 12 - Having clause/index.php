<?php
    $pdo = new PDO('mysql:host=localhost;dbname=testes', 'root', '');
    $select = $pdo->prepare("SELECT * FROM cargos GROUP BY cargo HAVING pontos > 5");
    $select->execute();

    echo '<pre>';
    print_r($select->fetchAll());
    echo '</pre>';