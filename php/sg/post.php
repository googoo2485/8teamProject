<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link rel="stylesheet" href="/css/sg_post.css?after">
</head>

<body>
<?php 
    session_reset();
?>
<?php 
    include 'idConnect.php';
    
?>

<?php
        // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
          $sql = "select * from post order by idx desc limit 0,5";
          $sql_user="SELECT * FROM user WHERE name = 'id'"; 
        $result=  mysqli_query($conn,$sql);
        while($postDATA = mysqli_fetch_array($result)){
 
?>

<?php echo '<p>',"NO:",$postDATA['idx']?>

<?php echo "제목:" .$postDATA[ 'title' ],"&nbsp" ?>

<?php echo "내용:",'<a href="">',$postDATA[ 'content' ],'</a>'  ?>
<?php echo "작성시간:", $postDATA[ 'created' ] ?>
<?php echo "삭제:", $postDATA[ 'id' ] ?>


<?php }


?>




<div class="header">

</div>
<div class="body"></div>
<div class="footer"></div>   

            <!-- 검색 폼 영역 -->
            <li id='liSearchOption'>
                <div>
                    <select id='selSearchOption' >
                        <option value='A'>제목+내용</option>
                        <option value='T'>제목</option>
                        <option value='C'>내용</option>
                    </select>
                    <input id='txtKeyWord' />
                    <input type='button' value='검색'/>
                </div>
                </li>

      
</body>
</html>