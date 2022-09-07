<?php
    require 'config.php';
    require 'filtrar.php';

    if(mysqli_num_rows($result) > 0){
        $delimitador = ';';//vai delimitar as colunas no arquivo csv
        $nomeArquivo = "Relatorio" . date('d-m-Y'). ".csv";//nome do arquivo

        $f = fopen ('php://memory', 'w');//cria um arquivo ponteiro

        //nome das colunas
        $colunas = array('ID','REQUISITANTE','SETOR','LINHA','DATA','MOTIVO','TECNICO','INICIO','TERMINO','PARTE','PROBLEMA',mb_convert_encoding('SOLUÇÃO', 'UTF-16LE', 'UTF-8'),'PARADA','ANDAMENTO');

        fputcsv($f,$colunas,$delimitador);//coloca $colunas no arquivo

        while($linha = mysqli_fetch_array($result)){//passa cada linha da array para uma variavel e a transforma em um vetor

            //as partes do vetor são passadas para ordem correta em outro vetor chamado $registro
            $status = ($linha['concluido']== 1)?'concluido':'requisitado';

            //OBS: UTF-8 buga caracteres especiais no excel usar o conversor mb_convert_encoding($[sua variavel], 'UTF-16LE', 'UTF-8')
            $registro = array($linha['id'],$linha['nomeRequisitante'], mb_convert_encoding($linha['setor'], 'UTF-16LE', 'UTF-8'),mb_convert_encoding($linha['linhaProducao'], 'UTF-16LE', 'UTF-8'),
            date('d/m/Y H:i', strtotime($linha['dataRequisicao'])),mb_convert_encoding($linha['descricaoRequisicao'], 'UTF-16LE', 'UTF-8'),$linha['nomeManutencao'],
            date('d/m/Y H:i', strtotime($linha['dataInicio'])),date('d/m/Y H:i',strtotime($linha['dataTermino'])),
            mb_convert_encoding($linha['parteProblema'], 'UTF-16LE', 'UTF-8'),mb_convert_encoding($linha['motivoProblema'], 'UTF-16LE', 'UTF-8'),
            mb_convert_encoding($linha['solucao'], 'UTF-16LE', 'UTF-8'),$linha['tempo_parada'], $status);

            fputcsv($f,$registro,$delimitador);//adiciona as linhas ao arquivo com o delimitador
        }

        fseek($f,0);//volta para a primeira linha do arquivo

        //seta o cabeçalho para download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="'.$nomeArquivo.'";');

        //limpa toda a data sobreçalente do arquivo ponteiro
        fpassthru($f);
    }
    //header("Location: ../ordens.php");
    exit;
?>
