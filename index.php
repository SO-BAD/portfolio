<?php include_once "share/base.php"; ?>
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
<?php
$user = ($_GET['user']) ?? 1;

$data = $Resume->find($user);
$sh_arr = explode(",", $data['sh']);

?>

<body>
    <div class="top">
        <nav class="menu">
            <?php if(in_array(0, $sh_arr)) {  ?>
                <div class="menu_items">
                    <a href="#a">INTRO</a>
                </div>
            <?php } ?>
            <?php if(in_array(1, $sh_arr)) {  ?>
                <div class="menu_items">
                    <a href="#b">SKILL</a>
                </div>
            <?php } ?>
            <?php if(in_array(2, $sh_arr)) {  ?>
                <div class="menu_items">
                    <a href="#c">COLLECTIONS</a>
                </div>
            <?php } ?>
        </nav>
    </div>
    <?php
        echo "<input type='hidden' value='" . $user . "'>";
    ?>
    <div class="abc" id="a">

    </div>
    <?php
    if(in_array(0, $sh_arr)) {
        include "include/intro.php";
    }
    ?>
    <div class="abc" id="b">

    </div>
    <?php
    if(in_array(1, $sh_arr)){
        include "include/skill.php";
    }
    ?>
    <div class="abc" id="c">

    </div>

    <?php
    if(in_array(2, $sh_arr)){
        include "include/collection.php";
    }
    ?>

    <footer class="footer">
        <h2>ConTact</h2>
        <span>Email : <?= $Resume->find($user)['email']; ?></span>
    </footer>
    <script>
        $(document).ready(() => {
            let id = document.querySelector("input[type='hidden']").value;
            $.post("api/css.php", {
                id
            }, (res) => {
                let css = JSON.parse(res);
                for (let i = 0; i < css.length; i++) {
                    $(css[i].name).css(css[i].attr, css[i].val);
                    // console.log(css[i].name);
                }
            })
        });
    </script>
</body>

</html>