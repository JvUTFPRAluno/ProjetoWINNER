<?php
    include 'config.php';

	$id = $_POST['id'];
    $tipo = implode(",",$_POST['tipo_manutencao']);
    $terceiros = $_POST['terceiros'];
    $nome = $_POST['nome_funcionario'];
    $parte = $_POST['equipamento'];
    $motivo = $_POST['motivo_falha'];
    $parada = $_POST['tempo_parada'];
    $solucao = $_POST['solucao'];

    $sql = "UPDATE `ordemservico` SET `tipoManutencao`='$tipo',`nomeManutencao`='$nome',`parteProblema`='$parte',`motivoProblema`='$motivo',`solucao`='$solucao',
    `tempo_parada`='$parada',`nomeTerceiros`='$terceros',`concluido`='1' WHERE `id`='$id'";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
    header('Location: '. '../ordens.php');
    die();
?>