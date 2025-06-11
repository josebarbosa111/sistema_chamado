<?php

include 'conexao.php';

//trazendo os dados do formulario

$nome = $_POST['nome'];
$email = $_POST['email'];
$setor = $_POST['setor'];
$senha = $_POST['senha'];
    

$sql = "INSERT INTO `tb_user` VALUES (NULL, '$nome', '$email', '$setor', '$senha');";

if ($conexao->query($sql) === TRUE) {
  echo "<script>alert('Usuario cadastrado com sucesso'); history.back() </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>