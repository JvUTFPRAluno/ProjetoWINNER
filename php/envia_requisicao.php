<?php
    require 'config.php';
    require_once 'verifica_sessao.php';

    verifica_conectado(1);

    $id = $_POST['id'];
    $tipo = implode(",",$_POST['tipo_manutencao']);
    $terceiros = $_POST['terceiros'];
    $dataTermino = date('Y-m-d H:i');
    $nome = $_POST['nome_funcionario'];
    $parte = $_POST['equipamento'];
    $motivo = $_POST['motivo_falha'];
    $parada = $_POST['tempo_parada'];
    $solucao = $_POST['solucao'];


    echo($solucao);
    $sql = "UPDATE `ordemservico` SET `tipoManutencao`='$tipo',`nomeManutencao`='$nome',`dataTermino`='$dataTermino',`parteProblema`='$parte',
    `motivoProblema`='$motivo',`solucao`='$solucao',`tempo_parada`='$parada',`nomeTerceiros`='$terceiros',`concluido`='1' WHERE `id`= '$id'";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
    header('Location: '. '../ordens.php');
    die();
?>