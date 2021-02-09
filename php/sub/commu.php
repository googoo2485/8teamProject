<?php 
include '../sg/idConnect.php';

session_start()?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <link rel = "stylesheet" href = "../../css/sub_commu.css?after">
</head>
<body>
    <div class= "commu_header">
        <img class = "commu_logo" src="../img2/8ver2.png" alt="8ver">
    </div>
    <div id = "commu_list">
        <ul class = "commu_page">
            <li>제목<span>조회수</span><span>작성자</span><span>날짜</span></li> 

<?php
       
        $PHP_SELF = &$_SERVER['PHP_SELF'];
        $page= $_GET['page'] ?? NULL;
        $sql_page = "SELECT * FROM post";
        $result_page=mysqli_query($conn,$sql_page);
        $total_article=mysqli_num_rows($result_page);      
        $view_article =10;
        if(!$page)$page=1;
        $start =($page-1)*$view_article;
        $query = "SELECT * FROM post order by idx desc limit $start,$view_article";
        mysqli_query($conn,"set names utf8");
        $cot = 1;
        $result_data=mysqli_query($conn,$query);
                while($data=mysqli_fetch_array($result_data)){  


                            
                    $id=$data['idx'];
                    $cot++;             
        ?>
            <li><strong><?php echo "NO:",$data['idx']?></strong>
            <a href = "../sg/view.php?idx=<?php echo $id?>"><?php echo "" .$data[ 'title' ],"&nbsp" ?></a>
            <span><?php echo $data['views'] ?></span>
            <span><?php echo  $data['id'] ?></span>
            <span><?php echo $data[ 'created' ] ?></span></li>
                                     
<?php  }
    ?> 
</ul>
</div>
<div class="grid_container">
<div class="post">
    <a href="../sub/commu.php"><p>글쓰기</p></a>
</div>
<div class="pagee"><?php include '../sg/page.php';?></div>
</div>
</body>










    


