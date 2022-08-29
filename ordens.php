<?php 
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
				include 'php/consulta.php';// inclui as ordens de serviço não concluidas
			?>
		</table>
	</div><!--registro-ordens-->
<?php include'parts/footer.php'?>// adiciona o rodapé da pagina

