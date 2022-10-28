<?php 
    include 'config.php';

    $sql = "SELECT * FROM ordemservico WHERE concluido = '1' ";
    $dados = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($dados)){
?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nomeRequisitante'] ?></td>
        <td><?php echo date('d/m/Y H:i', strtotime($row['dataRequisicao']))?></td>
        <td><?php echo $row['setor'] ?></td>
        <td><?php echo $row['linhaProducao'] ?></td>
        <td><?php echo $row['descricaoRequisicao'] ?></td>
        <td>
            <a href="ordem.php?id=<?php echo $row['id'] ?>">Abrir</a>
            <a href="imprimirReq.php?id=<?php echo $row['id'] ?>">Imprimir</a>
        </td>
    </tr>
<?php
    }
?>