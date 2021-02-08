<?php include 'idConnect.php';
session_start() ?>
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
           logo
        </div>
        
        <div id="userID"><?php 
        echo $_SESSION["userID"];
        ?></div>
        
    </div>


    <div class="writingContainer">       
        <div class="gridBox" id="box"></div>
            <div class="gridBox" id="box2">
    <form action="./postCheck.php" method="POST">
        <div class="Title">
            <ul>
                <li><textarea name="title" class="textarea_tit" placeholder="제목을 입력하세요"></textarea></li>
            </ul>
        </div>
                <div class="gridBox2" id="box2_2"></div>
        </div>
        <div class="gridBox" id="box3">
            <textarea name="content" class="textarea_tit2" placeholder="내용"></textarea>
        </div>
    </div>

    <div class="footer">
        <button type="submit" class ="footer_button">완료</button>
       
    </div>
    </form>
</body>
</html>
