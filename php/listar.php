<?php
  
    include_once("connection.php");

    $query = $pdo->query("SELECT * FROM centrodecustos ORDER BY centrodecustos . CCU_NUM_CODIGO DESC");
    $query->execute();
    //echo json_encode($query);


    $dados = [];

    
    while($linha = $query->fetch(PDO::FETCH_OBJ)){
        array_push($dados, 
        $linha->CCU_NUM_CODIGO, 
        $linha->CCU_TXT_NOME,
        $linha->CCU_TXT_DESCRICAO,
        $linha->CCU_FL_ATIVO,
        );
    };

    echo json_encode($dados);

?>

