<?php
    
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['cpf']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }
    
    
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['cpf']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }
    
  // Tenta se conectar ao servidor MySQL
  mysql_connect('localhost', 'root', '') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  mysql_select_db('cpf') or trigger_error(mysql_error());
    
  $usuario = mysql_real_escape_string($_POST['cpf']);
  $senha = mysql_real_escape_string($_POST['senha']);
    
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['cpf']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }
    
  // Tenta se conectar ao servidor MySQL
  mysql_connect('localhost', 'root', '') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  mysql_select_db('cpf') or trigger_error(mysql_error());
    
  $usuario = mysql_real_escape_string($_POST['usuario']);
  $senha = mysql_real_escape_string($_POST['senha']);
    
  // Validação do usuário/senha digitados
  $sql = "SELECT `cpf`, `senha`, `nivel` FROM `usuarios` WHERE (`cpf` = '".$cpf ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
  $query = mysql_query($sql);
  if (mysql_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysql_fetch_assoc($query);
  }
    
  if (mysql_num_rows($query) != 1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    echo "Login inválido!"; exit;
} else {
    // Salva os dados encontrados na variável $resultado
    $resultado = mysql_fetch_assoc($query);
  
    // Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) session_start();
  
    // Salva os dados encontrados na sessão
    $_SESSION['UsuarioCpf'] = $resultado['cpf'];
    $_SESSION['UsuarioEmail'] = $resultado['senha'];
    $_SESSION['UsuarioNivel'] = $resultado['nivel'];
  
    // Redireciona o visitante
    header("Location: restrito.php"); exit;
}
    
  ?>