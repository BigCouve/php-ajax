<?php 
    include_once("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Tarefa Agillis</title>
</head>
<body>
    
    <div class="acoes">
        <button id="cadCusto" src="#" data-target="#modalForm" data-toggle="modal">Cadastrar Custo</button>
    </div>

    <div id="modalForm" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastro de custo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formDeCusto" method="POST">
                    <label for="cadNome">Nome</label>
                    <input type="text" name="cadNome" id="cadNome">
                    <label for="cadDescricao">Descrição</label>
                    <textarea name="cadDescricao" id="cadDescricao"></textarea>
                
            </div>
            <div class="modal-footer">
                <button type="button" id="btEnv" class="btn btn-primary" data-dismiss="">Cadastrar</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>

    <div class="tabelaDeCustos">
        <table>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Descrição</td>
                    <td>Ativo</td>
                </tr>
            </thead>
            <tbody>
                <?php
                //$response = $_POST['dd'];
                //foreach ($response as $valor) { ?>

                <tr>

                    <?php 
                    include_once("connection.php");
                    $query = $pdo->prepare('SELECT * FROM centrodecustos');
                    $query->execute();
                    $count = $query->rowCount();

                    for($i = 0; $i < $count; $i++){ 
                        ?>
                        <tr>
                            <td class="rId"></td>
                            <td class="rNome"></td>
                            <td class="rDesc"></td>
                            <td class="rAt"></td>
                        </tr>
                    <?php } ?>
                    
                </tr>
                <?php //} ?>
            </tbody>
        </table>
    </div>
    <script src="../js/index.js"></script>
</body>
</html>