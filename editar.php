<?php include 'parts/header.php';?>

<?php 
    require_once 'php/verifica_sessao.php';

    verifica_conectado(1);

    include 'php/mostra_dados_req.php';

    include 'php/mostra_dados_manutencao.php';

?>

<?php
    include 'parts/footer.php';
?>