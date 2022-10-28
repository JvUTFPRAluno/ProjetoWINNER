<?php 

function verifica_conectado ($num){

// A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $nivel_necessario = $num;

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['USUARIOCOD']) OR ($_SESSION['USUARIOPREV'] <$nivel_necessario)) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: login.php"); exit;
  }
}

function mostra_botao($num){
  if($_SESSION['USUARIOPREV']<$num){
    print('style="display:none"');
  }
}
?>