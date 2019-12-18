<?php 
      include 'conexao.php';
      $cpf           = $_POST['cpf'];
      $nomeCliente   = $_POST['nomeCliente'];
      $nascimento    = $_POST['nascimento'];
      $telefone      = $_POST['telefone'];
      $email         = $_POST['email'];
      $senha         = $_POST['senha'];
      $cep           = $_POST['cep'];
      $logradouro    = $_POST['logradouro'];
      $bairro        = $_POST['bairro'];
      $cidade        = $_POST['cidade'];
      $uf            = $_POST['uf'];
      $numero        = $_POST['numero'];
      $complemento   = $_POST['complemento'];

      $sql = "INSERT INTO cliente VALUES"
      $sql .= "('cpf', 'nome', 'nascimento, 'telefone', 'email', 'cep', 'logradouro', 'bairro', 'cidade', 'uf', 'numero', 'complemento')";
      mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
      mysqli_close($link);
      echo "Cliente cadastrado com sucesso!";
      ?>