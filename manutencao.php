<?php include'parts/header.php'?>
	<div>
		<form class="relatorio">
			<div class="Tipo_manutencao">
				<h2>Tipo de manutenção</h2>
				<select required>
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
						<input type="text" name="empresa">
					</div>
			</div><!--terceiros-->
			<div class="clear"></div><!--clear-->
			<div class="relatorio_tecnico">
				<h2>Relatório Técnico</h2>
				<div class="topico">
					<label>Nome do(s) Técnico(s)</label>
					<input type="text" name="nome_funcionario" required>
				</div>
				<div class="topico">
					<label>Linha</label>
					<input type="text" name="linha" required>
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
					<label class="titulo">Parou a Maquina?</label>
					<div class="conteiner-parada">
						<input type="radio" value="sim_p" name="h_parada"><label class="opt">Sim</label>
						<input type="radio" value="nao_p" name="h_parada"><label class="opt">Não</label>
						<input type="time" name="tempo_parada">
					</div><!--conteiner-parada-->
					<div class="clear"></div>
				</div>
			</div><!--relatorio_tecnico-->
			<div class="descricao-servico">
				<h2>Descrição do serviço realizado</h2>
				<textarea placeholder="digite aqui..."></textarea>
			</div><!--descricao-servico-->
			<div class="actions">
				<input type="submit" id="enviar">
				<!--onclick="salva_sucesso()" formaction="ordens.html"-->
				<input type="reset">
			</div><!--actions-->
		</form><!--relatorio-->
	</div><!--relatorio-->
<?php include'parts/footer.php'?>