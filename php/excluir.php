<?php
    include 'config.php';
    require_once  'verifica_sessao';

    verifica_conectado(3);

    $id = $_GET['id'];

   $sql = "DELETE FROM `ordemservico` WHERE `id`='$id' LIMIT 1";
   mysqli_query($conn, $sql);

   mysqli_close($conn);
   header('Location: '. '../ordens.php');
   die();
?>