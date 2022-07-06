<?php
    header('Content-Type: application/json');

    $nome = $_POST['d1'];
    $descricao = $_POST['d2'];
    
    
    if ($nome && $descricao != ''){
        include_once("connection.php");
        $stmt = $pdo->prepare('INSERT INTO centrodecustos (CCU_TXT_NOME, CCU_TXT_DESCRICAO) VALUES (:no, :de)');
        $stmt->bindValue(':no', $nome);
        $stmt->bindValue(':de', $descricao);
        $stmt->execute();
        echo true;
    }else {
        echo false;
    }
    

?>