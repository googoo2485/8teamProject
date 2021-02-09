<?php include 'session_loginCheck.php'; ?>
<?php include 'idConnect.php';

$ID=$_SESSION["userID"];
$idx = $_REQUEST['idx'];
$title = $_REQUEST['title'];
$content  = $_REQUEST['content'];
$sql_view = "update post set title='$title',content='$content' where idx = '$idx'";


if($result_view = mysqli_query($conn,$sql_view)){
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


