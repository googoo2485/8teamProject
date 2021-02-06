<?php
session_start();
include 'idConnect.php';

$title = $_POST['title'];
$content = $_POST['content'];

$sql="SELECT * FROM post";


$result = mysqli_query($conn,$sql);


?>