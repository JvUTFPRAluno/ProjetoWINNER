<?php
	include 'parts/header.php';
	require_once 'php/verifica_sessao.php';
	require_once 'php/config.php';


	//$tempoInicio = date('Y-m-d H:i');
	$id = $_GET['id'];


	//$sql = "UPDATE ordemservico SET `dataInicio` = '$tempoInicio' WHERE `id` = '$id'";
	//mysqli_query($conn, $sql);

	verifica_conectado(1);
?>

<?php 
	require_once 'php/mostra_dados_req.php';
?>
<div class="OS">
    <form class="relatorio" id="relatorio" method="POST" action="php/envia_requisicao.php">
            <input type="text" name="id" value="<?php echo $linha['id']; ?>" style="display: none;";>
			<div class="Tipo_manutencao">
				<h2>Tipo de manutenção</h2>
				<select name="tipo_manutencao[]" id="tManutencao" required>
					<option value="" disabled selected>--</option>
					<option value="C. emergencial">C. emergencial</option>
					<option value="C. programada">C. programada</option>
					<option value="Ajuste operacional">Ajuste operacional</option>
					<option value="Melhoria">Melhoria</option>
					<option value="Predial">Predial</option>
					<option value="preventiva">preventiva</option>
				</select>
			</div><!--Tipo_manutencao-->
			<div class="terceiros">
				<h2>Terceiros</h2>
					<div>
						<label>Manutenção realizada com 3°</label>
						<input type="radio" value="sim_t" id="sim_t" name="opt" checked><label>sim</label>
						<input type="radio" value="nao_t" id="nao_t" name="opt"><label>não</label>
					</div>
					<div id="campoTerceiros">
						<label>Empresa/ Profissional</label>
						<input type="text" name="terceiros" id="terceiros" autocomplete="off">
					</div>
			</div><!--terceiros-->
			<div class="tempoRequisicao">
				<h2>Intervalo de Tempo</h2>
				<div>
				<h4>data de inicio</h4>
					<input type="date" name="dataInicio" id="dataInicio">
					<input type="time" name="horaInicio" id="horaInicio">
				</div>
				<div>
				<h4>data de termino</h4>
					<input type="date" name="dataTermino" id="dataTermino">
					<input type="time" name="horaTermino" id="horaTermino">
				</div>	
			</div>
			<div class="relatorio_tecnico">
				<h2>Relatório Técnico</h2>
				<div class="topico">
					<label>Nome do(s) Técnico(s)</label>
					<input type="text" name="nome_funcionario" required autocomplete="off">
				</div>
				<div class="topico">
					<label>Equipamento</label>
					<input type="text" name="equipamento" required autocomplete="off">
				</div>
				<div class="topico">
					<label>Motivo da falha</label>
					<input type="text" name="motivo_falha" required="required" autocomplete="off">
				</div>
				<div class="parada_maquina">
					<label>Parou a Maquina?</label>
					<div class="conteiner-parada">
						<input type="radio" value="sim_p" id="sim_p" name="h_parada" checked><label>Sim</label>
						<input type="radio" value="nao_p" id="nao_p" name="h_parada"><label>Não</label>
						<input type="time" name="tempo_parada" id="tempo_parada" value="00:00">
					</div><!--conteiner-parada-->
				</div>
			</div><!--relatorio_tecnico-->
			<div class="descricao-servico">
				<h2>Descrição do serviço realizado</h2>
				<textarea placeholder="digite aqui..." name="solucao"></textarea>
			</div><!--descricao-servico-->
			<div class="actions">
				<input type="submit" id="enviar">
				<input type="reset">
			</div><!--actions-->
		</form><!--relatorio-->
</div><!--OS-->

<?php
	include 'parts/footer.php';//adiciona o rodapé da pagina
?>
