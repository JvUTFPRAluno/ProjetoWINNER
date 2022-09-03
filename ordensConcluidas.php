<?php 
	include 'parts/header.php';
?>
<div class="filtro">
    <form class="filtrar" method="POST" action="registrosFiltrados.php">
        <h2>Filtro</h2>
        <div>
        <h4>Setor</h4>
        <select name="setorFiltro" required>
            <option disabled selected>--</option>
            <option value="administrativo">Administrativo</option>
            <option value="Produção">Produção</option>
        </select>
        </div>
        <div>
        <h4>Linha</h4>
        <select name="linhaFiltro">
        <option disabled selected>--</option>
            <option value="01-Arla antiga">Arla</option>
            <option value="12-Terco 1">Terco 1</option>
        </select>
        </div>
        <div>
            <h3>Intervalo de tempo</h3>
            <label>Data Inicio</label>
            <input type="date" name="intDataInicio" value="">
            <label>Data Final</label>
            <input type="date" name="intDataFim" value="">
        </div>
        <input type="submit" value="filtrar">
    </form>
</div>


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
		require_once 'php/concluidos.php';	
	?>
</table>
</div>
<?php include 'parts/footer.php'?>