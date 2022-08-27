<?php 
    include 'config.php';
    include 'verifica_sessao.php';
    $previlegio = $_SESSION['USUARIOPREV'];

    $sql = "SELECT * FROM ordemservico";
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
        <td><a href="ordem.php?id=<?php echo $row['id'] ?>" <?php $previlegio>1?print('style="display:none;"'):''?>>abrir</a>
        <a href="editar.php?id=<?php echo $row['id'] ?>">editar</a>
        <a href="php/excluir.php?id=<?php echo $row['id'] ?>">excluir</a></td>
    </tr>
<?php
    echo($previlegio);
    }
    mysqli_close($conn);
?>