<?php
    include 'config.php';//inicia o banco de dados

    //pega e atribui as variaveis no metodo POST
    $id = $_POST['id'];
    $tipo = implode(",",$_POST['tipo_manutencao']);
    if(isset($_POST['terceiros'])){
        $terceiros = $_POST['terceiros'];
    }
    $nome = $_POST['nome_funcionario'];
    $parte = $_POST['equipamento'];
    $motivo = $_POST['motivo_falha'];
    $parada = $_POST['tempo_parada'];
    $solucao = $_POST['solucao'];

    $dataInicio = $_POST['dataInicio']." ".$_POST['horaInicio'];
    $dataTermino = $_POST['dataTermino']." ".$_POST['horaTermino'];

    $fDataInicio = date('Y/m/d H:i', strtotime($dataInicio));
    $fDataTermino = date('Y/m/d H:i', strtotime($dataTermino));
    
    //query que atualiza os dados mudados pelo usuario no editar.php
    $sql = "UPDATE `relatoriotecnico` SET `tipoManutencao`='$tipo',`nomeTerceiros`='$terceiros',`nomeManutencao`='$nome',`parteProblema`='$parte',
    `dataInicio`='$fDataInicio',`dataTermino`='$fDataTermino',`motivoProblema`='$motivo',`solucao`='$solucao',`tempoParada`='$parada',
    `nomeTerceiros`='$terceiros' WHERE `id`='$id'";
    mysqli_query($conn, $sql);//executa a query

    mysqli_close($conn);// fecha o banco de dados
    header('Location: '. '../ordens.php'); // redireciona para ordens
    die();//mata o procedimento
?>
