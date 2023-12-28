<?php 
$user_name = $_POST['user_name'];
$user_password = $_POST['user_password'];

$host="127.0.0.1";
$port=3306;
$socket="";
$user="admin";
$password="password";
$dbname="messenger";
   
$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
       or die ('Could not connect to the database server' . mysqli_connect_error());

$insert_sql = "INSERT INTO users (user_name, user_password)" .
    "VALUES('{$user_name}', '{$user_password}');";
    mysql_query($insert_sql);
   
$con->close();
   
?>