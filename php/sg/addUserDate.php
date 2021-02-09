<?php
include 'idConnect.php';

$id = $_POST['name'];
$pw = $_POST['pw'];
$email = $_POST['email'];

$check = "SELECT * FROM user WHERE name ='$id'";
$result = $conn->query($check);
if($result->num_rows==1){?>
<script>alert("이미 있는 아이디입니다.")</script>
<script>history.back();</script>
<?php
exit();
}

$sql = "
INSERT INTO user (name,pw,email,created)
VALUES('$id','$pw','$email',NOW()
)";

$result = mysqli_query($conn,$sql);
if($result){
    echo 'sign up success';
    ?>
    <script>alert("회원가입에 성공하셨습니다.")</script>
    
    <?php
    header('Location:../light/login.php');
}

?>