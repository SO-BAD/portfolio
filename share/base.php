<?php 
    session_start();

    class DB{
        private $dsn = "mysql:host=localhost;charset=utf8;dbname=portfolio;";
        private $root ="root";
        private $password = "";
        private $pdo;

        public function __construct($table)
        {
            $this->table=$table;
            $this->pdo =new PDO ($this->dsn,$this->root,$this->password);
        }

        public function all(...$arg){
            $sql = "SELECT * FROM $this->table";

            return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }


    }

?>