<?php
$hostname_conn = "localhost";
$database_conn = "PetShop";
$username_conn = "root";
$password_conn = "";
$port_conn ="3306";
if(!($conn = mysql_connect($hostname_conn,$username_conn,$password_conn))) 
{
   echo "Erro ao conectar ao MySQL.";
   exit;
}
if(!($con = mysql_select_db($database_conn,$conn))) 
{
   echo "Erro ao selecionar ao MySQL.";
   exit;
}
?>