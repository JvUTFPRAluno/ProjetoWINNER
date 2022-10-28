<?php 
    include 'config.php';//inicia o banco de dados

    $id = $_GET['id'];//pega o id via GET
    
    $sql = "SELECT * FROM `relatoriotecnico` WHERE id_requisicao = $id LIMIT 1";//query que pega os dados onde a coluna id = '$id'
    $result = mysqli_query($conn, $sql);//executa a query e adiciona a varivel '$result' 
    $linha = mysqli_fetch_array($result);//adiciona os dados da variavel '$result' na varivel '$linha' como um array 

    $dataI= explode(" ",$linha['dataInicio']);
    $dataT= explode(" ",$linha['dataTermino']);

    //adiciona os dados ao formulario para que possam ser editados
?>
<div class="OS">
<form class="relatorio" method="POST" action="php/edita_requisicao.php" id="relatorio">
        <input type="text" name="id" value="<?php echo $linha['id']; ?>" style="display: none;";>
        <div class="Tipo_manutencao">
            <h2>Tipo de manutenção</h2>
            <select name="tipo_manutencao[]">
                <option value="C. emergencial" <?php $linha['tipoManutencao']=='C. emergencial'?print('selected'):print('');?>>C. emergencial</option>
                <option value="C. programada" <?php $linha['tipoManutencao']=='C. programada'?print('selected'):print('');?>>C. programada</option>
                <option value="Ajuste operacional" <?php $linha['tipoManutencao']=='Ajuste operacional'?print('selected'):print('');?>>Ajuste operacional</option>
                <option value="Melhoria" <?php $linha['tipoManutencao']=='Melhoria'?print('selected'):print('');?>>Melhoria</option>
                <option value="Predial" <?php $linha['tipoManutencao']=='Predial'?print('selected'):print('');?>>Predial</option>
                <option value="preventiva" <?php $linha['tipoManutencao']=='preventiva'?print('selected'):print('');?>>preventiva</option>
            </select>
        </div><!--Tipo_manutencao-->
        <div class="terceiros">
            <h2>Terceiros</h2>
                <div>
                    <label>Manutenção realizada com 3°</label>
                    <input type="radio" id="sim_t" value="sim_t" name="opt" <?php $linha['nomeTerceiros']!=""?print('checked'):''?>><label>sim</label>
                    <input type="radio" id="nao_t" value="nao_t" name="opt" <?php $linha['nomeTerceiros']==""?print('checked'):''?>><label>não</label>
                </div>
                <div id="campoTerceiros">
                    <label>Empresa/ Profissional</label>
                    <input type="text" name="terceiros" id="terceiros" value="<?php echo $linha['nomeTerceiros']?>">
                </div>
        </div><!--terceiros-->
        <div class="tempoRequisicao">
            <h2>Intervalo de Tempo</h2>
            <div>
                <h4>data de inicio</h4>
                <input type="date" name="dataInicio" id="dataInicio" value="<?php echo($dataI[0])?>">
                <input type="time" name="horaInicio" id="horaInicio" value="<?php echo($dataI[1])?>">
            </div>
            <div>
                <h4>data de termino</h4>
                <input type="date" name="dataTermino" id="dataTermino" value="<?php echo($dataT[0])?>">
                <input type="time" name="horaTermino" id="horaTermino" value="<?php echo($dataT[1])?>">
            </div>
		</div><!--tempoRequisicao-->
        <div class="relatorio_tecnico">
            <h2>Relatório Técnico</h2>
            <div class="topico">
                <label>Nome do(s) Técnico(s)</label>
                <input type="text" name="nome_funcionario" value="<?php echo $linha['nomeManutencao']?>">
            </div>
            <div class="topico">
                <label>Equipamento</label>
                <input type="text" name="equipamento" value="<?php echo $linha['parteProblema']?>">
            </div>
            <div class="topico">
                <label>Motivo da falha</label>
                <input type="text" name="motivo_falha" value="<?php echo $linha['motivoProblema']?>">
            </div>
            <div class="parada_maquina">
                <label>Parou a Maquina?</label>
                <div class="conteiner-parada">
                    <input type="radio" id="sim_p" name="h_parada" value="sim_p" <?php $linha['tempoParada']!="00:00:00"?print('checked'):''?>><label>Sim</label>
                    <input type="radio" id="nao_p" name="h_parada" value="nao_p" <?php $linha['tempoParada']=="00:00:00"?print('checked'):''?>><label>Não</label>
                    <input type="time" id="tempo_parada" name="tempo_parada" value="<?php echo $linha['tempoParada']?>">
                </div><!--conteiner-parada-->
            </div>
        </div><!--relatorio_tecnico-->
        <div class="descricao-servico">
            <h2>Descrição do serviço realizado</h2>
            <textarea placeholder="digite aqui..." name="solucao"><?php echo $linha['solucao']?></textarea>
        </div><!--descricao-servico-->
        <div class="actions">
            <input type="submit" id="enviar" value="editar">
            <input type="reset">
        </div><!--actions-->
    </form><!--relatorio-->
</div><!--OS-->
<?php
?>
