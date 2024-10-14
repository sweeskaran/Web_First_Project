<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login_table";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
echo"connection successfully";
/*if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user=$_POST['username'];
    $pass=$_POST['password'];
}*/
?>