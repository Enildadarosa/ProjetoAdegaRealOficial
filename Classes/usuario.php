<?php
    Class Usuario
    {
        private $pdo;

        public function cadastrarUsuario($nome, $telefone, $email, $senha){
            global $pdo;
                
            $usuario = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
            $usuario->bindValue(":e", $email);
            $usuario->execute();

            if($usuario->rowCount() > 0){
                return false;
            }
            else{
                $usuario = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
                $usuario->bindValue(":n", $nome);
                $usuario->bindValue(":t", $telefone);
                $usuario->bindValue(":e", $email);
                $usuario->bindValue(":s", md5($senha));
                $usuario->execute();
                return true;

            }
        }
    }


?>