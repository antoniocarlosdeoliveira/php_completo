<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    $id = 5;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Joao', sobrenome='Oliveira' WHERE id=?");

    if($sql->execute(array($id))){
        echo 'Meu cliente foi atualizado com sucesso!';
    }
?>
