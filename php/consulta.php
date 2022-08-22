<?php 
    include 'config.php';

    $sql = "SELECT * FROM ordemservico WHERE concluido = '0' ";
    $dados = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($dados)){
?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nomeRequisitante'] ?></td>
        <td><?php echo $row['dataRequisicao'] ?></td>
        <td><?php echo $row['setor'] ?></td>
        <td><?php echo $row['linhaProducao'] ?></td>
        <td><?php echo $row['descricaoRequisicao'] ?></td>
        <td><a href="requisicao.php?id=<?php echo $row['id'] ?>">abrir</a>
        <a href="php/edita_relatorio.php?id=<?php echo $row['id'] ?>">editar</a>
        <a href="php/exclui_relatorio.php?id=<?php echo $row['id'] ?>">excluir</a></td>
    </tr>
<?php
    }
    mysqli_close($conn);
?>