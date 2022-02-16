<?php include_once "../share/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>作品集後台管理</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/base.js"></script>
</head>

<body onload="adjModal()" onresize="adjModal()">
    <div id="modalBG">
        <div id="modal">

        </div>
    </div>
    <?php
    if (isset($_SESSION['id'])) {    ?>

        <div class='page'>
            <nav class='menu list-group'>
                <div class="list-group-item "><?= $Resume->find($_SESSION['id'])['name']; ?><button class="btn btn-dark" onclick='logout()' style="margin-left:40px;">登出</button></div>
                <div class="list-group-item"><a href='?'>Resume</a></div>
                <div class="list-group-item"><a href='?do=education'>Education</a></div>
                <div class="list-group-item"><a href='?do=workexp'>Workexp</a></div>
                <div class="list-group-item"><a href='?do=skill'>Skill</a></div>
                <div class="list-group-item"><a href='?do=collection'>Collection</a></div>
                <div class="list-group-item"><a href='?do=css'>CSS</a></div>

            </nav>
            <div class='section'>
            <?php
            if (isset($_GET['do']) && file_exists(("./include/" . $_GET['do'] . ".php"))) {
                $str = "./include/" . $_GET['do'] . ".php";
                include $str;
            } else {
                include "./include/resume.php";
            }
            echo "</div>";
            echo "</div>";
        } else {
            include "./include/login.php";
        }
            ?>


</body>

</html>