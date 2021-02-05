
<?php

include 'sessionStart.php';
header("Content-Type:text/html; charset=UTF-8");


$_SESSION['userId'] = $login;
if(isset($login)){
    ?>
    <script>history.back();</script>
    <?php 
}

?>
