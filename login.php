
<?php
    include 'php/config.php';
?>
<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>usuario</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<script src="js/scripts.js"></script>
</head>
<body style="background-color: black;">
    <div class="login">
        <form method="POST" action="php/efetua_login.php">
            <h2>LOGIN</h2>
            <div>
                <p>Codigo</p>
                <input type="text" name="login_codigo" required placeholder="Insira seu codigo...">
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
    include 'parts/footer.php';
?>