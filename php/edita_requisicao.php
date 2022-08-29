<?php
    include 'config.php';//inicia o banco de dados

    //pega e atribui as variaveis no metodo POST
    $id = $_POST['id'];
    $tipo = implode(",",$_POST['tipo_manutencao']);
    $terceiros = $_POST['terceiros'];
    $nome = $_POST['nome_funcionario'];
    $parte = $_POST['equipamento'];
    $motivo = $_POST['motivo_falha'];
    $parada = $_POST['tempo_parada'];
    $solucao = $_POST['solucao'];
    
    //query que atualiza os dados mudados pelo usuario no editar.php
    $sql = "UPDATE `ordemservico` SET `tipoManutencao`='$tipo',`nomeManutencao`='$nome',`parteProblema`='$parte',`motivoProblema`='$motivo',`solucao`='$solucao',
    `tempo_parada`='$parada',`nomeTerceiros`='$terceros',`concluido`='1' WHERE `id`='$id'";
    mysqli_query($conn, $sql);//executa a query

    mysqli_close($conn);// fecha o banco de dados
    header('Location: '. '../ordens.php'); // redireciona para ordens
    die();//mata o procedimento
?>
