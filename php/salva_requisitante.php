<?php 
    include '../parts/header.php'
    include 'config.php';

    $nome = $_POST['nome'];
    $linha = implode(",",$_POST['linha']);//separa os elementos de uma array por virgulas(no caso como tem apenas 1 o coverte para string)
    $setor = implode(",",$_POST['setor']);
    $descricao = $_POST['descricao'];
    $data = date('Y/m/d H:i');

    //echo($nome . $descricao .$data . $linha .$setor);

    $sql = "INSERT INTO ordemservico(nomeRequisitante,setor,linhaProducao,dataRequisicao,descricaoRequisicao) VALUES ('$nome','$setor','$linha','$data','$descricao')";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
    header('Location: '. '../Usuarios.html');
    die();
?>