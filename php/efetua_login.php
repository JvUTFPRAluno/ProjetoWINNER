<?php
    if (!empty($_POST) AND (empty($_POST['login_codigo']) OR empty($_POST['login_senha']))) {
        header("Location: ../index.php"); exit;
    }

    include 'config.php';
    
    $codigo = $_POST['login_codigo'];
    $senha = $_POST['login_senha'];

    $sql = "SELECT * FROM usuarios WHERE codigo = '$codigo' AND senha = '$senha' LIMIT 1";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) != 1){
        echo('<script>alert("Codigo e/ou Senha incorretos!!!");</script>');
        header("Location: ../login.php");
        exit;
    }

    $resultado = mysqli_fetch_array($result);

    if (!isset($_SESSION)) session_start();

    $_SESSION['USUARIOCOD'] = $resultado['codigo'];
    $_SESSION['USUARIOSENHA'] = $resultado['senha'];
    $_SESSION['USUARIOPREV'] = $resultado['previlegio'];

    header("Location: ../ordens.php");
    exit;
?>