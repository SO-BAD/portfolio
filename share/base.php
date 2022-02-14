<?php 
    session_start();

    class DB{
        private $dsn = "mysql:host=localhost;charset=utf8;dbname=portfolio;";
        // private $dsn = "mysql:host=localhost;charset=utf8;dbname=s1100404;";
        private $root ="root";
        // private $root ="s1100404";
        private $password = "";
        // private $password = "s1100404";
        private $pdo;

        public function __construct($table)
        {
            $this->table=$table;
            $this->pdo =new PDO ($this->dsn,$this->root,$this->password);
        }

        public function all(...$arg){
            $sql = "SELECT * FROM $this->table ";
            switch(count($arg)){
                case 1:
                    if(is_array($arg[0])){
                        foreach($arg[0] as $k =>$v){
                            $tmp[] =" `$k` = '$v'";
                        }
                    $sql .= " WHERE ".implode(" AND ", $tmp);
                    }else{
                        $sql .= " ".$arg;
                    }
                    break;
            }
            // echo $sql;
            return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }

        public function save($data){
            if(isset($data['id'])){
                $sql = " UPDATE `$this->table` SET ";
                foreach($data as $key =>$value){
                    $tmp[] = " `$key` = '{$value}'";
                }
                $sql .= implode(",", $tmp) ." WHERE `id` = ". $data['id'];
            }else{
                $sql = "INSERT INTO `$this->table`(`".implode("`,`",array_keys($data))."`) VALUES ('";
                $sql .= implode("','",$data)."')";
            }
            // echo $sql;
            $this->pdo->exec($sql);
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

        public function del($id){
            $sql = "DELETE FROM `$this->table` WHERE ";
            if(is_array($id)){
                foreach($id as $k=>$v){
                    $tmp[] = " `$k` =  '$v'";
                }
                $sql .= implode(" AND ", $tmp);
            }else{
                $sql .= " `id` = '{$id}'";
            }
            $this->pdo->exec($sql);
        }
        public function q($sql){
            return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }

        public function e($sql){
            $this->pdo->exec($sql);
        }


    }
    $Resume = new DB("resume");
    $Skill = new DB("skills");
    $Collection = new DB("collections");
    $Workexp = new DB("workexp");
    $Education = new DB("educations");
    $Css= new DB("Css");

    function dd($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
