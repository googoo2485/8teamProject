<?php
session_start();
session_destroy();


?>
<script>alert("로그아웃 되었습니다.")</script>
<?php  header('location:../../index.php');
?>
