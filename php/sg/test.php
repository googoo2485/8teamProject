<?php 
session_reset();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'idConnect.php';
    
    $sql= 'SELECT * FROM post';
    $result = mysqli_query($conn,$sql);
    
    $postData = mysqli_fetch_array( $result ) ;
    
    ?>
    <div> 여긴 아이디 <?php echo $postData['idx']; ?></div>
    <div> 여긴 제목 <?php echo $postData['title']; ?></div>
    <div> 여긴 조회수 <?php echo $postData['views']; ?></div>
    <div> 여긴 생성날짜 <?php echo $postData['created']; ?></div>


</body>
</html>