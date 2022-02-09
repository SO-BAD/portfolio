<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>作品集後台登入</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .login {
            margin-top: 100px;
            padding: 10px;
            width: 200px;
            height: 80px;
            background-color: bisque;
        }
    </style>

</head>

<body>
    <div class="login">
        <div>acc <input type="text" id="acc"></div>
        <div>pw <input type="password" id="pw"></div>
        <div><input type="button" value="登入" onclick="login_ck()"> <a href="./index.php"> 首頁</a></div>
        
       
    </div>


    <script src="../js/jquery-3.6.0.min.js"></script>

    <script>
        function login_ck() {

            $.post("./api/login_ck.php", {
                account: document.querySelector("#acc").value,
                password: document.querySelector("#pw").value
                },
                function(res) {
                    if (res == 0) {
                        alert("帳號或密碼錯誤，請重新輸入");
                    } else {
                         window.location.href = './index.php';
                    }
                }
            );
        }
    </script>
</body>

</html>