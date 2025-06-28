<?php
// CAPTURA O VALOR NA URL DO SITE
$id = $_GET['codigo'];

// INCLUINDO O ARQUIVO DE CONEXÃO 
include 'conexao.php';

// INSTRUÇÃO DO SQL PARA CAPTURAR USUARIO DIGITADO NA TELA DE LOGIN
$select = "SELECT * FROM tb_user WHERE id_user = '$id'";

// FUNÇÃO QUERY EXECUTA O SELECT DENTRO DO BANCO
$query = $conexao->query($select);

// ARMAZENA A 1ª LINHA DO BD DENTRO DA VARIAVEL RESULTADO 
$resultado = $query->fetch_assoc();

// VERIFICA SE O FORMULÁRIO FOI ENVIADO
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $setor = $_POST['setor'];

    // INSTRUÇÃO SQL PARA FAZER O UPDATE
    $update = "UPDATE tb_user SET nm_user = '$nome', email = '$email', setor = '$setor' WHERE id_user = '$id'";

    // EXECUTA O UPDATE
    if ($conexao->query($update) === TRUE) {
        echo "<script>alert('Usuário atualizado com sucesso!'); window.location.href='listar_usuario.php';</script>";
    } else {
        echo "Erro ao atualizar: " . $conexao->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pr-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>

<body>
    <div class="container">
        <aside>
            <img src="images/Img_Cadastro.png" alt="">
        </aside>
        <form action="#" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?php echo $resultado['nm_user']; ?>" id="nome">

            <label for="email">Email</label>
            <input type="text" name="email" value="<?php echo $resultado['email']; ?>" id="email">

            <label for="setor">Setor</label>
            <input type="text" name="setor" value="<?php echo $resultado['setor']; ?>" id="setor">

            <div class="botao">
                <button type="submit">Editar</button>
                <a href="listar_usuario.php">Voltar</a>
            </div>
        </form>
    </div>

</body>

</html>

