<?php
$host='localhost';
$username='webapp';
$password='123456';
$dbname = "webapp_db";
$conn=mysqli_connect($host,$username,$password,"$dbname");
if(!$conn)
{
    die('Could not Connect MySql Server:' .mysql_error());
}else{
    echo "MySql successfully connected";
}
?>
