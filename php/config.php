<?php

	$servername ="localhost";
	$database ="winner";
	$username ="root";
	$senha = "";

	$conn = mysqli_connect($servername,$username,$senha,$database) or die('ERRO!!' . mysqli_connect_error());

	date_default_timezone_set('America/Sao_Paulo');

?>