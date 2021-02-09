<?php include 'session_loginCheck.php'; ?>
<?php 
include 'idConnect.php';

$title = $_POST['title'];
$content = $_POST['content'];
$idx = $_GET['idx'];
$sql = "update post set title='$title',content='$content' where idx ='$idx' ";

$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));


if($result){
    ?>
    <script>alert("내용이 수정되었습니다.")</script>
<?php





$link = "view.php?idx=$idx";
header("Location:".$link);
}
else{
?><script>alert("변경이 취소되었습니다.")</script>

<?php
}



?>