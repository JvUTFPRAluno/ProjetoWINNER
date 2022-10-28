<?php
    require 'config.php';
    require 'filtrar.php';

    if(mysqli_num_rows($result) > 0){
        $delimitador = ';';//vai delimitar as colunas no arquivo csv
        $nomeArquivo = $_POST['setorFiltro'];//nome do arquivo
        if(isset($_POST['linhaFiltro'])){
            $nomeArquivo.= $_POST['linhaFiltro'];
        }
        $nomeArquivo.= date('d-m-Y'). ".csv";

        $f = fopen ('php://memory', 'w');//cria um arquivo ponteiro

        //nome das colunas
        $colunas = array('ID','REQUISITANTE','SETOR','LINHA','DATA','MOTIVO','TECNICO','INICIO','TERMINO','PARTE','PROBLEMA',mb_convert_encoding('SOLUÇÃO', 'UTF-16LE', 'UTF-8'),'PARADA','ANDAMENTO');

        fputcsv($f,$colunas,$delimitador);//coloca $colunas no arquivo

        while($linha = mysqli_fetch_array($result)){//passa cada linha da array para uma variavel e a transforma em um vetor

            $ids = $linha['id'];
            $dados2 = "SELECT * FROM relatoriotecnico WHERE id_requisicao = '$ids' LIMIT 1";
            $linha2 = mysqli_fetch_array(mysqli_query($conn, $dados2));

            //as partes do vetor são passadas para ordem correta em outro vetor chamado $registro
            $status = ($linha['concluido']== 1)?'concluido':'requisitado';

            //OBS: UTF-8 buga caracteres especiais no excel usar o conversor mb_convert_encoding($[sua variavel], 'UTF-16LE', 'UTF-8')
            $registro = array($linha['id'],$linha['nomeRequisitante'], mb_convert_encoding($linha['setor'], 'UTF-16LE', 'UTF-8'),mb_convert_encoding($linha['linhaProducao'], 'UTF-16LE', 'UTF-8'),
            date('d/m/Y H:i', strtotime($linha['dataRequisicao'])),mb_convert_encoding($linha['descricaoRequisicao'], 'UTF-16LE', 'UTF-8'),$linha2['nomeManutencao'],
            date('d/m/Y H:i', strtotime($linha2['dataInicio'])),date('d/m/Y H:i',strtotime($linha2['dataTermino'])),
            mb_convert_encoding($linha2['parteProblema'], 'UTF-16LE', 'UTF-8'),mb_convert_encoding($linha2['motivoProblema'], 'UTF-16LE', 'UTF-8'),
            mb_convert_encoding($linha2['solucao'], 'UTF-16LE', 'UTF-8'),$linha2['tempoParada'], $status);

            fputcsv($f,$registro,$delimitador);//adiciona as linhas ao arquivo com o delimitador
        }

        fseek($f,0);//volta para a primeira linha do arquivo

        //seta o cabeçalho para download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="'.$nomeArquivo.'";');

        //limpa toda a data sobreçalente do arquivo ponteiro
        fpassthru($f);
    }
    mysqli_close($conn);
    header("Location: ../ordens.php?no=1");
    exit;
?>
