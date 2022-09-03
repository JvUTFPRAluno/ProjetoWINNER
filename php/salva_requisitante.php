<?php 
    include 'config.php';//inicia o banco de dados

    
    //atribuição das variaveis pelo metodo POST
    $nome = $_POST['nome'];
    if(isset($_POST['linha'])){
        $linha = implode(",",$_POST['linha']);//separa os elementos de uma array por virgulas(no caso como tem apenas 1 o coverte para string)
    }
    $setor = implode(",",$_POST['setor']);
    $descricao = $_POST['descricao'];
    $data = date('Y/m/d H:i');// pega a data da requisição de maneira automatica a partir do envio

    //echo($nome . $descricao .$data . $linha .$setor);

    //query que insere os dados do requisitante no banco de dados
    $sql = "INSERT INTO ordemservico(nomeRequisitante,setor,linhaProducao,dataRequisicao,descricaoRequisicao) VALUES ('$nome','$setor','$linha','$data','$descricao')";
    mysqli_query($conn, $sql);//executa a query

    mysqli_close($conn);//fecha o banco de dados
    header('Location: '. '../Usuario.php');//redireciona para a tela de usuarios
    die();//mata o codigo
?>
