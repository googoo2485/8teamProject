<?php

include 'idConnect.php';

$id = $_POST['id'];
$pw = $_POST['pw'];

$check = "SELECT * FROM user WHERE name ='$id' and pw = '$pw'";
$result = $conn->query($check);
if($result->num_rows==1){?>

<script>alert("로그인 성공"); </script>
<?php header('location:/php/sg/index_result.php'); 
   


}
else{
    ?>
    <script>alert("로그인에 실패하셨습니다.")</script>
    <script>history.back();</script>
<?php
   exit();
}

?>