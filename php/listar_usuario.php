<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <!--Link do Font Awesome-->
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>

    <title>Usuários Cadastrados</title>
</head>

<body>
    <nav class="navbar bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>

    <div class="container">
        <h1>Lista de Usuários</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">SETOR</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <!-- PHP -->
                <?php 
                    // INCLUINDO O ARQUIVO DE CONEXÃO 
                    include 'conexao.php';
                
                    // INSTRUÇÃO DO SQL PARA CAPTURAR TODOS OS DADOS DO BANCO
                    $select = "SELECT * FROM tb_user";

                    // FUNÇÃO QUERY EXECUTA O SELECT DENTRO DO BANCO
                    $query = $conexao->query($select);

                    // ARMAZENA A 1ª LINHA DO BD DENTRO DA VARIAVEL RESULTADO 
                    while ($resultado = $query->fetch_assoc()) {              
                ?>
                <tr>
                    <th scope="row"> <?php echo $resultado ['id_user']?> </th>
                                <td> <?php echo $resultado ['nm_user']?> </td>
                                <td> <?php echo $resultado ['email']?> </td>
                                <td> <?php echo $resultado ['setor']?> </td>
                                <td> <a href="delete_user.php?codigo=<?php echo $resultado ['id_user']?>"><i class="fa-solid fa-trash-can"></i> </a> </td>
                                <td> <a href="update_user.php?codigo=<?php echo $resultado ['id_user']?>"> <i class="fa-solid fa-user-pen"></i> </a> </td>
                </tr>

                <?php  };  ?>
             </tbody>
        </table>
    </div>
</body>

</html>