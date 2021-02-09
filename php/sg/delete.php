<?php 


include './session_loginCheck.php';
include 'idConnect.php';
$check ="select id from post where idx = $_GET[idx]";
$result = mysqli_query($conn,$check);

if($result->num_rows==1){
?>
<script>alert("게시글이 삭제되었습니다.")</script>
<?php

$sql = "delete from post where idx = '$_GET[idx]' "; 
$resultDelete = mysqli_query($conn,$sql);
header('Location:../sub/commu.php?after');
}else{
?>
<script>alert("접근할수 없습니다.")</script>

<?php
}



?>