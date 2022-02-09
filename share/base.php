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

        public function find($id){
            $sql = "SELECT * FROM $this->table WHERE ";
            if(is_array($id)){
                foreach($id as $key =>$value){
                    $tmp[] = " `$key` = '{$value}'";
                }
                $sql .= implode(" AND ", $tmp);
            }else{
                $sql .= " `id` = $id";
            }

            return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        }

    }
    $Resume = new DB("resume");
    $Skill = new DB("skills");
    $Collection = new DB("collections");
?>