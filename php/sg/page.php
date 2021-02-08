<?php  

$total_page= ceil($total_article/$view_article);

if($page%10){
$start_page = $page-$page%10+1;
}else{
	$start_page = $page-9;
}

$end_page=$start_page+10;

//그룹이동

//이전그룹
$prev_group = $start_page -1;
if($prev_group<1)$prev_group=1;



//다음그룹
$next_group = $end_page;
if($next_group>$total_page){
	$next_group= $total_page;
}

//처음페이지
if($page != 1){echo "&nbsp;&nbsp;<a href=$PHP_SELF?page=1>First</a>";

}
else{
echo "First";
}
// 이전 그룹이동
if($page !=1)echo "<a href=$PHP_SELF?page=$prev_group>왼쪽그룹</a>";




for($i=$start_page;$i<$end_page;$i++){
	if($i>$total_page)break;
if($i==$page) echo "$i";
else{
	echo "&nbsp;&nbsp;<a href=$PHP_SELF?page=$i> $i </a>";
}

}

//다음그룹이동
if($page!=$total_page){
	echo "&nbsp;&nbsp; <a href=$PHP_SELF?=page$next_group>다음그룹</a>";
}


//마지막 페이지
if($page != $total_page){
	echo "&nbsp;&nbsp;<a href=$PHP_SELF?page=$total_page>Last</a>";
}else{
	echo "&nbsp;&nbsp;Last";
}
?>