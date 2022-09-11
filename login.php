<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>usuario</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="js/jquery.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body style="background-color: black;">
    <div class="login">
        <form method="POST" action="php/efetua_login.php" id="login">
            <h2>LOGIN</h2>
            <div>
                <p>Codigo</p>
                <input type="text" name="login_codigo" required placeholder="Insira seu codigo..." autocomplete="off" >
            </div>
            <div>
                <p>Senha</p>
                <input type="password" name="login_senha" required placeholder="Insira sua senha...">
            </div>
            <input type="submit" value="enviar">
            <input type="reset">
        </form> 
    </div><!--login-->
<?php
    if($_GET['exp'] == 1){
        echo('<script>alert("Codigo e/ou Senha incorretos!!!");</script>');
    }
    include 'parts/footer.php';
?>