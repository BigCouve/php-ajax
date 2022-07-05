<?php
    header('Content-Type: application/json');

    $nome = $_POST['d1'];
    $descricao = $_POST['d2'];
    
    $pdo = new PDO ('mysql:host=localhost; dbname=tarefaagillis;', 'root', '');

    $stmt = $pdo->prepare('INSERT INTO centrodecustos (CCU_TXT_NOME, CCU_TXT_DESCRICAO) VALUES (:no, :de)');
    $stmt->bindValue(':no', $nome);
    $stmt->bindValue(':de', $descricao);
    $stmt->execute();


    if ($stmt->rowCount() >= 1) {
        echo json_encode('Comentário salvo com sucesso');
    }
    else {
        echo json_encode('Falha ao salvar comentário');
    }

    echo ("fim do documento php");
?>