<?php
    include 'parts/header.php';
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
			<?php require 'php/filtrar.php';
				dadosFiltrados($result);
			?>
		</table>
	<div>   
<?php
    include 'parts/footer.php';
?>

