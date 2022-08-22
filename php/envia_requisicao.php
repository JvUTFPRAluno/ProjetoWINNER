<?php
    include 'config.php';

    $id = $_POST['id'];
    $tipo = implode(",",$_POST['tipo_manutencao']);
    $terceiros = $_POST['terceiros'];
    $data_inicio = date('Y-m-d H:i');
    $nome = $_POST['nome_funcionario'];
    $parte = $_POST['equipamento'];
    $parada = $_POST['tempo_parada'];
    $solucao = $_POST['solucao'];

    echo($nome . $parte);

    //sql = "INSERT INTO `ordemservico`(nomeManutancao,dataInicio,dataTermino,
    //parteProblema,solucao,tempo_parada,nomeTerceiros) VALUES ;
    //mysqli_query($conn, $sql);
?>