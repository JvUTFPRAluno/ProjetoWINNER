<?php 
	include 'parts/header.php';
	require_once 'php/verifica_sessao.php';
	require_once 'php/consulta.php';

	verifica_conectado(1);
	include 'parts/header.php';//adiciona o cabeçalho ao site
	include 'php/verifica_sessao.php';//verifica a sessão
?>
	<div class="registro-ordens" id="registros_ordens">
		<table>
			<tr>
				<th class="id">n° da Requisição</th>
				<th class="req">Requisitante</th>
				<th class="data">Data da Requisição</th>
				<th class="setor">Setor</th>
				<th class="linha">Linha</th>
				<th class="ocor">Ocorrencia</th>
				<th class="acoes">Ações</th>
			</tr>
			<?php
				n_concluidos();
			?>
		</table>

			
		<div class="registro-ordens" id="registros_ordens">
		<h2>Ordens Concluidas</h2>
		<table>
			<tr>
				<th class="id">n° da Requisição</th>
				<th class="req">Requisitante</th>
				<th class="data">Data da Requisição</th>
				<th class="setor">Setor</th>
				<th class="linha">Linha</th>
				<th class="ocor">Ocorrencia</th>
				<th class="acoes">Ações</th>
			</tr>
			<?php
				concluidos();
				include 'php/consulta.php';// inclui as ordens de serviço não concluidas
			?>
		</table>
	</div><!--registro-ordens-->
<?php include'parts/footer.php'?>// adiciona o rodapé da pagina