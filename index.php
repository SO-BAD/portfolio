<?php include_once "share/base.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>作品集</title>
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="top">
        <nav class= "menu">
            <div class="menu_items">
                <a href="#a">HOME</a>
            </div>
            <div class="menu_items">
                <a href="#b">SKILL</a>
            </div>
            <div class="menu_items">
                <a href="#c">COLLECTIONS</a>
            </div>
        </nav>
    </div>
    <div class="abc" id ="a">

    </div>
    <div id="intro">
        32132132
    </div>
    <div class="abc" id ="b">

    </div>
    <?php include "include/skill.php";?>
    <div class="abc" id ="c">

    </div>

    <?php include "include/collection.php";?>
    
    <footer class="footer">
                <h2>ConTact</h2>
                <span>Email : abc@gmail.com</span>
    </footer>
</body>

</html>