<?php
    include_once "../../share/base.php";
    if(isset($_POST['account'])){
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
    }

    if(isset($_POST['logout'])){
        unset($_SESSION['id']);
    }
    
?>