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
    }
</style>

<form class="login">
  <div class="form-group">
    <label for="acc">Account</label>
    <input type="email" class="form-control" id="acc" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="pw">Password</label>
    <input type="password" class="form-control" id="pw">
  </div>
  <button type="button" onclick="login_ck()" class="btn btn-primary">Submit</button> 
</form>


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