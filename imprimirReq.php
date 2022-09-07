<?php
    use Dompdf\Dompdf;
    require_once 'dompdf/autoload.inc.php';
    require 'php/config.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM `ordemservico` WHERE id = $id LIMIT 1";//query que pega os dados onde a coluna id = '$id'
    $result = mysqli_query($conn, $sql);//executa a query e adiciona a varivel '$result' 
    $linha = mysqli_fetch_array($result);//adiciona os dados da variavel '$result' na varivel '$linha' como um array

    $pdf = new Dompdf;

    $pdf->loadHtml('<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            .center h2{
                text-align: center;
            }
            .center p{
                font-size: 17px;
            }
        </style>
        <title></title>
    </head>
    <body>
        <div class="center">
            <h2>Order de Serviço n°'.$linha['id'].'</h2>
            <p><b>Requisitante:</b> '.$linha['nomeRequisitante'].'</p>
            <p><b>Setor:</b> '.$linha['setor'].'</p>
            <p><b>Linha de Produção:</b> '.$linha['linhaProducao'].'</p>
            <p><b>Data:</b> '.date('d/m/Y H:i', strtotime($linha['dataRequisicao'])).'</p>
            <p><b>Motivo da requisição:</b> '.$linha['descricaoRequisicao'].'</p>
    
            <h2>Relatório do tecnico</h2>
            <p><b>Tecnico:</b> '.$linha['nomeManutencao'].'</p>
            <p><b>Parte do equipamento:</b> '.$linha['parteProblema'].'</p>
            <p><b>Problema:</b> '.$linha['motivoProblema'].'</p>
            <p><b>Tempo de execução:</b> '.date('d/m/Y H:i',strtotime($linha['dataInicio'])).' a '.date('d/m/Y H:i', strtotime($linha['dataTermino'])).'</p>
            <p><b>Tempo de parada de maquina:</b> '.$linha['tempo_parada'].'</p>
        </div><!--center-->
    </body>
    </html>');
    $pdf->render();

    $pdf->stream(
        'nome_arquivo.pdf',
        array(
            "Attachment"=>false
        )
    );
?>