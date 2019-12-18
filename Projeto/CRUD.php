<?php
  require 'conexao.php';

  function create($nome, $email) {
    $link = getConnection();

    $query = "insert into tb_clientes(nome, email) values ('{$nome}', '{$email}')";
     mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  function findByEmail($email) {
    $link = getConnection();
  $query = "select * from tb_clientes where email = '{$email}'";
    $result = mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }

    return mysqli_fetch_assoc($result);
  }

  function findById($id) {
    $link = getConnection();

    $query = "select * from tb_clientes where id = '{$id}'";

    $result = mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }

    return mysqli_fetch_assoc($result);
  }

  function deleteClient($id) {
    $link = getConnection();

    $query = "delete from tb_clientes where id = '{$id}'";

    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  function update($id, $nome, $email) {
    $link = getConnection();
    $query = "update tb_clientes set nome = '{$nome}', email = '{$email}' where id = {$id}";

    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }
  function listClient() {
    $link = getConnection();

    $query = "select * from tb_clientes";

    $result = mysqli_query($link, $query);

    $clients = array();

    while($client = mysqli_fetch_assoc($result)) {
      array_push($clients, $client);
    }

    if(!$link) {
      mysqli_close($link);
    }

    return $clients;
  }