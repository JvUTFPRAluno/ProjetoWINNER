<?php
    include 'parts/header.php';//adiciona o cabeçalho da pagina
    include 'php/mostra_dados_req.php';
    include 'php/mostrarTudo.php';//mostra dados a serem editados
?>
    <div class="imprimir_req">
        <a href="imprimirReq.php?id=<?php echo $_GET['id']?>">IMPRIMIR</a>
    </div>
<?php
    include 'parts/footer.php';//adiciona o rodapé da pagina
?>
