<?php 
include_once 'db_conn.php';

$title = $_POST['titleee'];
$content = $_POST['contenttt'];


$insertsql = "INSERT INTO blog (title, details) VALUES ('$title', '$content');";

mysqli_query($conn, $insertsql);

header("Location: ../bloglist.php");


?>