<?php
include '../sql_function.php';

    $page_sql = "
        select * from board_free
    ";

    $page = $_GET['page'];

    $page_result = mysqli_query($conn,$page_sql);
    $total_article = mysqli_num_rows($page_result);
    // $page = null;
    $view_article = 10; // 한 페이지에 작성할 개수
    if(!$page) $page=1; // 값이없으면 1로
    $start = ($page-1)*$view_article; // 현재 페이지 시점에서 시작점을 지정해준다

    $cot = 1; // 반복문에 $cot ++; 넣어준다.

    $sql = "
        select * from board_free
        order by num desc
        limit $start, $view_article
    ";

    $result = mysqli_query($conn, $sql);
    $cot = 1;
    $cot = $total_article - ($view_article * ($page - 1));


///////////////////////////////////////////////

$cot--;

//////////////////////////////////////////////////////

include('page.php');

?>
<?php


            $page = $_GET['page'];


            $total_page = ceil($total_article / $view_article);

            // 페이지 인덱스의 시작과 종료 범위 구함 //

            if($page % 10){
                echo "전체 페이지 :".$start_page = $page - $page % 10 + 1;
            }else{
                echo "처음 :".$start_page = $page - 9;
            }
            echo "<br>";
            $end_page = $start_page + 10;
            echo "<p>&nbsp;</p>";

            // 그룹이동
            // 이전그룹
            $prev_group = $start_page - 1;
            if($prev_group < 1) $prev_group = 1;
            // 다음그룹
            $next_group = $end_page;
            if($next_group > $total_page) $next_group = $total_page;

            // 처음 페이지
            if($page != 1) echo "<a href=../boardFree/list.php?page=1>First</a> &nbsp; &nbsp;";
            else "First &nbsp; &nbsp;";

            // 이전 그룹 이동
            if($page != 1) echo "<a href=../boardFree/list.php?page=$prev_group>◀</a> &nbsp; &nbsp;";

            for($i = $start_page; $i < $end_page; $i++){
                if($i > $total_page) break;
                if($i == $page) echo "$i &nbsp; &nbsp;";
                else echo "<a href=../boardFree/list.php?page=$i>$i</a> &nbsp;";
            }
            
            // 다음 그룹 이동
            if($page < ($total_page + $page - $end_page)) echo "&nbsp; &nbsp; <a href=../boardFree/list.php?page=$next_group>▶</a>";

            // 마지막 페이지
            if($page != $total_page) echo "&nbsp; &nbsp; <a href=../boardFree/list.php?page=$total_page>Last</a>";
            else echo " &nbsp; &nbsp; Last";
        ?>
        

    </td>
</tr>
</table>
?>