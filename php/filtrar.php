<?php
    require 'config.php';

    $sql = "SELECT * FROM `ordemservico` WHERE ";


    if(isset($_POST['setorFiltro'])){
        $setor = $_POST['setorFiltro'];
        $sql.= "setor = '$setor'";
    }
    if(isset($_POST['linhaFiltro'])){
        $linha = $_POST['linhaFiltro'];
        if($_POST['setorFiltro'] == "Produção"){
            $sql .= "AND linhaProducao = '$linha'";
        }
    }
    if(isset($_POST['intDataInicio']) && $_POST['intDataInicio']!= null && isset($_POST['intDataFim']) && $_POST['intDataFim'] != null){
        //verifica se já tem mais uma condição na query e se houver adiciona o AND
        isset($_POST['setorFiltro'])||isset($_POST['linhaFiltro'])?$sql.=" AND ":$sql.="";

        $dataInicio = $_POST['intDataInicio'];
        $dataFim = $_POST['intDataFim'];
        $sql .= "dataRequisicao BETWEEN '$dataInicio' AND '$dataFim'";
    }

    $result = mysqli_query($conn, $sql);
    
function dadosFiltrados($result){
    if(mysqli_num_rows($result) < 1){
        echo ('<div class="N_registro"><h2>NENHUM REGISTRO FOI ENCONTRADO!!!<h2></div>');
    }else{

        while($row = mysqli_fetch_array($result)){
?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['nomeRequisitante'] ?></td>
                <td><?php echo date('d/m/Y H:i', strtotime($row['dataRequisicao']))?></td>
                <td><?php echo $row['setor'] ?></td>
                <td><?php echo $row['linhaProducao'] ?></td>
                <td><?php echo $row['descricaoRequisicao'] ?></td>
                <td><a href="imprimirReq.php?id=<?php echo $row['id']?>">Imprimir</a></td>
            </tr>
<?php
    }
    }
}
    //mysqli_close($conn);
?>
