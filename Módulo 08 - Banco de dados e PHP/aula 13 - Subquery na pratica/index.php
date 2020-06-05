<?php
    $pdo = new PDO('mysql:host=localhost;dbname=testes', 'root', '');
    $select = $pdo->prepare("SELECT * FROM filmes WHERE categoria_id = (SELECT categoria_id FROM categorias WHERE nome= 'terror')");
    $select->execute();

    echo '<pre>';
    print_r($select->fetchAll());
    echo '</pre>';