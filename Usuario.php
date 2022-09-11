
<?php include'parts/header.php'?>
	<section>
		<form method="post" action="php/salva_requisitante.php" id="requisitanteForm">
			<h2>Formulario de ordem de serviço</h2>
			<div class="setor">
				<div><label>Requisitante</label></div>
				<div><input type="text" name="nome" id="nome" required autocomplete="off"></div>
			</div>
			<div class="setor">
				<div><label>Setor</label></div>
				<div>
					<select id="setorReq" name="setor[]" required>
						<option disabled selected>Selecione sua linha</option>
						<option value="Administrativo">Administrativo</option>
						<option value="Expedição">Expedição</option>
						<option value="Formulação">Formulação</option>
						<option value="Predial">Predial</option>
						<option value="Produção">Produção</option>
						<option value="Segurança do Trabalho">Segurança do Trabalho</option>
						<option value="Serviços Gerais">Serviços Gerais</option>
					</select>
				</div>
				<div id="linhaReq" style="display: none">
				<div><label>Linha</label></div>
					<select name="linha[]" required>
						<option disabled selected >Selecione sua linha</option>
						<option value="Linha 1 (Antiga arla)">Linha 1 (Antiga arla)</option>
						<option value="Linha 2 (Serac)">Linha 2 (Serac)</option>
						<option value="Linha 3 (Álcool)">Linha 3 (Álcool)</option>
						<option value="Linha 4 (Álcool/Multiuso)">Linha 4 (Álcool/Multiuso)</option>
						<option value="Linha 5 (LPB)">Linha 5 (LPB)</option>
						<option value="Linha 6 (Sachê)">Linha 6 (Sachê)</option>
						<option value="Linha 7 (Tecnoenvase/ 12 bicos)">Linha 7 (Tecnoenvase/ 12 bicos)</option>
						<option value="Linha 8 (Bosch)">Linha 8 (Bosch)</option>
						<option value="Linha 9 (Nannini)">Linha 9 (Nannini)</option>
						<option value="Linha 10 (Kalix)">Linha 10 (Kalix)</option>
						<option value="Linha 11 (Horse)">Linha 11 (Horse)</option>
						<option value="Linha 12 (Terco 1)">Linha 12 (Terco 1)</option>
						<option value="Linha 13 (Terco 2)">Linha 13 (Terco 2)</option>
						<option value="Linha 14 (UNA)">Linha 14 (UNA)</option>
						<option value="Linha 15 (Aeromanual/ Graxa)">Linha 15 (Aeromanual/ Graxa)</option>
						<option value="Linha 16 (Espuma)">Linha 16 (Espuma)</option>
						<option value="Linha 17 (Blister)">Linha 17 (Blister)</option>
						<option value="Linha 18 (Envase Grafite)">Linha 18 (Envase Grafite)</option>
						<option value="Promaquina">Promaquina</option>
					</select>
				</div>
			</div>
			<div class="setor">
				<div><label>Motivo da requisição(Descrição da ocorrencia)</label></div>
				<div><textarea name="descricao" id="descricao" placeholder="digite a descrição do problema aqui..." ></textarea></div>
			</div>
			<div class="setor">
				<input type="submit" value="enviar">
				<!---->
				<input type="reset">
			</div>
		</form>
	</section>
<?php include'parts/footer.php'?>