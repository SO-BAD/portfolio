<?php
    include_once "../../share/base.php";
    if(strlen(trim($_POST['account'])) == 0 || strlen(trim($_POST['password'])) == 0){
        echo "0";
    }else{
        $row = $Resume->find($_POST);
        if(count($row)){
            $_SESSION['id'] = $row['id'];
            echo "1";
        }else{
            echo "0";
        }
    }
?>