<?php


$host = "sql107.infinityfree.com";
$user = "if0_37426356";
$pwd = "ienix190";
$db = "if0_37426356_user";



/*
$host = "localhost";
$user = "u469204600_ica";
$pwd = "Icarus@10";
$db = "u469204600_ica";
*/



/*
$host="localhost";
$user="root";
$pwd="";
$db="ica";
*/

//connect
$con = new mysqli($host, $user, $pwd, $db);
//create connection
if (!$con) {
    die("connection failed : " . mysqli_connect_error());
}
?>
