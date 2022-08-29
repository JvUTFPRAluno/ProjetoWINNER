<?php
	include 'parts/header.php';
	require_once 'php/verifica_sessao.php';
	require_once 'php/config.php';


	$tempoInicio = date('Y-m-d H:i');
	$id = $_GET['id'];


	$sql = "UPDATE ordemservico SET `dataInicio` = '$tempoInicio' WHERE `id` = '$id'";
	mysqli_query($conn, $sql);

	verifica_conectado(1);
	include 'parts/header.php';//adiciona o cabeçalho ao site 
	include 'php/verifica_sessao.php';//verifica a sessão
?>

<?php 
	require_once 'php/mostra_dados_req.php';
	dados_requisitante();
?>
<div class="OS">
    <form class="relatorio" method="POST" action="php/envia_requisicao.php">
            <input type="text" name="id" value="<?php echo $linha['id']; ?>" style="display: none;";>
			<div class="Tipo_manutencao">
				<h2>Tipo de manutenção</h2>
				<select name="tipo_manutencao[]"required>
					<option value='' disabled selected>--</option>
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
						<input type="radio" value="sim_t" name="opt"><label>sim</label>
						<input type="radio" value="nao_t" name="opt"><label>não</label>
					</div>
					<div>
						<label>Empresa/ Profissional</label>
						<input type="text" name="terceiros" value="null">
					</div>
			</div><!--terceiros-->
			<div class="relatorio_tecnico">
				<h2>Relatório Técnico</h2>
				<div class="topico">
					<label>Nome do(s) Técnico(s)</label>
					<input type="text" name="nome_funcionario" required>
				</div>
				<div class="topico">
					<label>Equipamento</label>
					<input type="text" name="equipamento" required>
				</div>
				<div class="topico">
					<label>Motivo da falha</label>
					<input type="text" name="motivo_falha" required="required">
				</div>
				<div class="parada_maquina">
					<label>Parou a Maquina?</label>
					<div class="conteiner-parada">
						<input type="radio" value="sim_p" name="h_parada"><label>Sim</label>
						<input type="radio" value="nao_p" name="h_parada"><label>Não</label>
						<input type="time" name="tempo_parada">
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

<?php include'parts/footer.php';//adiciona o rodapé da pagina?>
