<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="../../css/light_signUp.css">
    <script src="jquery-3.4.1.js"></script>
</head>
<body>
    <section class="Login_form">
        <h1>Blockchain Community</h1> 
        <form action="../sg/addUserDate.php" method="POST">
            <div class="int_area">
                <input type="text" name="email" id="id"
                autocomplete="off" required>
                <label for="e-mail">E-MAIL</label>
            </div>

            <div class="int_area">
                <input type="password" name="pw" id="pw"
                autocomplete="off" required>
                <label for="pw">PASSWORD</label>
            </div>

            <div class="int_area">
                <input type="text" name="name" id="pw"
                autocomplete="off" required>
                <label for="username">USERNAME</label>
            </div>

            <div class="btn_area">
                <button type="submit">SIGN UP</button>
            </div>
        </form>
    
    </section>

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