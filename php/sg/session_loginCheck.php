
<?php 

session_start();
$log_check =  $_SESSION["log_check"];
if(empty($log_check))
{
?>
<script>alert("로그인 후 다시시도해주세요.");</script>
<script>history.back();</script>
<?php 
}?>
