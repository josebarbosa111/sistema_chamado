<?php
// RECEBER OS DADOS DA TELA DE LOGIN
$email = $_POST ['email'];
$senha = $_POST ['senha'];

// INCLUINDO O ARQUIVO DE CONEXÃO 
include 'conexao.php';

// INSTRUÇÃO DO SQL PARA CAPTURAR USUARIO DIGITADO NA TELA DE LOGIN
$select = "SELECT * FROM tb_user WHERE email = '$email'";

// FUNÇÃO QUERY EXECUTA O SELECT DENTRO DO BANCO
$query = $conexao->query($select);

// ARMAZENA A 1ª LINHA DO BD DENTRO DA VARIAVEL RESULTADO 
$resultado = $query->fetch_assoc(); 

// 
$email_banco = $resultado ['email'];
$senha_banco = $resultado ['senha'];

// COMPARA INFORMAÇÕES DO INDEX COM O BANCO
if ($email == $email_banco && $senha == $senha_banco) {
    header('location: ../home.html');
}else {
    echo "<script>alert('Usuário ou Senha incorreto'); history.back() </script>";
}

?>
