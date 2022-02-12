<?php include_once "../share/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>作品集後台管理</title>
    <link rel="stylesheet" href="css/main.css">

</head>

<body onload="adjModal()" onresize="adjModal()">
    <div id= "modalBG" >
        <div id= "modal">

        </div>
    </div>
    <?php
        if(isset($_SESSION['id'])){
            echo "<button onclick='logout()'>登出</button><br>";
            include "./include/skill.php";
            include "./include/collection.php";
        }else{
            include "./include/login.php";
        }
        
    ?>
    


    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src ="./js/main.js"></script>
</body>

</html>