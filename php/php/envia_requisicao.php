<?php
    require 'config.php';
    require_once 'verifica_sessao.php';

    verifica_conectado(1);
    include 'config.php';//inicia o banco de dados


    //atribui os dados POST as variveis 
    $id = $_POST['id'];
    $tipo = implode(",",$_POST['tipo_manutencao']);
    $terceiros = $_POST['terceiros'];
    $dataTermino = date('Y-m-d H:i');
    $nome = $_POST['nome_funcionario'];
    $parte = $_POST['equipamento'];
    $motivo = $_POST['motivo_falha'];
    $parada = $_POST['tempo_parada'];
    $solucao = $_POST['solucao'];


    //echo($solucao);debug

    //query que adiciona os dados enviados pelo usuario na solução da ordem de serviço
    $sql = "UPDATE `ordemservico` SET `tipoManutencao`='$tipo',`nomeManutencao`='$nome',`dataTermino`='$dataTermino',`parteProblema`='$parte',
    `motivoProblema`='$motivo',`solucao`='$solucao',`tempo_parada`='$parada',`nomeTerceiros`='$terceiros',`concluido`='1' WHERE `id`= '$id'";
    mysqli_query($conn, $sql);//executa a query

    mysqli_close($conn);//fecha o banco de dados
    header('Location: '. '../ordens.php');//redireciona para ordens
    die();// mata o codigo
?>
