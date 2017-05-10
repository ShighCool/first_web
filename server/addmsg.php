<?php

include ("function.php");
$con =connectMysql(bszgk);

$name = $_POST['name'];
$type = $_POST['type'];
$result = $_POST['result'];
$desc = $_POST['desc'];
$word= $_post['word'];


$xql = "select 8 from student where address = '$word'";




?>