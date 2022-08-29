<?php
    include 'config.php';

	$id = $_GET['id'];

    $sql = "SELECT * FROM `ordemservico` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_array($result);

?>
	<section class="requisitante">
		<form>
			<h2>Formulario de ordem de serviço</h2>
			<div class="setor">
				<div><label>Requisitante</label></div>
				<div><input type="text" name="nome" value="<?php echo $linha['nomeRequisitante']?>" readonly></div>
			</div>
			<div class="setor">
				<div><label>Setor</label></div>
				<div><input type="text" name="nome" value="<?php echo $linha['setor']?>" readonly></div>
				<div><label>Linha</label></div>
				<div><input type="text" name="nome" value="<?php echo $linha['linhaProducao']?>" readonly></div>
			</div>
            <div>
                <div><label>Horário</label></div>
                <div><?php echo $linha['dataRequisicao']?></div>
            </div>
			<div class="setor">
				<div><label>Motivo da requisição(Descrição da ocorrencia)</label></div>
				<div><textarea name="descricao" id="descricao" readonly><?php echo $linha['descricaoRequisicao']?></textarea></div>
			</div>
		</form>
	</section><!--requisitante-->
<?php
?>