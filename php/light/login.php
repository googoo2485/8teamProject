<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/light_Login!.css">
    <script src="jquery-3.4.1.js"></script>
</head>
<body>
    <div class = "login">
        <section class="Login_form">
            <h1>Blockchain Community</h1> 
            <form action="/php/sg/login_check.php" method="POST">
                <div class="int_area">
                    <input type="text" name="id" id="id"
                    autocomplete="off" required>
                    <label for="id">USER NAME</label>
                </div>
    
                <div class="int_area">
                    <input type="password" name="pw" id="pw"
                    autocomplete="off" required>
                    <label for="pw">PASSWORD</label>
                </div>
    
                <div class="btn_area">
                    <button type="submit">LOGIN</button>
                </div>
            </form>
    
            <div class="caption">
                <a href="/php/light/signUp.php">Forgot Password?</a>
            </div>
        </section>
    </div>
    <script>
        let id = $('id');
        let pw = $('pw');
        let btn = $('btn');

        $(btn).on('click', function() {
            if($(id).val() == "") {
                $(id).next('label').addClass('warning');
                setTimeout(function () {
                    $('label').removeClass('warning');
                },1500);
            }
            else if($(pw).val() == "") {
                $(pw).next('lable').addClass('warning');
                setTimeout(function () {
                    $('label').removeClass('warning');
                },1500);
            }
        })
    </script>
    
</body>
</html>