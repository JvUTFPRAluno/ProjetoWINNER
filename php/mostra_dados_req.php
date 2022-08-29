<?php
    include 'config.php';//inicia o banco de dados

    $id = $_GET['id'];// pega o id da requisição a ser resolvida
    $tempoInicio = date('Y-m-d H:i'); // atribui o tempo e a data atual 
	
    //query que atribui o valor da variavel '$tempoInicio' a coluna dataInicio
    $sql2 = "UPDATE ordemservico SET `dataInicio` = '$tempoInicio' WHERE `id` = '$id'";
    mysqli_query($conn, $sql2);//executa query

    $sql = "SELECT * FROM `ordemservico` WHERE id = $id LIMIT 1";//query que pega os dados onde a coluna id = '$id'
    $result = mysqli_query($conn, $sql);//executa a query e adiciona o resultado a variavel '$result'  
    $linha = mysqli_fetch_array($result);//adiciona os dados de '$result' em '$linha' como uma array

    // atribui esse valor a um formulario que não pode ser enviado (serve apenas para consulta)
?>
	<section class="requisitante">
		<form>
			<h2>Formulario de ordem de serviço</h2>
			<div class="setor">
				<div><label>Requisitante</label></div>
				<div><input type="text" name="nome" value="<?php echo $linha['nomeRequisitante']?>" disabled></div>
			</div>
			<div class="setor">
				<div><label>Setor</label></div>
				<div><input type="text" name="nome" value="<?php echo $linha['setor']?>" disabled></div>
				<div><label>Linha</label></div>
				<div><input type="text" name="nome" value="<?php echo $linha['linhaProducao']?>" disabled></div>
			</div>
            <div>
                <div><label>Horário</label></div>
                <div><?php echo $linha['dataRequisicao']?></div>
            </div>
			<div class="setor">
				<div><label>Motivo da requisição(Descrição da ocorrencia)</label></div>
				<div><textarea name="descricao" id="descricao" disabled><?php echo $linha['descricaoRequisicao']?></textarea></div>
			</div>
		</form>
	</section><!--requisitante-->
<?php
?>
