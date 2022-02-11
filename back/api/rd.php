<?php
    include_once "../../share/base.php";

    // print_r($_POST);
    $DB = new DB($_POST['sort']);

    switch($_POST['e']){
        case 'del':
            $DB->del($_POST['id']);
            echo "del";
            break;
        
        case 'edit':
            echo json_encode($DB->find($_POST['id']));
            break;
    }

?>