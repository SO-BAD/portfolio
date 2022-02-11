<?php
include_once "../../share/base.php";
$DB = new DB($_POST['sort']);

echo json_encode($DB->find($_POST['id']));

?>