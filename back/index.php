<?php include_once "../share/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>作品集後台管理</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
        }

        body {
            width: 100%;
        }

    </style>

</head>

<body>
    <?php
        if(isset($_SESSION['id'])){
            echo "<h2>Skill</h2>";
            include "./include/skill.php";
            echo "<h2>Collection</h2>";
            include "./include/collection.php";
        }else{
            echo "<a href='./login.php'>登入</a>";
        }
        
    ?>
    


    <script src="../js/jquery-3.6.0.min.js"></script>

    <script>
       
    </script>
</body>

</html>