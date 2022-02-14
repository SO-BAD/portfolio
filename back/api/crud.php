<?php
    include_once "../../share/base.php";
    


    function cuSQL($e){
        switch($e){
            case 'c':
                $sql = "INSERT INTO `{$_POST['sort']}`(`".implode("`,`",$_POST['col'])."`, `resume_id` ) VALUES ('";
                $sql .=  implode("','",$_POST['data'])."','".$_SESSION['id']."')";
                return $sql;
            case 'u':
                $sql = " UPDATE `{$_POST['sort']}` SET ";
                for($i = 0 ; $i< count($_POST['col']);$i++){
                    $tmp[] = "`".$_POST['col'][$i] ."`='" .$_POST['data'][$i]."'";
                }
                $sql .= implode(" , ", $tmp) ." WHERE `id` = '". $_POST['id']."' AND `resume_id` = '".$_SESSION['id']."'";
                return $sql;
        }
    }
    if(isset($_POST['e'])){
        $DB = new DB($_POST['sort']);
        switch($_POST['e']){
        case 'r':
            if($DB->find($_POST['id'])['resume_id'] == $_SESSION['id']){
                echo json_encode($DB->find($_POST['id']));
            }
            break;
        case 'd':
            if($DB->find($_POST['id'])['resume_id'] == $_SESSION['id']){
                $DB->del($_POST['id']);
            }
            break;
        default:
            $DB->e(cuSQL($_POST['e']));
            // echo(cuSQL($_POST['e']));
            break;
        }
    }
    
    if(isset($_FILES['img']['tmp_name'])){
        move_uploaded_file($_FILES['img']['tmp_name'], '../../img/'.$_POST['sort']."/".$_FILES['img']['name']);
        if($_POST['event']=="u"){
            $DB = new DB("resume");
            $DB->save(['id'=>$_SESSION['id'],'img'=>$_FILES['img']['name']]);
        }
    }

    

?>