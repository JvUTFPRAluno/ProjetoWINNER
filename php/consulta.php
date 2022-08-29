<?php 
    include 'config.php';
    require_once 'verifica_sessao.php';

    verifica_conectado(1);

    $previlegio = $_SESSION['USUARIOPREV'];
    
function n_concluidos(){
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
        <td><a href="requisicao.php?id=<?php echo $row['id'] ?>" <?php mostra_botao(1) ?>>Resolver</a></td>
    </tr>
<?php
    }
}
function concluidos(){
    include 'config.php';
    $sql = "SELECT * FROM ordemservico WHERE concluido = '1' ";
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
        <td><a href="editar.php?id=<?php echo $row['id'] ?>" <?php mostra_botao(2) ?>>editar</a>
        <a href="php/excluir.php?id=<?php echo $row['id']?>" <?php mostra_botao(2) ?>>excluir</a></td>
    </tr>
<?php
    }
}
    mysqli_close($conn);
?>