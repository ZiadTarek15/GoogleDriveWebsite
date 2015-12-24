<?php 
include 'connection.php';
$id = $_GET['id'];
$name = $_GET['depname'];
$year = $_GET['year'];
$class = $_GET['class'];
connect();
insert($id, $name,$year,$class);
?>