<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "db_sistema_chamado";

// Create connection
$conexao = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
}

?>