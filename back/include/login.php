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

<div class="login">
    <div>acc <input type="text" id="acc"></div>
    <div>pw <input type="password" id="pw"></div>
    <div><input type="button" value="登入" onclick="login_ck()"> <a href="./index.php"> 首頁</a></div>


</div>


<script>
    function login_ck() {

        $.post("./api/session.php", {
                account: document.querySelector("#acc").value,
                password: document.querySelector("#pw").value
            },
            function(res) {
                if (res == 0) {
                    alert("帳號或密碼錯誤，請重新輸入");
                } else {
                    location.reload();
                }
            }
        );
    }
</script>