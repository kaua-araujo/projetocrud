<?php
//classe da conexao com o banco
    class conexao{
        private $usuario;
        private $host;
        private $password;
        private $banco;
        private $sql;
        private $pdo;

        function conexao()
        {
            $this->host = 'localhost';
            $this->banco = 'crud';
            $this->usuario = 'root';
            $this->password = 'mysql';
        }

        function conectar()
        {
            try {
                $this->pdo = new PDO("mysql:dbname=crud;host=127.0.0.1", $this->usuario, $this->password);
            } catch(PDOException $erros) {
                echo $erros->getMessage();
            }
        }

        function getPdo()
        {
            return $this->pdo;
        }
    }
?> 