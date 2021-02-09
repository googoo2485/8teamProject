<?php
include 'idConnect.php';
include 'session_loginCheck.php';
$userID = $_SESSION["userID"];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "
INSERT INTO post (title,id,content,created,views)
VALUES('$title','$userID','$content',NOW(),'0'
)";

$result = mysqli_query($conn,$sql);
if($result){
    echo 'sign up success';
    ?>
    <script>alert("게시글을 작성하셨습니다.")</script>
    
    <?php

    header('Location:../sub/commu.php?after');
}

?>