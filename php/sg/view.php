<?php include './session_loginCheck.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글</title>
    <link rel="stylesheet" href="../../css/sg_view.css?after">
    
</head>
<body>
   
<?php
include 'idConnect.php';
                $ID=$_SESSION["userID"];
                $number = $_GET['idx'];
                $query = "SELECT * FROM post WHERE idx = '$number'";                               
                $result =mysqli_query($conn,$query) or die(mysqli_error($conn));;
                $rows = mysqli_fetch_array($result);
                $idx = $rows['idx'];
                $sql_view = "update post set views=views+1 where idx = '$number'";
                $result_view = mysqli_query($conn,$sql_view);
                
        ?>
  <div class= "top"></div>
    
    <div class="header">
        <div id="logo">
            <img class="logoBack" src="../img2/8ver.png" alt="8ver">
        </div>        
    </div>


    <div class="writingContainer">
            <div class="viewBox"><?php echo "조회수&nbsp;".$rows['views']?></div>
        <div class="titleBox"><p><?php echo $rows['title']?></p></div>       
        <div class="gridBox" id="box">           
                <p>닉네임:<?php echo $ID?></p>
        </div>
        <div class="gridBox" id="box2">
            <p><?php echo $rows['content']?></p>
        </div>
        <div class="gridBox2" id="box2_2"></div>
    </div>
<div class="menuBox">
    <a class ="footer_button" href="../sub/commu.php"><p id="list">게시글로</p></a>

      <?php if($_SESSION["userID"] == $rows['id']){
    ?><a class ="footer_modify" href="./modify.php?idx=<?php echo $idx?>" type="button"><p id="list">수정</p></a>
      <a class ="footer_del" href="./delete.php?idx=<?php echo $idx?>" type="button"><p id="list">삭제</p></a>
          <?php
          }
          ?>
      
</div>
                

       
                
      

        </body>
</html>