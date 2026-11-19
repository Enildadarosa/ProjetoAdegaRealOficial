<?php
    require "../Classes/usuario.php";
    require "../PHP/conexao.php";
    $usuario = new Usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="">Nome:</label>
        <input type="text" name="nome" id="" placeholder="Digite seu nome">
        <label for="">Email</label>
        <input type="email" name="email" id="" placeholder="Digite seu email">
        <label for="">Telefone</label>
        <input type="tel" name="Telefone" id="" placeholder="Digite seu telefone">
        <label for="">Senha:</label>
        <input type="password" name="senha" id="" placeholder="Crie sua senha">
        <label for="">Confirmar Senha:</label>
        <input type="password" name="confSenha" id="" placeholder="Confirme sua senha">
        <input type="submit" value="CADASTRAR">
        <p>Já é cadastrado? Clique <a href="login.html">aqui</a> para logar.</p>
    </form>

    <?php   
        if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['Telefone'];
            $senha = $_POST['senha'];
            $confSenha = $_POST['confSenha'];
            
            if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha) && !empty($confSenha))
            {
               if($senha == $confSenha)
                {
                    $usuario->cadastrarUsuario($nome, $telefone, $email, $senha);
                }
            }
        }

    ?>

</body>

</html>