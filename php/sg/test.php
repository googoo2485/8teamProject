<?php
    // mysql 접속
    $conn = mysqli_connect('localhost','root','brian1313','jjick');

    // 값 가져오기
    $id = mysqli_real_escape_string($conn, $_REQUEST['id']);
    $pw = mysqli_real_escape_string($conn, $_REQUEST['pw']);

    $sql = "
        SELECT * FROM userData WHERE id='$id'
    ";

    $result = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($result);

    if($result === null){
        
    ?>
    <script>
        alert('잘못입력하셨습니다!');
        history.back();
    </script>
    <?php
    }else if($result != null){
        if($result['pw'] == $pw){
            ?>
            <script>
                alert('로그인 성공!');
            <?php
                header("location: ../index_result.html?id=".$id);
            ?>
            </script>
            <?php
        }else{
            ?>
        <script>
            alert('잘못입력하셨습니다!');
            history.back();
        </script>
        <?php
        }
    }

?>