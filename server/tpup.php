<?php
/**
 * Created by PhpStorm.
 * User: KEJIANET-1
 * Date: 2017/5/10
 * Time: 10:22
 */

include ("function.php");
$con =connectMysql(bszgk);


$time=time();

$files =$_POST['base64Data'];
$files = substr($files,22);
$tmp  = base64_decode($files);



$local_path  = "../banner/";//服务器文件的存放路径


if(!file_exists($local_path)){
    mkdir($local_path);
}


    $picPath2 = $local_path . $time . ".jpg";
    file_put_contents($picPath2, $tmp);


$sql="insert into banner(address)VALUES ('$picPath2')";
$result = mysqli_query($con,$sql) or die('sql error:'.mysqli_error());
if($result>0){
    echo 1;

}else
{
    echo 0;
}









?>