<?php 
include 'idConnect.php';
$idx = $_GET['idx'];
$sql = "SELECT * FROM post WHERE idx = '$idx'";

$result = mysqli_query($conn,$sql);

$rows = mysqli_fetch_array($result);




?>
<?php //include 'session_loginCheck.php'; ?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글</title>
    
    <link rel="stylesheet" href="/css/sg_writing.css?after">
</head>
<body>
    <div class= "top"></div>
    
    <div class="header">
        <div id="logo">
           <img class="logo_back" src="/php/img2/8ver.png" alt="">
        </div>
        
        <div id="userID"><?php session_start();
        echo $_SESSION["userID"];
        ?></div>
        
    </div>


    <div class="writingContainer"> 
        <div class="gridBox" id="box"></div>
            <div class="gridBox" id="box2">
    <form action="./update.php?idx=<?php echo $idx?>" method="POST">
        <div class="Title">
            <ul>
                <li><textarea name="title" class="textarea_tit" placeholder="제목을 입력하세요"><?php echo $rows['title'] ?></textarea></li>
            </ul>
        </div>
                <div class="gridBox2" id="box2_2" name ="idx"><?php echo $rows['idx']."번 게시물" ?></div>
        </div>
        <div class="gridBox" id="box3">
            <textarea name="content" class="textarea_tit2" placeholder="내용"><?php echo $rows['content'] ?></textarea>
        </div>
    </div>
    <div class="footer">
        <button type="submit" class ="footer_button">완료</button>       
    </div>
    </form>
</body>
</html>








    


