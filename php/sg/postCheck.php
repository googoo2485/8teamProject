<?php
session_start();
include 'idConnect.php';

$title = $_POST['title'];
$content = $_POST['content'];

$view = 1;



$sql = "
INSERT INTO post (title,content,created,views)
VALUES('$title','$content',NOW(),'$view'
)";

$result = mysqli_query($conn,$sql);
if($result){
    echo 'sign up success';
    ?>
    <script>alert("게시글을 등록하셨습니다.")</script>
    <?php
    header('Location:./post.php');
}
?>