<?php
    include_once "../share/base.php";
    $rows = $Css->all(['resume_id'=>$_POST['id']]);
    echo json_encode($rows);
?>