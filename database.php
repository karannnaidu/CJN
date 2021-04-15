<?php
$servername='localhost';
$username='j2cs4irhuk05';
$password='Karannaidu@12';
$dbname = "cjn";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>