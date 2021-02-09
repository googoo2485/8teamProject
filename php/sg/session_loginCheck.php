
<?php 
session_start();
$log_check =  $_SESSION["log_check"];
if(empty($log_check))
{
?>
<script>alert("권한이 없습니다.");</script>
<script>history.back();</script>
<?php 
}?>
