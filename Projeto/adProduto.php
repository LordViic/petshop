<?php 
      include 'conexao.php';
      $fotoProduto   = $_POST['fotoProduto'];
      $nomeProduto   = $_POST['nomeProduto'];
      $custo         = $_POST['custo'];
      $preco         = $_POST['preco'];
      $marca         = $_POST['marca'];
      $estoque       = $_POST['estoque'];
      $categoria     = $_POST['categoria'];
      $obs           = $_POST['obs'];

      $sql = "INSERT INTO produtos VALUES"
      $sql .= "('foto', 'nome', 'custo, 'preco', 'marca ', 'estoque', 'categoria', 'obs')";
      mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
      mysqli_close($link);
      echo "Cliente cadastrado com sucesso!";
      ?>