<?php
    require 'config.php';
    require_once 'verifica_sessao.php';

    verifica_conectado(1);


    //converte a data para o formato que o mysql entende
    $dataInicio = $_POST['dataInicio']." ".$_POST['horaInicio'];
    $dataTermino = $_POST['dataTermino']." ".$_POST['horaTermino'];

    //data formatada
    $fDataInicio = date('Y/m/d H:i', strtotime($dataInicio));
    $fDataTermino = date('Y/m/d H:i', strtotime($dataTermino));

    //atribui os dados POST as variveis 
    $id = $_POST['id'];
    $tipo = implode(",",$_POST['tipo_manutencao']);
    if(isset($_POST['terceiros'])){
        $terceiros = $_POST['terceiros'];
    }
    //$dataTermino = date('Y-m-d H:i');
    $nome = $_POST['nome_funcionario'];
    $parte = $_POST['equipamento'];
    $motivo = $_POST['motivo_falha'];
    $parada = $_POST['tempo_parada'];
    $solucao = $_POST['solucao'];

    //echo($solucao);debug
    
    //query que adiciona os dados enviados pelo usuario na solução da ordem de serviço
    $sql = "INSERT INTO relatoriotecnico (id_requisicao, tipoManutencao,nomeManutencao,dataInicio,dataTermino,parteProblema,motivoProblema,solucao,tempoParada,nomeTerceiros) VALUES ('$id','$tipo','$nome','$fDataInicio','$fDataTermino','$parte','$motivo','$solucao','$parada','$terceiros')";
    mysqli_query($conn, $sql);//executa a query

    //pega o id do relatorio tecnico
    $id_rt = "SELECT id FROM `relatoriotecnico` WHERE id_requisicao = '$id'";
    $result = mysqli_query($conn, $id_rt);//executa a query
    $linha = mysqli_fetch_array($result);//transforma o resultado em uma array

    //atualiza o id_relatorioTecnico e tambem o status de concluido
    $sql2 = "UPDATE `ordemservico` SET `concluido`= 1, `id_relatorioTecnico`= '$linha[0]' WHERE id = '$id'";
    mysqli_query($conn, $sql2);//executa a query

    mysqli_close($conn);//fecha o banco de dados
    header('Location: '. '../ordens.php');//redireciona para ordens
    die();// mata o codigo
?>
