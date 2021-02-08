<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글</title>
    
</head>
<body>
   
<?php
session_start();
include 'idConnect.php';
                $ID=$_SESSION["userID"];
                $number = $_GET['idx'];
                echo $number;
                $query = "SELECT * FROM post WHERE idx = $number";                               
                $result =mysqli_query($conn,$query) or die(mysqli_error($conn));;
                $rows = mysqli_fetch_array($result);              
        ?>
 
        <table class="view_table" >
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $ID?></td>
                <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $rows['views']?></td>
        </tr>
 
 
        <tr>
                <td colspan="4" class="view_content" valign="top">
                <?php echo $rows['content']?></td>
                
                    <?php  ?>
        </tr>
        </table>
 
 
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./index_result.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='./modify.php?num=<?=$number?>&id=<?=$ID?>'">수정</button>
 
                <button class="view_btn1" onclick="location.href='./delete.php?num=<?=$number?>&id=<?=$ID?>'">삭제</button>
        </div>

        </body>
</html>