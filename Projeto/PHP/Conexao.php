<?php

  function pegaConexao()
  {
    $servidor = "localhost";
    $banco = "PetShop";
    $usuario = "root";
    $senha = "";
    $porta = "3306";

    $link = mysqli_connect($servidor, $usuario, $senha, $banco, $porta);
    mysqli_set_charset($link, "utf8");
    return $link;
  }