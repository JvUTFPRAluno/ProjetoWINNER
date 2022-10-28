<?php
    require 'config.php';
    require_once 'verifica_sessao.php';

    verifica_conectado(2);

    $id = $_GET['id'];//pega o id via GET

   $sql = "DELETE FROM `ordemservico` WHERE `id`='$id' LIMIT 1";//query que deleta um registro onde a coluna id for igual a variavel '$id'
   mysqli_query($conn, $sql);//executa a query

   $sql2 = "DELETE FROM `relatoriotecnico` WHERE `id_requisicao`='$id' LIMIT 1";//query que deleta um registro onde a coluna id for igual a variavel '$id'
   mysqli_query($conn, $sql2);//executa a query

   mysqli_close($conn);//fecha o banco de dados
   header('Location: '. '../ordens.php');//redireciona para ordens
   die();//mata o procedimento
?>
