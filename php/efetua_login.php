<?php
    //procedimento que efetua o inicio de sessão a partir do login correto do usuario 
    if (!empty($_POST) AND (empty($_POST['login_codigo']) OR empty($_POST['login_senha']))) {//verifica se não existe algum campom vazio
        header("Location: ../index.php"); exit;// se houver redirecionado o usuario para o index
    }

    include 'config.php';//inicia o banco de dados
    
    //pega as variaveis e as atribui pelo metodo POST
    $codigo = $_POST['login_codigo'];
    $senha = $_POST['login_senha'];

    //query que procura no banco de dado, alguma correspondencia com os dados do login
    $sql = "SELECT * FROM usuarios WHERE codigo = '$codigo' AND senha = '$senha' LIMIT 1";
    $result = mysqli_query($conn,$sql);//executa a query

    if(mysqli_num_rows($result) != 1){
        print('<script>alert("Codigo e/ou Senha incorretos!!!");</script>');
        header("Location: ../login.php?exp=1");
        exit;
    }

    $resultado = mysqli_fetch_array($result);//se as condições se cumprirem adiciona os dados a variavel '$resultado'

    if (!isset($_SESSION)) session_start();//inicia a sessão

    //atribui os dados a sessão
    $_SESSION['USUARIOCOD'] = $resultado['codigo'];
    $_SESSION['USUARIOSENHA'] = $resultado['senha'];
    $_SESSION['USUARIOPREV'] = $resultado['previlegio'];

    header("Location: ../ordens.php");//redireciona para ordens 
    exit;//mata o codigo
?>