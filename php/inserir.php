<?php
    include_once("connection.php");
    header('Content-Type: application/json');

    $nome = $_POST['n1'];
    $descricao = $_POST['n2'];

    var_dump("var dump do nome: " . $nome);

    $stmt = $conne->prepare('INSERT INTO centrodecustos (nome, descricao) VALUES (:no, :de)');
    $stmt->bindValue(':no', $nome);
    $stmt->bindValue(':de', $descricao);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Comentário salvo com sucesso');
    }
    else {
        echo json_encode('Falha ao salvar comentário');
    }
?>