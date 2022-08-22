
<?php include'parts/header.php'?>
	<section>
		<form method="post" action="php/salva_requisitante.php">
			<h2>Formulario de ordem de serviço</h2>
			<div class="setor">
				<div><label>Requisitante</label></div>
				<div><input type="text" name="nome" id="nome" required></div>
			</div>
			<div class="setor">
				<div><label>Setor</label></div>
				<div><select id="setor" name="setor[]" required>
					<option disabled selected>Selecione sua linha</option>
					<option value="Produção">Produção</option>
					<option value="Administrativo">Administrativo</option>
				</select></div>
				<div><label>Linha</label></div>
				<div><select id="linha" name="linha[]" required>
					<option disabled selected >Selecione sua linha</option>
					<option value="01-Arla antiga">01-Arla antiga</option>
					<option value="12-Terco 1">12-Terco 1</option>
				</select></div>
			</div>
			<div class="setor">
				<div><label>Motivo da requisição(Descrição da ocorrencia)</label></div>
				<div><textarea name="descricao" id="descricao" placeholder="digite a descrição do problema aqui..."></textarea></div>
			</div>
			<div class="setor">
				<input type="submit" value="enviar">
				<!---->
				<input type="reset">
			</div>
		</form>
	</section>
<?php include'parts/footer.php'?>