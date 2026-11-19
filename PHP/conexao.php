<?php

    $host = "localhost";
    $porta = "3306";
    $banco = "adega";
    $user = "root";
    $password = "";

    try{
        //se os dados estiverem corretos vai executar esse bloco de notas
        $dns = "mysql:host=$host;port=$porta;dbname=$banco;charset=utf8mb4";

        $pdo = new PDO($dns, $user, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        echo("Conectou bebê");

    }catch(PDOException $erro){
        //mostrar o erro e vai tratar
        echo("Erro de Conexão:".$erro->getMessage());

    }


?>