<?php 
<<<<<<< HEAD
    include 'config.php';
    require_once 'verifica_sessao.php';

    verifica_conectado(1);

    $previlegio = $_SESSION['USUARIOPREV'];
    
function n_concluidos(){
    include 'config.php';
    $sql = "SELECT * FROM ordemservico WHERE concluido = '0' ";
    $dados = mysqli_query($conn,$sql);
=======
    include 'config.php';//efetua a conexão com o banco de dados
    include 'verifica_sessao.php';//adiciona o sistema de sessão no pagina

    $previlegio = $_SESSION['USUARIOPREV'];//atribui o previlegio do usuario a variavel '$previlegio'

    $sql = "SELECT * FROM ordemservico WHERE concluido = '0' ";//query que procura no banco de dados ordens de serviço que ainda não estão concluidas
    $dados = mysqli_query($conn,$sql);//executa a query e atribui o resultado a variavel '$dados'
>>>>>>> 8b79d92eda053fc7cbcb704fb7e3914a51c2de21

    while($row = mysqli_fetch_array($dados)){//enquanto houver dados na array '$dados', atribuiu o valor linha por linha a variavel '$row'
    
    //cria uma linha na table onde é chamado esse procedimento preenchendo com os dados atuais de '$row'
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
<<<<<<< HEAD
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
=======
    mysqli_close($conn);//fecha a conexão com o banco de dados
?>
>>>>>>> 8b79d92eda053fc7cbcb704fb7e3914a51c2de21
