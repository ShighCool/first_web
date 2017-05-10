<?php

function connectMysql($dbName)
{
    $dbServer = '127.0.0.1';
    $user = 'root';
    $pwd = 'root';

    // 连接数据库
    $con = mysqli_connect($dbServer, $user, $pwd) or die('数据库连接失败，错误信息：' .mysqli_error($con));

    // 选择指定数据库
    mysqli_select_db($con, $dbName);
    mysqli_query($con, "set names 'utf8'"); // 兼容中文
    return $con;
}

?>